<?php
	session_start();
	$conn=mysqli_connect('localhost','root','','baguio_cbao');	
	$db  =mysqli_select_db($conn,'baguio_cbao');
	$date = date("Y-m-d");
	
	if (!$conn) {
			die('Could not connect: '.mysqli_connect_error());  
			}
		$sql1    = "INSERT INTO applicant (last_name,first_name,middle_initial,address,contact_number, tin, form_ownership, main_economic_activity, email, password) VALUES ('{$_SESSION['$lNameFinal']}','{$_SESSION['$fNameFinal']}','{$_SESSION['$mNameFinal']}','{$_SESSION['$AddressFinal']}','{$_SESSION['$contactNumberFinal']}','{$_SESSION['$TaxAccNoFinal']}','{$_SESSION['$formOfOwnershipFinal']}','{$_SESSION['$kindOfBusinessFinal']}','{$_SESSION['$emailFinal']}','{$_SESSION['$pwFinal']}')";
		$sql2	 = "INSERT INTO ctc (ctc_no, date_issued, place_issued) VALUES ('{$_SESSION['$ctcFinal']}', '{$_SESSION['$ctcDateFinal']}','{$_SESSION['$ctcPlaceFinal']}')";
		$sql3	 = "INSERT INTO scope_of_work(new_construction, addition, repair, renovation, demolition, others1, others2, no_of_units) VALUES ('{$_SESSION['$newConstructionFinal']}','{$_SESSION['$additionOfFinal']}','{$_SESSION['$repairOfFinal']}','{$_SESSION['$renovationOfFinal']}','{$_SESSION['$demolitionOfFinal']}','{$_SESSION['$others1and2Final']}','{$_SESSION['$others3and4Final']}','{$_SESSION['$numberOfUnitsFinal']}')";
		$sql4	 = "INSERT INTO type_of_occupancy(general_type, specific_type, others) VALUES ('{$_SESSION['$parent_typeOfOccupancyFinal']}','{$_SESSION['$child_typeOfOccupancyFinal']}','{$_SESSION['$typeOfOccupancy_othersFinal']}')";
		$sql5	 = "INSERT INTO costs(building, electrical, mechanical, plumbing, others, total_cost) VALUES ('{$_SESSION['$tec1Final']}','{$_SESSION['$tec2Final']}','{$_SESSION['$tec3Final']}','{$_SESSION['$tec4Final']}','{$_SESSION['$tec5Final']}','{$_SESSION['$tec6Final']}')";
		$sql6	 = "INSERT INTO equipment(first_cost, second_cost, third_cost) VALUES ('{$_SESSION['$cei1Final']}','{$_SESSION['$cei2Final']}','{$_SESSION['$cei3Final']}')";
		$sql7 	 = "INSERT INTO storey(no_of_storeys, total_floor_area, proposed_date_of_construction, material_of_construction) VALUES ('{$_SESSION['$storeyFinal']}','{$_SESSION['$floorAreaFinal']}','{$_SESSION['$constructionDateFinal']}','{$_SESSION['$o4Final']}')";
		$sql8 	 = "INSERT INTO engr_plans(prc_reg_no, last_name, first_name, middle_initial, address) VALUES ('{$_SESSION['$SPRCFinal']}','{$_SESSION['$SlastNameFinal']}','{$_SESSION['$SFirstNameFinal']}','{$_SESSION['$SmiddleInitialFinal']}','{$_SESSION['$SaddressFinal']}')";
		$sql9	 = "INSERT INTO engr_oic(prc_reg_no, last_name, first_name, middle_initial, address, ptr_no, date_issued, place_issued, tin) VALUES ('{$_SESSION['$CPRCFinal']}', '{$_SESSION['$ClastNameFinal']}','{$_SESSION['$CFirstNameFinal']}','{$_SESSION['$CmiddleInitialFinal']}','{$_SESSION['$CcaddressFinal']}','{$_SESSION['$ptrNoFinal']}','{$_SESSION['$dateIssuedFinal']}','{$_SESSION['$placeIssuedFinal']}','{$_SESSION['$tinFinal']}')";
		$sql10 	 = "INSERT INTO lot_owner(tct_oct_no, last_name, first_name, middle_initial, address, community_tax_certificate) VALUES ('{$_SESSION['$tctFinal']}','{$_SESSION['$OlastNameFinal']}','{$_SESSION['$OFirstNameFinal']}','{$_SESSION['$OmiddleInitialFinal']}','{$_SESSION['$OcaddressFinal']}','{$_SESSION['$OctcFinal']}')";
		$sql11 	 = "INSERT INTO bpform(date_of_application, location) VALUES ('$date','{$_SESSION['$locationFinal']}')";
			
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
		}else{
			$bpform_id = mysqli_insert_id($conn);
		}
			
		$sql12 = "UPDATE applicant SET ctc_id=$ctc_id WHERE applicant_id=$applicant_id";			
		$sql13 = "UPDATE bpform SET applicant_id=$applicant_id, scope_of_work_id=$scope_of_work_id, type_of_occupancy_id=$type_of_occupancy_id, costs_id=$costs_id, equipment_id=$equipment_id, storey_id=$storey_id, engr_plans_id=$engr_plans_id, engr_oic_id=$engr_oic_id, lot_owner_id=$lot_owner_id WHERE bpform_id=$bpform_id";
			
		if(!mysqli_query($conn, $sql12)){
			echo "sql12:".mysqli_error($conn)."<br>";
		}
		if(!mysqli_query($conn, $sql13)){
			echo "sql13:".mysqli_error($conn)."<br>";
		}
			
		$sql14 = "INSERT INTO assessed_costs(bpform_id) VALUES ('$bpform_id')";
		$sql15 = "INSERT INTO routing_slip(bpform_id) VALUES ('$bpform_id')";
		$sql16 = "INSERT INTO checklist (bpform_id) VALUES ('$bpform_id')";
			
		if(!mysqli_query($conn, $sql14)){
			echo "sql14:".mysqli_error($conn)."<br>";
		}
		if(!mysqli_query($conn, $sql15)){
			echo "sql15:".mysqli_error($conn)."<br>";
		}
		if(!mysqli_query($conn, $sql16)){
			echo "sql16:".mysqli_error($conn)."<br>";
		}else{
			$checklist_id = mysqli_insert_id($conn);
		}
			
		$sql17 = "INSERT INTO documents (checklist_id) VALUES ('$checklist_id')";
			
		if(!mysqli_query($conn, $sql17)){
			echo "sql15:".mysqli_error($conn)."<br>";
		}
			
		header("Location: /CBAO/Client/registration/printForm.php");
?>
