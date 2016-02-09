<?php
	session_start();
	$conn=mysqli_connect('localhost','root','','baguio_cbao');

	function test_input($data) {
	   global $conn;
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   $data = mysqli_real_escape_string($conn,$data);
	   return $data;
	}
	
	$date = date("Y-m-d");
	   
		if (empty($_POST["lastName"])) {
			 $_SESSION['$lnameErr'] = "*Last Name is required";
	    } else {
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/',$_POST["lastName"],$matches)){
				$_SESSION['$lnameErr2'] = "Incorrect format.";
			}else{
				$_SESSION['$lName'] = strtoupper(test_input($_POST["lastName"]));
			}		
		}
		
		if (empty($_POST["firstName"])) {
			$_SESSION['$fnameErr'] = "*First Name is required";
	    } else {
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/',$_POST["firstName"],$matches)){
				$_SESSION['$fnameErr2'] = "Incorrect format.";
			}else{
				$_SESSION['$fName'] = strtoupper(test_input($_POST["firstName"]));
			}
		}
		
		if (empty($_POST["middleInitial"])) {
			$_SESSION['$mnameErr'] = "*Middle Initial is required";
	    } else {
			if(preg_match('/^[a-zA-Z]\z/', $_POST["middleInitial"], $matches)){
				$_SESSION['$mName'] = strtoupper(test_input($_POST["middleInitial"]));
			}
			else{
				$_SESSION['$mnameErr2'] = "Incorrect format.";
			}
		}
		
		if (empty($_POST["TaxAccNo"])) {
			$_SESSION['$TaxAccNoErr'] = "*Tax Account Number is required";
	    } else {
			if(preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}/',$_POST["TaxAccNo"], $matches)){
				$_SESSION['$TaxAccNo'] = test_input($_POST["TaxAccNo"]);
			}else{
				$_SESSION['$TaxAccNoErr2'] = "Incorrect format.";
			}			
		}
		
		if (empty($_POST["formOfOwnership"])) {
			$_SESSION['$formOfOwnershipErr'] = "*Form of Ownership is required";
	    } else {
			$_SESSION['$formOfOwnership'] = strtoupper(test_input($_POST["formOfOwnership"]));
		}
	
		if (empty($_POST["enterpriseName"])) {
			$_SESSION['$entNameErr'] = "*Enterprise Name is required";
	    } else {
			$_SESSION['$entName'] = strtoupper(test_input($_POST["enterpriseName"]));
		}
	    
		if (empty($_POST["contactNumber"])) {
			$_SESSION['$contactNumberErr'] = "*Contact Number is required";
	    } else {
			if(preg_match('/^09[0-9]{9}\z/', $_POST["contactNumber"], $matches)){
				$_SESSION['$contactNumber'] = test_input($_POST["contactNumber"]);
			}else{
				$_SESSION['$contactNumberErr2'] = "Incorrect format.";
			}
		}
		
		if (empty($_POST["location"])) {
			$_SESSION['$locationErr'] = "*Location of construction is required";
	    } else {
			$_SESSION['$location'] = strtoupper(test_input($_POST["location"]));
		}
		
		if (empty($_POST["newConstruction"])) {
			$_SESSION['$newConstructionErr'] = "*This field is required";
	    } else {
			$_SESSION['$newConstruction'] = strtoupper(test_input($_POST["newConstruction"]));
		}
		
		if (empty($_POST["additionOf"])) {
			$_SESSION['$additionOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$additionOf'] = strtoupper(test_input($_POST["additionOf"]));
		}
		
		if (empty($_POST["repairOf"])) {
			$_SESSION['$repairOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$repairOf'] = strtoupper(test_input($_POST["repairOf"]));
		}
		
		if (empty($_POST["demolitionOf"])) {
			$_SESSION['$demolitionOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$demolitionOf'] = strtoupper(test_input($_POST["demolitionOf"]));
		}
		
		if (empty($_POST["renovationOf"])) {
			$_SESSION['$renovationOfErr'] = "*This field is required";
	    } else {
			$_SESSION['$renovationOf'] = strtoupper(test_input($_POST["renovationOf"]));
		}
		
		if (empty($_POST["others1"]) || empty($_POST["others2"])) {
			$_SESSION['$others1and2Err'] = "*These fields are required";
	    } else {
			$_SESSION['$others1'] = strtoupper(test_input($_POST["others1"]));
			$_SESSION['$others2'] = strtoupper(test_input($_POST["others2"]));
			$_SESSION['$others1and2'] = $_SESSION['$others1']." of ".$_SESSION['$others2'];
		}
		
		if (empty($_POST["others3"]) || empty($_POST["others4"])) {
			$_SESSION['$others3and4Err'] = "*These fields are required";
	    } else {
			$_SESSION['$others3'] = strtoupper(test_input($_POST["others3"]));
			$_SESSION['$others4'] = strtoupper(test_input($_POST["others4"]));
			$_SESSION['$others3and4'] = $_SESSION['$others3']." of ".$_SESSION['$others4'];
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
		
		if (($_POST["parent_typeOfOccupancy"])&&empty($_POST["select_typeOfOccupancy"])) {
			$_SESSION['$specific1Err'] = "*Please specify";
	    } else {
			$_SESSION['$specific1'] = test_input($_POST["select_typeOfOccupancy"]);
		}
		
//		if ((($_POST["parent_typeOfOccupancy"])&&($_POST["specific1"]))&&empty($_POST["specific2"])) {
//			$_SESSION['$specific2Err'] = "*Please specify";
//	    } else {
//			$_SESSION['$specific2'] = test_input($_POST["specific2"]);
//		}
		
	    if (empty($_POST["kindOfBusiness"])) {
			$_SESSION['$kindOfBusinessErr'] = "*Kind of Business is required";
	    } else {
			$_SESSION['$kindOfBusiness'] = strtoupper(test_input($_POST["kindOfBusiness"]));
		}
		
	    if (empty($_POST["Address"])) {
			$_SESSION['$AddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Address'] = strtoupper(test_input($_POST["Address"]));
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
	
		$_SESSION['$tec6'] = $_POST["tec1"]+ $_POST["tec2"]+$_POST["tec3"]+$_POST["tec4"]+$_POST["tec5"];
		
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
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/',$_POST["SlastName"],$matches)){
				$_SESSION['$SlastNameErr2'] = "Incorrect format.";
			}
			else{
				$_SESSION['$SlastName'] = strtoupper(test_input($_POST["SlastName"]));
			}
		}
		
	    if (empty($_POST["SmiddleInitial"])) {
			$_SESSION['$SmiddleInitialErr'] = "*Middle Initial is required";
	    } else {
			if(preg_match('/^[a-zA-Z]\z/', $_POST["SmiddleInitial"], $matches)){
				$_SESSION['$SmiddleInitial'] = strtoupper(test_input($_POST["SmiddleInitial"]));
			}
			else{
				$_SESSION['$SmiddleInitialErr2'] = "Incorrect format.";
			}
		}
		
	    if (empty($_POST["SFirstName"])) {
			$_SESSION['$SFirstNameErr'] = "*First Name is required";
	    } else {
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/',$_POST["SFirstName"],$matches)){
				$_SESSION['$SFirstNameErr2'] = "Incorrect format.";
			}
			else{
				$_SESSION['$SFirstName'] = strtoupper(test_input($_POST["SFirstName"]));
			}
		}
		
	    if (empty($_POST["Saddress"])) {
			$_SESSION['$SaddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Saddress'] = strtoupper(test_input($_POST["Saddress"]));
		}
		
	    if (empty($_POST["CPRC"])) {
			$_SESSION['$CPRCErr'] = "*PRC Reg. Number is required";
	    } else {
			$_SESSION['$CPRC'] = test_input($_POST["CPRC"]);
		}
		
	    if (empty($_POST["ClastName"])) {
			$_SESSION['$ClastNameErr'] = "*Last Name is required";
	    } else {
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/', $_POST["ClastName"],$matches)){
				$_SESSION['$ClastNameErr2'] = "Incorrect format.";
			}
			else{
				$_SESSION['$ClastName'] = strtoupper(test_input($_POST["ClastName"]));
			}
		}
		
	    if (empty($_POST["CFirstName"])) {
			$_SESSION['$CFirstNameErr'] = "*First Name is required";
	    } else {
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/',$_POST["CFirstName"],$matches)){
				$_SESSION['$CFirstNameErr2'] = "Incorrect format.";
			}
			else{
				$_SESSION['$CFirstName'] = strtoupper(test_input($_POST["CFirstName"]));
			}
		}
		
	    if (empty($_POST["CmiddleInitial"])) {
			$_SESSION['$CmiddleInitialErr'] = "*Middle Initial is required";
	    } else {
			if(preg_match('/^[a-zA-Z]\z/', $_POST["CmiddleInitial"], $matches)){
				$_SESSION['$CmiddleInitial'] = strtoupper(test_input($_POST["CmiddleInitial"]));
			}
			else{
				$_SESSION['$CmiddleInitialErr2'] = "Incorrect format.";
			}
		}
		
	    if (empty($_POST["Ccaddress"])) {
			$_SESSION['$CcaddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Ccaddress'] = strtoupper(test_input($_POST["Ccaddress"]));
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
			$_SESSION['$placeIssued'] = strtoupper(test_input($_POST["placeIssued"]));
		}
		
	    if (empty($_POST["tin"])) {
			$_SESSION['$tinErr'] = "*TIN Issued is required";
	    } else {
			if(preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}/',$_POST["tin"], $matches)){
				$_SESSION['$tin'] = test_input($_POST["tin"]);
			}else{
				$_SESSION['$tinErr2'] = "Incorrect format.";
			}
			
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
			$_SESSION['$ctcPlace'] = strtoupper(test_input($_POST["ctcPlace"]));
		}
		
	    if (empty($_POST["tct"])) {
			$_SESSION['$tctErr'] = "*TCT/OCT Number is required";
	    } else {
			$_SESSION['$tct'] = test_input($_POST["tct"]);
		}
		
	    if (empty($_POST["OlastName"])) {
			$_SESSION['$OlastNameErr'] = "*Last Name is required";
	    } else {
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/',$_POST["OlastName"],$matches)){
				$_SESSION['$OlastNameErr2'] = "Incorrect format.";
			}
			else{
				$_SESSION['$OlastName'] = strtoupper(test_input($_POST["OlastName"]));
			}
		}
		
	    if (empty($_POST["OFirstName"])) {
			$_SESSION['$OFirstNameErr'] = "*First Name is required";
	    } else {
			if(preg_match('/[0-9]+|[\^<,\"@\/\{\}\(\)\*\$%\?\+_=>:\|;#`~]+|^-+|-+\z/',$_POST["OFirstName"],$matches)){
				$_SESSION['$OFirstNameErr2'] = "Incorrect format.";
			}
			else{
				$_SESSION['$OFirstName'] = strtoupper(test_input($_POST["OFirstName"]));
			}
		}
		
	    if (empty($_POST["OmiddleInitial"])) {
			$_SESSION['$OmiddleInitialErr'] = "*Middle Initial is required";
	    } else {
			if(preg_match('/^[a-zA-Z]\z/', $_POST["OmiddleInitial"], $matches)){
				$_SESSION['$OmiddleInitial'] = strtoupper(test_input($_POST["OmiddleInitial"]));
			}
			else{
				$_SESSION['$OmiddleInitialErr2'] = "Incorrect format.";
			}
		}
		
	    if (empty($_POST["Ocaddress"])) {
			$_SESSION['$OcaddressErr'] = "*Address is required";
	    } else {
			$_SESSION['$Ocaddress'] = strtoupper(test_input($_POST["Ocaddress"]));
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
			if(preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,32}\z/',$_POST["pw"], $matches)){
				$_SESSION['$pw'] = test_input($_POST["pw"]);
			}else{
				$_SESSION['$pwErr2'] = "Minimum of 8 characters and should contain at least 1 alphabet and 1 number";
			}
		}

	    if (empty($_POST["cpw"])) {
			$_SESSION['$cpwErr'] = "*Confirm password";
	    } else {
			if(preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,32}\z/',$_POST["pw"], $matches)){
				$_SESSION['$cpw'] = test_input($_POST["cpw"]);
			}
		}
		
		if($_SESSION['$pw'] != $_SESSION['$cpw']){
			$_SESSION['$pwErr']="*Passwords do not match";
		}
		
		if( isset($_SESSION['$lnameErr'])||
			isset($_SESSION['$lnameErr2'])||
			isset($_SESSION['$fnameErr'])||
			isset($_SESSION['$fnameErr2'])||
			isset($_SESSION['$mnameErr'])||
			isset($_SESSION['$mnameErr2'])||
			isset($_SESSION['$TaxAccNoErr'])||
			isset($_SESSION['$TaxAccNoErr2'])||
			isset($_SESSION['$formOfOwnershipErr'])||
			isset($_SESSION['$entNameErr'])|| 
			isset($_SESSION['$contactNumberErr'])||
			isset($_SESSION['$contactNumberErr2'])||
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
			isset($_SESSION['$SlastNameErr2'])||
			isset($_SESSION['$SmiddleInitialErr'])||
			isset($_SESSION['$SmiddleInitialErr2'])||
			isset($_SESSION['$SFirstNameErr'])||
			isset($_SESSION['$SFirstNameErr2'])||
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
			isset($_SESSION['$tinErr2'])||
			isset($_SESSION['$ctcErr'])||
			isset($_SESSION['$ctcDateErr'])||
			isset($_SESSION['$ctcPlaceErr'])||
			isset($_SESSION['$tctErr'])||
			isset($_SESSION['$OlastNameErr'])||
			isset($_SESSION['$OlastNameErr2'])||
			isset($_SESSION['$OFirstNameErr'])||
			isset($_SESSION['$OFirstNameErr2'])||
			isset($_SESSION['$OmiddleInitialErr'])||
			isset($_SESSION['$OmiddleInitialErr2'])||
			isset($_SESSION['$OcaddressErr'])||
			isset($_SESSION['$OctcErr'])||
			isset($_SESSION['$emailErr'])||
			isset($_SESSION['$pwErr'])||
			isset($_SESSION['$pwErr2'])||
			isset($_SESSION['$cpwErr'])){
		
			header("Location: /CBAO/Client/registration/bpForm.php");
		}else{
			$db  =mysqli_select_db($conn,'baguio_cbao');

			if (!$conn) {
					die('Could not connect: '.mysqli_connect_error());  
				}
			$sql1    = "INSERT INTO applicant (last_name,first_name,middle_initial,address,contact_number, tin, form_ownership, main_economic_activity, email, password) VALUES ('{$_SESSION['$lName']}','{$_SESSION['$fName']}','{$_SESSION['$mName']}','{$_SESSION['$Address']}','{$_SESSION['$contactNumber']}','{$_SESSION['$TaxAccNo']}','{$_SESSION['$formOfOwnership']}','{$_SESSION['$kindOfBusiness']}','{$_SESSION['$email']}','{$_SESSION['$pw']}')";
			$sql2	 = "INSERT INTO ctc (ctc_no, date_issued, place_issued) VALUES ('{$_SESSION['$ctc']}', '{$_SESSION['$ctcDate']}','{$_SESSION['$ctcPlace']}')";
			$sql3	 = "INSERT INTO scope_of_work(new_construction, addition, repair, renovation, demolition, others1, others2, no_of_units) VALUES ('{$_SESSION['$newConstruction']}','{$_SESSION['$additionOf']}','{$_SESSION['$repairOf']}','{$_SESSION['$renovationOf']}','{$_SESSION['$demolitionOf']}','{$_SESSION['$others1and2']}','{$_SESSION['$others3and4']}','{$_SESSION['$numberOfUnits']}')";
			$sql4	 = "INSERT INTO type_of_occupancy(general_type, specific_type) VALUES ('{$_SESSION['$parent_typeOfOccupancy']}','{$_SESSION['$specific1']}')";
			$sql5	 = "INSERT INTO costs(building, electrical, mechanical, plumbing, others, total_cost) VALUES ('{$_SESSION['$tec1']}','{$_SESSION['$tec2']}','{$_SESSION['$tec3']}','{$_SESSION['$tec4']}','{$_SESSION['$tec5']}','{$_SESSION['$tec6']}')";
			$sql6	 = "INSERT INTO equipment(first_cost, second_cost, third_cost) VALUES ('{$_SESSION['$cei1']}','{$_SESSION['$cei2']}','{$_SESSION['$cei3']}')";
			$sql7 	 = "INSERT INTO storey(no_of_storeys, total_floor_area, proposed_date_of_construction, material_of_construction) VALUES ('{$_SESSION['$storey']}','{$_SESSION['$floorArea']}','{$_SESSION['$constructionDate']}','{$_SESSION['$o4']}')";
			$sql8 	 = "INSERT INTO engr_plans(prc_reg_no, last_name, first_name, middle_initial, address) VALUES ('{$_SESSION['$SPRC']}','{$_SESSION['$SlastName']}','{$_SESSION['$SFirstName']}','{$_SESSION['$SmiddleInitial']}','{$_SESSION['$Saddress']}')";
			$sql9	 = "INSERT INTO engr_oic(prc_reg_no, last_name, first_name, middle_initial, address, ptr_no, date_issued, place_issued, tin) VALUES ('{$_SESSION['$CPRC']}', '{$_SESSION['$ClastName']}','{$_SESSION['$CFirstName']}','{$_SESSION['$CmiddleInitial']}','{$_SESSION['$Ccaddress']}','{$_SESSION['$ptrNo']}','{$_SESSION['$dateIssued']}','{$_SESSION['$placeIssued']}','{$_SESSION['$tin']}')";
			$sql10 	 = "INSERT INTO lot_owner(tct_oct_no, last_name, first_name, middle_initial, address, community_tax_certificate) VALUES ('{$_SESSION['$tct']}','{$_SESSION['$OlastName']}','{$_SESSION['$OFirstName']}','{$_SESSION['$OmiddleInitial']}','{$_SESSION['$Ocaddress']}','{$_SESSION['$Octc']}')";
			$sql11 	 = "INSERT INTO bpform(date_of_application, location) VALUES ('$date','{$_SESSION['$location']}')";
			
			if(!mysqli_query($conn, $sql1)){
				
				echo "sql1:".mysqli_error($conn)."<br>";
			}else{
				$applicant_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql2)){
				echo "sql2:".mysqli_error($conn)."<br>";
			}else{
				$ctc_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql3)){
				echo "sql3:".mysqli_error($conn)."<br>";
			}else{
				$scope_of_work_id = mysqli_insert_id($conn);	
			}
			if(!mysqli_query($conn, $sql4)){
				echo "sql4:".mysqli_error($conn)."<br>";
			}else{
				$type_of_occupancy_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql5)){
				echo "sql5:".mysqli_error($conn)."<br>";
			}else{
				$costs_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql6)){
				echo "sql6:".mysqli_error($conn)."<br>";
			}else{
				$equipment_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql7)){
				echo "sql7:".mysqli_error($conn)."<br>";
			}else{
				$storey_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql8)){
				echo "sql8:".mysqli_error($conn)."<br>";
			}else{
				$engr_plans_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql9)){
				echo "sql9:".mysqli_error($conn)."<br>";
			}else{
				$engr_oic_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql10)){
				echo "sql10:".mysqli_error($conn)."<br>";
			}else{
				$lot_owner_id = mysqli_insert_id($conn);
			}
			if(!mysqli_query($conn, $sql11)){
				echo "sql11:".mysqli_error($conn)."<br>";
			}
			
			$sql12 = "UPDATE applicant SET ctc_id=$ctc_id WHERE applicant_id=$applicant_id";			
			$sql13 = "INSERT INTO bpform(applicant_id, scope_of_work_id, type_of_occupancy_id, costs_id, equipment_id, storey_id, engr_plans_id, engr_oic_id, lot_owner_id) VALUES ('$applicant_id','$scope_of_work_id', '$type_of_occupancy_id', '$costs_id', '$equipment_id', '$storey_id', '$engr_plans_id', '$engr_oic_id', '$lot_owner_id')";
			
			if(!mysqli_query($conn, $sql12)){
				echo "sql12:".mysqli_error($conn)."<br>";
			}
			if(!mysqli_query($conn, $sql13)){
				echo "sql13:".mysqli_error($conn)."<br>";
			}
			header("Location: /CBAO/Client/registration/printForm.php");
		}
$conn->close();
	?>
