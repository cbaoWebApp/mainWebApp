<?php
session_start();
$conn=mysqli_connect('localhost','root','','trial_system_admin');
$db=mysqli_select_db($conn,'trial_system_admin');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$_SESSION['id'] = $id;
$sql1     = "SELECT * FROM Requirement WHERE idRequirement = '$id'";
		 
		 $result = $conn->query($sql1) ;
		 
			while($row = mysqli_fetch_array($result)){
				$_SESSION['trueTitle1'] =  $row['trueTitle'];
				$_SESSION['surveyPlan1'] =  $row['surveyPlan'];
				$_SESSION['contractLease1'] =  $row['contractLease'];
				$_SESSION['deedSale1'] =  $row['deedSale'];
				$_SESSION['conDeedSale1'] =  $row['conDeedSale'];
				$_SESSION['constAuth1'] =  $row['constAuth'];
				$_SESSION['taxDec1'] =  $row['taxDec'];
				$_SESSION['realPropTax1'] =  $row['realPropTax'];
				$_SESSION['bpForm1'] =  $row['bpForm'];
				$_SESSION['BuilPlan1'] =  $row['BuilPlan'];
				$_SESSION['StrucDesign1'] =  $row['StrucDesign'];
				$_SESSION['BuildSpec1'] =  $row['BuildSpec'];
				$_SESSION['billMat1'] =  $row['billMat'];
				$_SESSION['picSite1'] =  $row['picSite'];
				$_SESSION['soilAnal1'] =  $row['soilAnal'];
				$_SESSION['ecc1'] =  $row['ecc'];
				$_SESSION['stor31'] =  $row['3stor'];
				$_SESSION['stor41'] =  $row['4stor'];
				$_SESSION['taxReceipt1'] =  $row['taxReceipt'];
				$_SESSION['zoningCert1'] =  $row['zoningCert'];
				$_SESSION['FireCert1'] =  $row['FireCert'];
				$_SESSION['wmsCert1'] =  $row['wmsCert'];
				$_SESSION['logbook1'] =  $row['logbook'];
				$_SESSION['tarpaulin1'] =  $row['tarpaulin'];
				$_SESSION['clearance1'] =  $row['clearance'];
				$_SESSION['dpwh1'] =  $row['dpwh'];
				$_SESSION['aviation1'] =  $row['aviation'];
				$_SESSION['psg1'] =  $row['psg'];
				$_SESSION['notarized1'] =  $row['notarized'];
				'echo passed';
				
			}
			
			 $conn->close();
			 header("Location: /Receiving Section/receivingRequirements.php");
?>