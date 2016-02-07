<?php
session_start();

    $connect = mysqli_connect("localhost", "root", "", "trial_system_admin");
    $filter_Result = mysqli_query($connect, $_SESSION['query']);
  

                while($row = mysqli_fetch_array($filter_Result)){
                  $controlNum = $row['controlNum'];
                  $permitNum = $row['permitNum'];
                  $appNum = $row['appNum'];
                  $dateOfApp = $row['dateOfApp'];
				  $status = $row['status'];
				  
                  //display in table
                  echo "<tr>";
                  echo "<td>" . $controlNum . "</td>";
                  echo "<td>".$permitNum."</td>";
                  echo "<td>".$appNum."</td>";

                  echo "<td>". $dateOfApp." </td>";
				  echo "<td><button id = '$controlNum' class='viewMe' name='viewReq'>View Requirements</button>";
				  echo "<td>".$status."</td>";
				  echo "</tr>";  
                
                //mysqli_close($conn);
                  
            }
			
			
                  
			if(mysqli_num_rows($filter_Result) == 0){
				
						$error= "n/a";
						echo "<tr>";
						
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						
						echo "<td>".$error."</td>";
						
						echo "</tr>";
						}
			
			?>
			<div id="pager" class="pager">
				<form>
					<input type="button" value="<" class="prev"/>
					<input type="text" class="pagedisplay"/>
				<input type="button" value=">" class="next"/>
			
					<select class="pagesize">
						<option selected="selected"  value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option  value="40">40</option>
					</select>
				</form>
			</div>
			
<script>
$( ".viewMe" ).click(function(event) {
        id = event.target.id; 
        //alert(id);
		var xml = new XMLHttpRequest();
		xml.onreadystatechange = function(){
		  if(xml.readyState == 4 && xml.status ==200){
			window.location.href = "checkStatus.php?id=" + id;
		   }
		};
		xml.open("GET", "receivingRequirements.php", true);
		xml.send();
		});
		
		

</script>