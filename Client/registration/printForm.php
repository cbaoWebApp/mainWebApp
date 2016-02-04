<?php
	session_start();

	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	   
		if (empty($_POST["lastName"])) {
			 $_SESSION['$lnameErr'] = "*Last Name is required";
	    } else {
			$_SESSION['$lName'] = test_input($_POST["lastName"]);
		}
		
		if (empty($_POST["firstName"])) {
			$_SESSION['$fnameErr'] = "*First Name is required";
	    } else {
			$_SESSION['$fName'] = test_input($_POST["firstName"]);
		}
		
		if (empty($_POST["middleInitial"])) {
			$_SESSION['$mnameErr'] = "*Middle Initial is required";
	    } else {
			$_SESSION['$mName'] = test_input($_POST["middleInitial"]);
		}
		
		if (empty($_POST["TaxAccNo"])) {
			$_SESSION['$TaxAccNoErr'] = "*Tax Account Number is required";
	    } else {
			$_SESSION['$TaxAccNo'] = test_input($_POST["TaxAccNo"]);
		}
		
		if (empty($_POST["formOfOwnership"])) {
			$_SESSION['$formOfOwnershipErr'] = "*Form of Ownership is required";
	    } else {
			$_SESSION['$formOfOwnership'] = test_input($_POST["formOfOwnership"]);
		}
	
		if (empty($_POST["enterpriseName"])) {
			$_SESSION['$entNameErr'] = "*Enterprise Name is required";
	    } else {
			$_SESSION['$entName'] = test_input($_POST["enterpriseName"]);
		}
	    
		if (empty($_POST["contactNumber"])) {
			$_SESSION['$contactNumberErr'] = "*Contact Number is required";
	    } else {
			$_SESSION['$contactNumber'] = test_input($_POST["contactNumber"]);
		}
		
		if (empty($_POST["location"])) {
			$_SESSION['$locationErr'] = "*Location of construction is required";
	    } else {
			$_SESSION['$location'] = test_input($_POST["location"]);
		}
		
		if (empty($_POST["newConstruction"])) {
			$_SESSION['$newConstructionErr'] = "*This field is required";
	    } else {
			$_SESSION['$newConstruction'] = test_input($_POST["newConstruction"]);
		}
		
		if (empty($_POST["additionOf"])) {
			$_SESSION['$additionOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$additionOf'] = test_input($_POST["additionOf"]);
		}
		
		if (empty($_POST["repairOf"])) {
			$_SESSION['$repairOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$repairOf'] = test_input($_POST["repairOf"]);
		}
		
		if (empty($_POST["demolitionOf"])) {
			$_SESSION['$demolitionOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$demolitionOf'] = test_input($_POST["demolitionOf"]);
		}
		
		if (empty($_POST["renovationOf"])) {
			$_SESSION['$renovationOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$renovationOf'] = test_input($_POST["renovationOf"]);
		}
		
		if (empty($_POST["others1"]) || empty($_POST["others2"])) {
			$_SESSION['$others1and2Err'] = "*These fields are required";
	    } else {
			$_SESSION['$others1'] = test_input($_POST["others1"]);
			$_SESSION['$others2'] = test_input($_POST["others2"]);
		}
		
		if (empty($_POST["others3"]) || empty($_POST["others4"])) {
			$_SESSION['$others3and4Err'] = "*These fields are required";
	    } else {
			$_SESSION['$others3'] = test_input($_POST["others3"]);
			$_SESSION['$others4'] = test_input($_POST["others4"]);
		}
		
		if (empty($_POST["numberOfUnits"])) {
			$_SESSION['$numberOfUnitsErr'] = "*Number of units is required";
	    } else {
			$_SESSION['$numberOfUnits'] = test_input($_POST["numberOfUnits"]);
		}
		
		if (empty($_POST["parent_typeOfOccupancy"])) {
			$_SESSION['$parent_typeOfOccupancyErr'] = "*Please select type of occupancy";
	    } else {
			$_SESSION['$parent_typeOfOccupancy'] = test_input($_POST["parent_typeOfOccupancy"]);
		}
		
//		if (($_POST["parent_typeOfOccupancy"])&&empty($_POST["specific1"])) {
//			$_SESSION['$specific1Err'] = "*Please specify";
//	    } else {
//			$_SESSION['$specific1'] = test_input($_POST["specific1"]);
//		}
		
//		if ((($_POST["parent_typeOfOccupancy"])&&($_POST["specific1"]))&&empty($_POST["specific2"])) {
//			$_SESSION['$specific2Err'] = "*Please specify";
//	    } else {
//			$_SESSION['$specific2'] = test_input($_POST["specific2"]);
//		}
		
	    if (empty($_POST["kindOfBusiness"])) {
			$_SESSION['$kindOfBusinessErr'] = "*Kind of Business is required";
	    } else {
			$_SESSION['$kindOfBusiness'] = test_input($_POST["kindOfBusiness"]);
		}
		
	    if (empty($_POST["Address"])) {
			$_SESSION['$AddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Address'] = test_input($_POST["Address"]);
		}
		
	    if (empty($_POST["tec1"])) {
			$_SESSION['$tec1Err'] = "*Cost is required";
	    } else {
			$_SESSION['$tec1'] = test_input($_POST["tec1"]);
		}
		
	    if (empty($_POST["tec2"])) {
			$_SESSION['$tec2Err'] = "*Cost is required";
	    } else {
			$_SESSION['$tec2'] = test_input($_POST["tec2"]);
		}
		
	    if (empty($_POST["tec3"])) {
			$_SESSION['$tec3Err'] = "*Cost is required";
	    } else {
			$_SESSION['$tec3'] = test_input($_POST["tec3"]);
		}
		
	    if (empty($_POST["tec4"])) {
			$_SESSION['$tec4Err'] = "*Cost is required";
	    } else {
			$_SESSION['$tec4'] = test_input($_POST["tec4"]);
		}
		
	    if (empty($_POST["tec5"])) {
			$_SESSION['$tec5Err'] = "*Cost is required";
	    } else {
			$_SESSION['$tec5'] = test_input($_POST["tec5"]);
		}
	
		$_SESSION['$tec6'] = $_POST["tec1"]+ $_POST["tec2"]+$_POST["tec3"]+$_POST["tec4"]+$_POST["tec5"]+$_POST["tec6"];
		
	    if (empty($_POST["cei1"])) {
			$_SESSION['$cei1Err'] = "*This field is required";
	    } else {
			$_SESSION['$cei1'] = test_input($_POST["cei1"]);
		}
		
		if (empty($_POST["cei2"])) {
			$_SESSION['$cei2Err'] = "*This field is required";
	    } else {
			$_SESSION['$cei2'] = test_input($_POST["cei2"]);
		}
		
		if (empty($_POST["cei3"])) {
			$_SESSION['$cei3Err'] = "*This field is required";
	    } else {
			$_SESSION['$cei3'] = test_input($_POST["cei3"]);
		}
		
		if (empty($_POST["storey"])) {
			$_SESSION['$storeyErr'] = "*Number of Storeys is required";
	    } else {
			$_SESSION['$storey'] = test_input($_POST["storey"]);
		}	
		
	    if (empty($_POST["floorArea"])) {
			$_SESSION['$floorAreaErr'] = "*Floor Area is required";
	    } else {
			$_SESSION['$floorArea'] = test_input($_POST["floorArea"]);
		}

	    if (empty($_POST["constructionDate"])) {
			$_SESSION['$constructionDateErr'] = "*Proposed Date of Conctruction is required";
	    } else {
			$_SESSION['$constructionDate'] = test_input($_POST["constructionDate"]);
		}	
		
		if (empty($_POST["o4"])) {
			$_SESSION['$o4Err'] = "*Materials of construction is required";
	    } else {
			$_SESSION['$o4'] = test_input($_POST["o4"]);
		}	
		
	    if (empty($_POST["SPRC"])) {
			$_SESSION['$SPRCErr'] = "*PRC Reg. Number is required";
	    } else {
			$_SESSION['$SPRC'] = test_input($_POST["SPRC"]);
		}
		
	    if (empty($_POST["SlastName"])) {
			$_SESSION['$SlastNameErr'] = "*Last Name is required";
	    } else {
			$_SESSION['$SlastName'] = test_input($_POST["SlastName"]);
		}
		
	    if (empty($_POST["SmiddleInitial"])) {
			$_SESSION['$SmiddleInitialErr'] = "*Middle Initial is required";
	    } else {
			$_SESSION['$SmiddleInitial'] = test_input($_POST["SmiddleInitial"]);
		}
		
	    if (empty($_POST["SFirstName"])) {
			$_SESSION['$SFirstNameErr'] = "*First Name is required";
	    } else {
			$_SESSION['$SFirstName'] = test_input($_POST["SFirstName"]);
		}
		
	    if (empty($_POST["Saddress"])) {
			$_SESSION['$SaddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Saddress'] = test_input($_POST["Saddress"]);
		}
		
	    if (empty($_POST["CPRC"])) {
			$_SESSION['$CPRCErr'] = "*PRC Reg. Number is required";
	    } else {
			$_SESSION['$CPRC'] = test_input($_POST["CPRC"]);
		}
		
	    if (empty($_POST["ClastName"])) {
			$_SESSION['$ClastNameErr'] = "*Last Name is required";
	    } else {
			$_SESSION['$ClastName'] = test_input($_POST["ClastName"]);
		}
		
	    if (empty($_POST["CFirstName"])) {
			$_SESSION['$CFirstNameErr'] = "*First Name is required";
	    } else {
			$_SESSION['$CFirstName'] = test_input($_POST["CFirstName"]);
		}
		
	    if (empty($_POST["CmiddleInitial"])) {
			$_SESSION['$CmiddleInitialErr'] = "*MIddle Initial is required";
	    } else {
			$_SESSION['$CmiddleInitial'] = test_input($_POST["CmiddleInitial"]);
		}
		
	    if (empty($_POST["Ccaddress"])) {
			$_SESSION['$CcaddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Ccaddress'] = test_input($_POST["Ccaddress"]);
		}
		
	    if (empty($_POST["ptrNo"])) {
			$_SESSION['$ptrNoErr'] = "*PTR Number is required";
	    } else {
			$_SESSION['$ptrNo'] = test_input($_POST["ptrNo"]);
		}
		
	    if (empty($_POST["dateIssued"])) {
			$_SESSION['$dateIssuedErr'] = "*Date Issued is required";
	    } else {
			$_SESSION['$dateIssued'] = test_input($_POST["dateIssued"]);
		}
		
	    if (empty($_POST["placeIssued"])) {
			$_SESSION['$placeIssuedErr'] = "*Place Issued is required";
	    } else {
			$_SESSION['$placeIssued'] = test_input($_POST["placeIssued"]);
		}
		
	    if (empty($_POST["tin"])) {
			$_SESSION['$tinErr'] = "*Place Issued is required";
	    } else {
			$_SESSION['$tin'] = test_input($_POST["tin"]);
		}
		
	    if (empty($_POST["ctc"])) {
			$_SESSION['$ctcErr'] = "*Community Tax Certificate is required";
	    } else {
			$_SESSION['$ctc'] = test_input($_POST["ctc"]);
		}

	    if (empty($_POST["ctcDate"])) {
			$_SESSION['$ctcDateErr'] = "*Date Issued is required";
	    } else {
			$_SESSION['$ctcDate'] = test_input($_POST["ctcDate"]);
		}
		
	    if (empty($_POST["ctcPlace"])) {
			$_SESSION['$ctcPlaceErr'] = "*Place Issued is required";
	    } else {
			$_SESSION['$ctcPlace'] = test_input($_POST["ctcPlace"]);
		}
		
	    if (empty($_POST["tct"])) {
			$_SESSION['$tctErr'] = "*TCT/OCT Number is required";
	    } else {
			$_SESSION['$tct'] = test_input($_POST["tct"]);
		}
		
	    if (empty($_POST["OlastName"])) {
			$_SESSION['$OlastNameErr'] = "*Last Name is required";
	    } else {
			$_SESSION['$OlastName'] = test_input($_POST["OlastName"]);
		}
		
	    if (empty($_POST["OFirstName"])) {
			$_SESSION['$OFirstNameErr'] = "*First Name is required";
	    } else {
			$_SESSION['$OFirstName'] = test_input($_POST["OFirstName"]);
		}
		
	    if (empty($_POST["OmiddleInitial"])) {
			$_SESSION['$OmiddleInitialErr'] = "*Middle Initial is required";
	    } else {
			$_SESSION['$OmiddleInitial'] = test_input($_POST["OmiddleInitial"]);
		}
		
	    if (empty($_POST["Ocaddress"])) {
			$_SESSION['$OcaddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Ocaddress'] = test_input($_POST["Ocaddress"]);
		}
		
	    if (empty($_POST["Octc"])) {
			$_SESSION['$OctcErr'] = "*Community Tax Certificate is required";
	    } else {
			$_SESSION['$Octc'] = test_input($_POST["Octc"]);
		}
		
	    if (empty($_POST["email"])) {
			$_SESSION['$emailErr'] = "*Email Address is required";
	    } else {
			$_SESSION['$email'] = test_input($_POST["email"]);
		}
		
	    if (empty($_POST["pw"])) {
			$_SESSION['$pwErr'] = "*Password is required";
	    } else {
			$_SESSION['$pw'] = test_input($_POST["pw"]);
		}

	    if (empty($_POST["cpw"])) {
			$_SESSION['$cpwErr'] = "*Password is required";
	    } else {
			$_SESSION['$cpw'] = test_input($_POST["cpw"]);
		}
		
		if($_SESSION['$pw'] != $_SESSION['$cpw']){
			$_SESSION['$pwErr']="*Passwords do not match";
			$_SESSION['$cpwErr']="*Passwords do not match";
		}
		
		if( isset($_SESSION['$lnameErr'])||
			isset($_SESSION['$fnameErr'])||
			isset($_SESSION['$mnameErr'])||
			isset($_SESSION['$TaxAccNoErr'])||
			isset($_SESSION['$formOfOwnershipErr'])||
			isset($_SESSION['$entNameErr'])|| 
			isset($_SESSION['$contactNumberErr'])||
			isset($_SESSION['$kindOfBusinessErr'])||
			isset($_SESSION['newConstructionErr'])||
			isset($_SESSION['additionOfErr'])||
			isset($_SESSION['repairOfErr'])||
			isset($_SESSION['renovationOfErr'])||
			isset($_SESSION['demolitionOfErr'])||
			isset($_SESSION['others1and2Err'])||
			isset($_SESSION['others3and4Err'])||
			isset($_SESSION['numberOfUnits'])||
			isset($_SESSION['parent_typeOfOccupancyErr'])||
			isset($_SESSION['specific1Err'])||
			isset($_SESSION['specific2Err'])||
			isset($_SESSION['$AddressErr'])||
			isset($_SESSION['$locationErr'])||
			isset($_SESSION['$tec1Err'])||
			isset($_SESSION['$tec2Err'])||
			isset($_SESSION['$tec3Err'])||
			isset($_SESSION['$tec4Err'])||
			isset($_SESSION['$tec5Err'])||
			isset($_SESSION['cei1Err'])||
			isset($_SESSION['cei2Err'])||
			isset($_SESSION['cei3Err'])||
			isset($_SESSION['$storeyErr'])||
			isset($_SESSION['$floorAreaErr'])||
			isset($_SESSION['$constructionDateErr'])||
			isset($_SESSION['o4Err'])||
			isset($_SESSION['$SPRCErr'])||
			isset($_SESSION['$SlastNameErr'])||
			isset($_SESSION['$SmiddleInitialErr'])||
			isset($_SESSION['$SFirstNameErr'])||
			isset($_SESSION['$SaddressErr'])||
			isset($_SESSION['$CPRCErr'])||
			isset($_SESSION['$ClastNameErr'])||
			isset($_SESSION['$CFirstNameErr'])||
			isset($_SESSION['$CmiddleInitialErr'])||
			isset($_SESSION['$CcaddressErr'])||
			isset($_SESSION['$ptrNoErr'])||
			isset($_SESSION['$dateIssuedErr'])||
			isset($_SESSION['$placeIssuedErr'])||
			isset($_SESSION['$tinErr'])||
			isset($_SESSION['$ctcErr'])||
			isset($_SESSION['$ctcDateErr'])||
			isset($_SESSION['$ctcPlaceErr'])||
			isset($_SESSION['$tctErr'])||
			isset($_SESSION['$OlastNameErr'])||
			isset($_SESSION['$OFirstNameErr'])||
			isset($_SESSION['$OmiddleInitialErr'])||
			isset($_SESSION['$OcaddressErr'])||
			isset($_SESSION['$OctcErr'])||
			isset($_SESSION['$emailErr'])||
			isset($_SESSION['$pwErr'])||
			isset($_SESSION['$cpwErr'])){
		
			header("Location: /CBAO/Client/registration/bpForm.php");
		}else{
			$conn=mysqli_connect('localhost','root','','baguio_cbao');
			$db  =mysqli_select_db($conn,'baguio_cbao');

			if (!$conn) {
					die('Could not connect: '.mysqli_connect_error());  
				}
			$sql1    = "INSERT INTO general_info (last_name,first_name,middle_initial,tax_no,address,enterprise_name,ownership_form,business,contact_number) VALUES ('{$_SESSION['$lName']}','{$_SESSION['$fName']}','{$_SESSION['$mName']}','{$_SESSION['$TaxAccNo']}','{$_SESSION['$Address']}','{$_SESSION['$entName']}','{$_SESSION['$formOfOwnership']}','{$_SESSION['$kindOfBusiness']}','{$_SESSION['$contactNumber']}')";
			$sql2    = "INSERT INTO costs (building,electrical,mechanical,plumbing,others,total_cost,number_of_storeys,floor_area,proposed_construction_date,construction_materials) VALUES ('{$_SESSION['$tec1']}','{$_SESSION['$tec2']}','{$_SESSION['$tec3']}','{$_SESSION['$tec4']}','{$_SESSION['$tec5']}','{$_SESSION['$tec6']}','{$_SESSION['$storey']}','{$_SESSION['$floorArea']}','{$_SESSION['$constructionDate']}','{$_SESSION['$o4']}')";
			$sql3    = "INSERT INTO in_charge_of_construction (prc_registration_number,last_name,first_name,middle_initial,address,ptr_number,date_issued,place_issued,tin) VALUES ('{$_SESSION['$CPRC']}','{$_SESSION['$ClastName']}','{$_SESSION['$CFirstName']}','{$_SESSION['$CmiddleInitial']}','{$_SESSION['$Ccaddress']}','{$_SESSION['$ptrNo']}','{$_SESSION['$dateIssued']}','{$_SESSION['$placeIssued']}','{$_SESSION['$tin']}')";
			$sql4	 = "INSERT INTO community_tax_certificate(community_tax_certificate, date_issued, place_issued) VALUES ('{$_SESSION['$ctc']}', '{$_SESSION['$ctcDate']}', '{$_SESSION['$ctcPlace']}')";
			$sql5    = "INSERT INTO lot_owner (tct_oct_number,owner_last_name,owner_first_name,owner_middle_initial,owner_address,community_tax_cert) VALUES ('{$_SESSION['$tct']}','{$_SESSION['$OlastName']}','{$_SESSION['$OFirstName']}','{$_SESSION['$OmiddleInitial']}','{$_SESSION['$Ocaddress']}','{$_SESSION['$Octc']}')";
			$sql6    = "INSERT INTO plans_and_specifications (prc_registration_number,last_name,first_name,middle_initial,address) VALUES ('{$_SESSION['$SPRC']}','{$_SESSION['$SlastName']}','{$_SESSION['$SFirstName']}','{$_SESSION['$SmiddleInitial']}','{$_SESSION['$Saddress']}')";
			$sql7    = "INSERT INTO tracking_accounts (email_address,password) VALUES ('{$_SESSION['$email']}','{$_SESSION['$pw']}')";
			if(!mysqli_query($conn, $sql1)){
				echo "sql1:".mysqli_error($conn)."<br>";
			}
			if(!mysqli_query($conn, $sql2)){
				echo "sql2:".mysqli_error($conn)."<br>";
			}
			if(!mysqli_query($conn, $sql3)){
				echo "sql3:".mysqli_error($conn)."<br>";
			}
			if(!mysqli_query($conn, $sql4)){
				echo "sql4:".mysqli_error($conn)."<br>";
			}
			if(!mysqli_query($conn, $sql5)){
				echo "sql5:".mysqli_error($conn)."<br>";
			}
			if(!mysqli_query($conn, $sql6)){
				echo "sql6:".mysqli_error($conn)."<br>";
			}
			if(!mysqli_query($conn, $sql7)){
				echo "sql7:".mysqli_error($conn)."<br>";
			}
			header("Location: /CBAO/Client/registration/printForm.php");
		}
$conn->close();
	?>
