<?php 
session_start();
$conn=mysqli_connect('localhost','root','','baguio_cbao');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
} 


?>
<html>
	<head>
	<script src="../jquery/jquery-1.12.1.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<script src="../jquery/jquery.dataTables.min.js"></script>
	<script src="../jquery/jquery-ui.js"></script>
	<script src="../js/notifications.js"></script>
	
	<script>
		$(document).ready(function(){
			$('#myTable').dataTable();
		});
	</script>
	
	<?php
		if(!empty($_SESSION['application_no'])){
		echo "<script>
					$(function () {
						$(\"#notificationDetails\").dialog({
							autoOpen: true,
							closeOnEscape: true,
							open: function (event, ui){
							$(\".ui-dialog-titlebar-close\", ui.dialog | ui).hide();
							},                            
							height: 'auto',
							width: 'auto'                           
							});
						});
			</script>";
	}
	?>
	</head>
	<body>
		<div>
			<table id="myTable">
				<thead>
					<tr>
						<th>Application Number</th>
						<th>Reason</th>
						<th></th>
					</tr>
				</thead>
					<tbody>
					<?php
						$sql1 = "SELECT application_no, bpform_id FROM bpform 
								WHERE bpform_id IN (SELECT bpform_id FROM routing_slip
								WHERE routing_slip_id IN (SELECT routing_slip_id FROM comments
								GROUP BY routing_slip_id
								HAVING COUNT(routing_slip_id) = 8
									)
								)";
						$result1 = mysqli_query($conn, $sql1);									
						if(mysqli_num_rows($result1) > 0){
							while($row = mysqli_fetch_assoc($result1)){  
								echo "<tr>
											<td>{$row['application_no']}</td>
								";
								
								$sql2 = "SELECT comment FROM comments
										WHERE routing_slip_id IN (SELECT routing_slip_id FROM routing_slip
										WHERE bpform_id = '{$row['bpform_id']}'
										);";
								$result2 = mysqli_query($conn, $sql2);	
								if(mysqli_num_rows($result2) > 0){
									echo "<td><pre>";
									while($row = mysqli_fetch_assoc($result2)){
										echo "{$row['comment']}<br>";
									}//end of while
									echo "</pre></td>";
									echo "<td><input type='button' id='btn'  onclick='viewNotificationDetails(this);' value='Contact'/></td>";
									echo "</tr>";
								}//end of if
							}//end of while
						}//end of if
					?>
				</tbody>
			</table>
			<div id="notificationDetails" style="display:none" align="center" title="<?php echo "Application #".$_SESSION['application_no']?>">
				<?php
					$sql3 = "SELECT bpform_id FROM bpform WHERE application_no = {$_SESSION['application_no']};";
					$result3 = mysqli_query($conn, $sql3);
					
					echo "Reasons: <br>";
					if(mysqli_num_rows($result3) == 1){
						while($row = mysqli_fetch_assoc($result3)){
							$sql4 = "SELECT comment FROM comments
										WHERE routing_slip_id IN (SELECT routing_slip_id FROM routing_slip
										WHERE bpform_id = '{$row['bpform_id']}'
										);";
							
							$result4 = mysqli_query($conn, $sql4);
							if(mysqli_num_rows($result4) > 0){
								while($row = mysqli_fetch_assoc($result4)){
										echo "{$row['comment']}<br>";
								}//end of while
							}//end of if
						}//end of while
					}//end of if
					$sql5 = "SELECT contact_number FROM applicant WHERE applicant_id = (
							SELECT applicant_id FROM bpform WHERE bpform_id = 8
							);";
					$result5 = mysqli_query($conn, $sql5);
					if(mysqli_num_rows($result5) == 1){
						while($row = mysqli_fetch_assoc($result5)){
									echo "Contact Number: <br>";
									echo "{$row['contact_number']}<br>";
							}//end of while
					}
					
					while($row = mysqli_fetch_assoc($result3)){
							$sql6 = "SELECT contacted FROM routing_slip
									WHERE bpform_id = '{$row['bpform_id']}';";
							
							$result6 = mysqli_query($conn, $sql6);
							if(mysqli_num_rows($result6) == 1){
								while($row = mysqli_fetch_assoc($result6)){
										if($row['contact_number'] = "NO"){
											echo "<input type='button' value='Done'/>";
											echo "<input type='button' value='Cancel' onclick='cancelBtn()'/>";
										}else if($row['contact_number'] = "YES"){
											echo "<input type='button' value='Resolved'";
										}
								}//end of while
							}//end of if
						}//end of while
						
					unset($_SESSION['application_no']);
				?>			
			</div>
		</div>
	</body>
</html>
