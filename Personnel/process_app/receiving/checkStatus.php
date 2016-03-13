<?php
session_start();
$conn=mysqli_connect('localhost','root','','baguio_cbao');
$db=mysqli_select_db($conn,'baguio_cbao');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$_SESSION['count']=0;
$id = $_GET['id'];
$_SESSION['id'] = $id;
$sql1     = "SELECT * FROM documents WHERE documents_id = '$id'";
$result = $conn->query($sql1) ;
			 if(mysqli_num_rows($result) == 0){
				
						$error= "n/a";
						echo "No results found";
						} else {
			while($row = mysqli_fetch_array($result)){
				
				$_SESSION['award1'] =  $row['award'];
				if($_SESSION['award1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['trueTitle1'] =  $row['trueTitle'];
				if($_SESSION['trueTitle1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['surveyPlan1'] =  $row['surveyPlan'];
				if($_SESSION['surveyPlan1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['contractLease1'] =  $row['contractLease'];
				if($_SESSION['contractLease1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['deedSale1'] =  $row['deedSale'];
				if($_SESSION['deedSale1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['conDeedSale1'] =  $row['conDeedSale'];
				if($_SESSION['conDeedSale1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['constAuth1'] =  $row['constAuth'];
				if($_SESSION['constAuth1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['taxDec1'] =  $row['taxDec'];
				if($_SESSION['taxDec1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['realPropTax1'] =  $row['realPropTax'];
				if($_SESSION['realPropTax1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['bpForm1'] =  $row['bpForm'];
				if($_SESSION['bpForm1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['BuilPlan1'] =  $row['BuilPlan'];
				if($_SESSION['BuilPlan1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['StrucDesign1'] =  $row['StrucDesign'];
				if($_SESSION['StrucDesign1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['BuildSpec1'] =  $row['BuildSpec'];
				if($_SESSION['BuildSpec1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['billMat1'] =  $row['billMat'];
				if($_SESSION['billMat1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['picSite1'] =  $row['picSite'];
				if($_SESSION['picSite1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['soilAnal1'] =  $row['soilAnal'];
				if($_SESSION['soilAnal1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['ecc1'] =  $row['ecc'];
				if($_SESSION['ecc1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['stor31'] =  $row['3stor'];
				if($_SESSION['stor31']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['stor41'] =  $row['4stor'];
				if($_SESSION['stor41']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['taxReceipt1'] =  $row['taxReceipt'];
				if($_SESSION['taxReceipt1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['zoningCert1'] =  $row['zoningCert'];
				if($_SESSION['zoningCert1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['FireCert1'] =  $row['FireCert'];
				if($_SESSION['FireCert1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['wmsCert1'] =  $row['wmsCert'];
				if($_SESSION['wmsCert1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['logbook1'] =  $row['logbook'];
				if($_SESSION['logbook1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['tarpaulin1'] =  $row['tarpaulin'];
				if($_SESSION['tarpaulin1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['clearance1'] =  $row['clearance'];
				if($_SESSION['clearance1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['dpwh1'] =  $row['dpwh'];
				if($_SESSION['dpwh1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['aviation1'] =  $row['aviation'];
				if($_SESSION['aviation1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['psg1'] =  $row['psg'];
				if($_SESSION['psg1']=="true"){
					$_SESSION['count']++;
				}
				
				$_SESSION['notarized1'] =  $row['notarized'];
				if($_SESSION['notarized1']=="true"){
					$_SESSION['count']++;
				}
				
				'echo passed';
				
				if($_SESSION['owner'] == true){
				$_SESSION['res'] = 25;
			} else if($_SESSION['notowner'] == true){
				$_SESSION['res'] = 28;
			}
			//echo $_SESSION['counts'];
			$_SESSION['ratio'] = $_SESSION['count'] . "/" . $_SESSION['res'];
			
			}
			
			
						}
						
			$query = "SELECT * FROM checklist WHERE bpform_id = '$id'";
$resultx = $conn->query($query) ;
			 if(mysqli_num_rows($resultx) == 0){
				
						$error= "n/a";
						echo "No results found";
						} else {
			while($row = mysqli_fetch_array($resultx)){
				
				
			
            $_SESSION['permitNum'] = $row['permitNum'];
            $_SESSION['appNum'] = $row['appNum'];
						}}
						$sqlsx = 
			"UPDATE checklist SET 
			ratio='$_SESSION[ratio]'	
			WHERE documents_id='$_SESSION[id]'";
		if ($conn->query($sqlsx) === TRUE) {
			$message= "New record created successfully";
			echo $message;
		} else {
			$message= "Error: " . $sqls . "<br>" . $conn->error;
			echo $message;
		}
	
			 $conn->close();
			 header("Location: receivingRequirements.php");
?>