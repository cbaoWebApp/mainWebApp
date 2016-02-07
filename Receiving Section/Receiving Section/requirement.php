<?php 
session_start();
$conn=mysqli_connect('localhost','root','','trial_system_admin');
$db  =mysqli_select_db($conn,'trial_system_admin');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	if( isset($_POST['viewReq']) ){
		if (isset($_POST['owner'])) {
			$_SESSION["owner"] = "true";
   
		} else {
			$_SESSION['owner'] = "false";
   
		}
		
		if (isset($_POST['notowner'])) {
			$_SESSION["notowner"] = "true";
   
		} else {
			$_SESSION['notowner'] = "false";
   
		}
		
		if (isset($_POST['trueTitle'])) {
			$_SESSION["trueTitle"] = "true";
   
		} else {
			$_SESSION['trueTitle'] = "false";
   
		}
		
		if (isset($_POST['surveyPlan'])) {
			$_SESSION["surveyPlan"] = "true";
   
		} else {
			$_SESSION['surveyPlan'] = "false";
   
		}
		
		if (isset($_POST['contractLease'])) {
			$_SESSION["contractLease"] = "true";
   
		} else {
			$_SESSION['contractLease'] = "false";
   
		}
		
		if (isset($_POST['deedSale'])) {
			$_SESSION["deedSale"] = "true";
   
		} else {
			$_SESSION['deedSale'] = "false";
   
		}
		
		if (isset($_POST['conDeedSale'])) {
			$_SESSION["conDeedSale"] = "true";
   
		} else {
			$_SESSION['conDeedSale'] = "false";
   
		}
		
		if (isset($_POST['constAuth'])) {
			$_SESSION["constAuth"] = "true";
   
		} else {
			$_SESSION['constAuth'] = "false";
   
		}
		
		if (isset($_POST['taxDec'])) {
			$_SESSION["taxDec"] = "true";
   
		} else {
			$_SESSION['taxDec'] = "false";
   
		}
		
		if (isset($_POST['realPropTax'])) {
			$_SESSION["realPropTax"] = "true";
   
		} else {
			$_SESSION['realPropTax'] = "false";
   
		}
		
		if (isset($_POST['bpForm'])) {
			$_SESSION["bpForm"] = "true";
   
		} else {
			$_SESSION['bpForm'] = "false";
   
		}
		
		if (isset($_POST['BuilPlan'])) {
			$_SESSION["BuilPlan"] = "true";
   
		} else {
			$_SESSION['BuilPlan'] = "false";
   
		}
		
		if (isset($_POST['StrucDesign'])) {
			$_SESSION["StrucDesign"] = "true";
   
		} else {
			$_SESSION['StrucDesign'] = "false";
   
		}
		
		if (isset($_POST['BuildSpec'])) {
			$_SESSION["BuildSpec"] = "true";
   
		} else {
			$_SESSION['BuildSpec'] = "false";
   
		}
		
		if (isset($_POST['billMat'])) {
			$_SESSION["billMat"] = "true";
   
		} else {
			$_SESSION['billMat'] = "false";
   
		}
		
		if (isset($_POST['picSite'])) {
			$_SESSION["picSite"] = "true";
   
		} else {
			$_SESSION['picSite'] = "false";
   
		}
		
		if (isset($_POST['soilAnal'])) {
			$_SESSION["soilAnal"] = "true";
   
		} else {
			$_SESSION['soilAnal'] = "false";
   
		}
		
		if (isset($_POST['ecc'])) {
			$_SESSION["ecc"] = "true";
   
		} else {
			$_SESSION['ecc'] = "false";
   
		}
		
		if (isset($_POST['stor3'])) {
			$_SESSION["stor3"] = "true";
   
		} else {
			$_SESSION['stor3'] = "false";
   
		}
		
		if (isset($_POST['stor4'])) {
			$_SESSION["stor4"] = "true";
   
		} else {
			$_SESSION['stor4'] = "false";
   
		}
		
		if (isset($_POST['taxReceipt'])) {
			$_SESSION["taxReceipt"] = "true";
   
		} else {
			$_SESSION['taxReceipt'] = "false";
   
		}
		
		if (isset($_POST['zoningCert'])) {
			$_SESSION["zoningCert"] = "true";
   
		} else {
			$_SESSION['zoningCert'] = "false";
   
		}
		
		if (isset($_POST['FireCert'])) {
			$_SESSION["FireCert"] = "true";
   
		} else {
			$_SESSION['FireCert'] = "false";
   
		}
		
		if (isset($_POST['wmsCert'])) {
			$_SESSION["wmsCert"] = "true";
   
		} else {
			$_SESSION['wmsCert'] = "false";
   
		}
		
		if (isset($_POST['logbook'])) {
			$_SESSION["logbook"] = "true";
   
		} else {
			$_SESSION['logbook'] = "false";
   
		}
		
		if (isset($_POST['tarpaulin'])) {
			$_SESSION["tarpaulin"] = "true";
   
		} else {
			$_SESSION['tarpaulin'] = "false";
   
		}
		
		if (isset($_POST['clearance'])) {
			$_SESSION["clearance"] = "true";
   
		} else {
			$_SESSION['clearance'] = "false";
   
		}
		
		if (isset($_POST['dpwh'])) {
			$_SESSION["dpwh"] = "true";
   
		} else {
			$_SESSION['dpwh'] = "false";
   
		}
		
		if (isset($_POST['aviation'])) {
			$_SESSION["aviation"] = "true";
   
		} else {
			$_SESSION['aviation'] = "false";
   
		}
		
		if (isset($_POST['psg'])) {
			$_SESSION["psg"] = "true";
   
		} else {
			$_SESSION['psg'] = "false";
   
		}
		
		if (isset($_POST['notarized'])) {
			$_SESSION["notarized"] = "true";
   
		} else {
			$_SESSION['notarized'] = "false";
   
		}
		
		
		
		
		} else{
			echo 'wrong';
		}
		
		// $sql     = "INSERT INTO Requirement (trueTitle) VALUES ('$trueTitle')";
		
			$sqls = 
			"UPDATE Requirement SET 
			owner='$_SESSION[owner]',
			notowner='$_SESSION[notowner]',
			trueTitle='$_SESSION[trueTitle]',
			surveyPlan='$_SESSION[surveyPlan]',
			contractLease='$_SESSION[contractLease]',
			deedSale='$_SESSION[deedSale]',
			conDeedSale='$_SESSION[conDeedSale]',
			constAuth='$_SESSION[constAuth]',
			taxDec='$_SESSION[taxDec]',
			realPropTax='$_SESSION[realPropTax]',
			bpForm='$_SESSION[bpForm]',
			BuilPlan='$_SESSION[BuilPlan]',
			StrucDesign='$_SESSION[StrucDesign]',
			BuildSpec='$_SESSION[BuildSpec]',
			billMat='$_SESSION[billMat]',
			picSite='$_SESSION[picSite]',
			soilAnal='$_SESSION[soilAnal]',
			ecc='$_SESSION[ecc]',
			3stor='$_SESSION[stor3]',
			4stor='$_SESSION[stor4]',
			taxReceipt='$_SESSION[taxReceipt]',
			zoningCert='$_SESSION[zoningCert]',
			FireCert='$_SESSION[FireCert]',
			wmsCert='$_SESSION[wmsCert]',
			logbook='$_SESSION[logbook]',
			tarpaulin='$_SESSION[tarpaulin]',
			clearance='$_SESSION[clearance]',
			dpwh='$_SESSION[dpwh]',
			aviation='$_SESSION[aviation]',
			psg='$_SESSION[psg]',
			notarized='$_SESSION[notarized]'	
			WHERE idRequirement='$_SESSION[id]'";

		/**
		
		
			
			$sqls = 
			UPDATE Requirement SET trueTitle=''{$_SESSION['trueTitle']}'',
			surveyPlan=''{$_SESSION['surveyPlan']}'',
			contractLease=''{$_SESSION['contractLease']}'',
			deedSale=''{$_SESSION['deedSale']}'',
			conDeedSale=''{$_SESSION['conDeedSale']}'',
			constAuth=''{$_SESSION['constAuth']}'',
			taxDec=''{$_SESSION['taxDec']}'',
			realPropTax=''{$_SESSION['realPropTax']}'',
			bpForm=''{$_SESSION['bpForm']}'',
			BuilPlan=''{$_SESSION['BuilPlan']}'',
			StrucDesign=''{$_SESSION['StrucDesign']}'',
			BuildSpec=''{$_SESSION['BuildSpec']}'',
			billMat=''{$_SESSION['billMat']}'',
			picSite=''{$_SESSION['picSite']}'',
			soilAnal=''{$_SESSION['soilAnal']}'',
			ecc=''{$_SESSION['ecc']}'',
			stor3=''{$_SESSION['stor3']}'',
			stor4=''{$_SESSION['stor4']}'',
			taxReceipt=''{$_SESSION['taxReceipt']}'',
			zoningCert=''{$_SESSION['zoningCert']}'',
			FireCert=''{$_SESSION['FireCert']}'',
			wmsCert=''{$_SESSION['wmsCert']}'',
			logbook=''{$_SESSION['logbook']}'',
			tarpaulin=''{$_SESSION['tarpaulin']}'',
			clearance=''{$_SESSION['clearance']}'',
			dpwh=''{$_SESSION['dpwh']}'',
			aviation=''{$_SESSION['aviation']}'',
			psg=''{$_SESSION['psg']}'',
			notarized=''{$_SESSION['notarized']}''	
			WHERE id='$id';
			
			$sql     = "INSERT INTO Requirement 
(owner,notowner,trueTitle,surveyPlan,contractLease,deedSale,conDeedSale,constAuth,taxDec,realPropTax,bpForm,BuilPlan,StrucDesign,BuildSpec,billMat,picSite,
soilAnal,ecc,stor3,stor4,taxReceipt,zoningCert,FireCert,wmsCert,logbook,tarpaulin,clearance,dpwh,aviation,psg,notarized) 
VALUES 
('{$_SESSION['owner']}', 
'{$_SESSION['notowner']}', 
'{$_SESSION['trueTitle']}', 
'{$_SESSION['surveyPlan']}', 
'{$_SESSION['contractLease']}', 
'{$_SESSION['deedSale']}', 
'{$_SESSION['conDeedSale']}', 
'{$_SESSION['constAuth']}', 
'{$_SESSION['taxDec']}', 
'{$_SESSION['realPropTax']}', 
'{$_SESSION['bpForm']}', '{$_SESSION['BuilPlan']}', '{$_SESSION['StrucDesign']}', '{$_SESSION['BuildSpec']}', '{$_SESSION['billMat']}', '{$_SESSION['picSite']}', '{$_SESSION['soilAnal']}', 
'{$_SESSION['ecc']}', '{$_SESSION['stor3']}', '{$_SESSION['stor4']}', '{$_SESSION['taxReceipt']}', '{$_SESSION['zoningCert']}', '{$_SESSION['FireCert']}', '{$_SESSION['wmsCert']}', '{$_SESSION['logbook']}',
'{$_SESSION['tarpaulin']}', '{$_SESSION['clearance']}', '{$_SESSION['dpwh']}', '{$_SESSION['aviation']}', '{$_SESSION['psg']}', '{$_SESSION['notarized']}' )";
		
//('$trueTitle','$surveyPlan','$contractLease','$deedSale','$conDeedSale','$constAuth','$taxDec','$realPropTax','$bpForm','$BuilPlan','$StrucDesign',
//'$BuildSpec','$billMat','$picSite','$soilAnal','$ecc','$stor3','$stor4','$taxReceipt','$zoningCert','$FireCert','$wmsCert','$logbook','$tarpaulin','$clearance','$dpwh',
//'$aviation','$psg','$notarized')";		
		*/
		
if ($conn->query($sqls) === TRUE) {
			$message= "New record created successfully";
			echo $message;
		} else {
			$message= "Error: " . $sqls . "<br>" . $conn->error;
			echo $message;
		}
		
		
		
		
		 $conn->close();
		 header("Location: /New folder/Receiving Section/receivingHome.php");

?>