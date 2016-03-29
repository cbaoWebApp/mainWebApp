<?php
	session_start();
?>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="routingSlip.js"></script>
	</head>
	<body>
		<form method="post" action="saveRoutingSlipComments.php">
			<span><?php if(!empty($_SESSION['status_error'])){echo $_SESSION['status_error']; unset($_SESSION['status_error']);}?></span><br>
			<input id="deficient" type="radio" name="status" value="deficient">Deficient
			<input id="approve" type="radio" name="status" value="approve">Approve
			<br>
			<textarea id="commentsTextArea" name="commentsTextArea" rows="4" cols="50" disabled="disabled"></textarea>
			<br>
			<input type="submit" value="Save">
		</form>
		<input type="button" id="viewRSHistory" value="View Routing Slip History">
		<div id="routingSlipHistory" title ="Routing Slip History" style="display:none" align="center">
			<?php 
				$conn = mysqli_connect('localhost','root','','baguio_cbao'); 
				$db  = mysqli_select_db($conn,'baguio_cbao');
				$personnel_id = 1;
				$bpform_id = 1;
				$counter = 1;
				
				$sql1 = "SELECT comment FROM comments WHERE personnel_id = '$personnel_id' AND routing_slip_id IN (SELECT routing_slip_id FROM routing_slip WHERE bpform_id = '$bpform_id')";
				$result = mysqli_query($conn, $sql1);
				
				while($row = mysqli_fetch_array($result)) {
					echo "<p style='text-align:left;'>Routing Slip #".$counter."</p>";
					echo "<p style='text-align:left;'>Comment:".$row['comment']."</p>";
					$counter++;
				}
			?>
		</div>
		<input type="button" value="Cancel">
	</body>
</html>
