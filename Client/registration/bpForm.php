<?php
session_start();

if(isset($_SESSION['printForm']) && $_SESSION['printForm'] == 'Visited'){
	unset($_SESSION['$lNameFinal']);
	unset($_SESSION['$fNameFinal']);
    unset($_SESSION['$mNameFinal']);
	unset($_SESSION['$TaxAccNoFinal']);
	unset($_SESSION['$entNameFinal']);
	unset($_SESSION['$formOfOwnershipFinal']);
	unset($_SESSION['$kindOfBusinessFinal']);
	unset($_SESSION['$AddressFinal']);
	unset($_SESSION['$contactNumberFinal']);
	unset($_SESSION['$locationFinal']);
	unset($_SESSION['$newConstructionFinal']);
	unset($_SESSION['$additionOfFinal']);
	unset($_SESSION['$repairOfFinal']);
	unset($_SESSION['$renovationOfFinal']);
	unset($_SESSION['$demolitionOfFinal']);
	unset($_SESSION['$others1Final']);
	unset($_SESSION['$others2Final']);
	unset($_SESSION['$others3Final']);
	unset($_SESSION['$others4Final']);
	unset($_SESSION['$parent_typeOfOccupancyFinal']);
	unset($_SESSION['$child_typeOfOccupancyFinal']);
	unset($_SESSION['$typeOfOccupancy_othersFinal']);
	unset($_SESSION['$numberOfUnitsFinal']);
	unset($_SESSION['$tec1Final']);
	unset($_SESSION['$tec2Final']);
	unset($_SESSION['$tec3Final']);
	unset($_SESSION['$tec4Final']);
	unset($_SESSION['$tec5Final']);
	unset($_SESSION['$tec6Final']);
	unset($_SESSION['$cei1Final']);
	unset($_SESSION['$cei2Final']);
	unset($_SESSION['$cei3Final']);
	unset($_SESSION['$storeyFinal']);
	unset($_SESSION['$floorAreaFinal']);
	unset($_SESSION['$constructionDateFinal']);
	unset($_SESSION['$SPRCFinal']);
	unset($_SESSION['$SFirstNameFinal']);
	unset($_SESSION['$SmiddleInitialFinal']);
	unset($_SESSION['$SlastNameFinal']);
	unset($_SESSION['$SaddressFinal']);
	unset($_SESSION['$ctcFinal']);
	unset($_SESSION['$ctcDateFinal']);
	unset($_SESSION['$ctcPlaceFinal']);
	unset($_SESSION['$CPRCFinal']);
	unset($_SESSION['$CFirstNameFinal']);
	unset($_SESSION['$CmiddleInitialFinal']);
	unset($_SESSION['$ClastNameFinal']);
	unset($_SESSION['$CcaddressFinal']);
	unset($_SESSION['$ptrNoFinal']);
	unset($_SESSION['$dateIssuedFinal']);
	unset($_SESSION['$placeIssuedFinal']);
	unset($_SESSION['$tinFinal']);
	unset($_SESSION['$tctFinal']);
	unset($_SESSION['$OFirstNameFinal']); 
	unset($_SESSION['$OmiddleInitialFinal']); 
	unset($_SESSION['$OlastNameFinal']);
	unset($_SESSION['$OcaddressFinal']);
	unset($_SESSION['$OctcFinal']);
}
unset($_SESSION['printForm']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CBAO Web Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="en" content="CBAO Web Application">
        <meta name="author" content="SLUSCIS">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="../css/bpForm.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
		<link rel="stylesheet" href="../css/jquery-ui.css">
		
		<script src="../js/bpForm.js" type="text/javascript"></script>
		<script src="../jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="../js/selectTypeOfOccupancy.js" type="text/javascript"></script>
		<script src="../js/jquery-ui.js"></script>
		
		<?php
			if(!empty($_SESSION['status']) && $_SESSION['status'] = "Ok"){
			echo "
				<script>
                    $(function () {
                        $(\"#alert\").dialog({
                            autoOpen: true,
                            closeOnEscape: true,
                            open: function (event, ui){
                                $(\".ui-dialog-titlebar-close\", ui.dialog | ui).hide();
                            },                            
                            height: 'auto',
                            width: 'auto'                           
                        });
                    });
				</script>
				";
			unset($_SESSION['status']);
			}
		?>
		
    </head>
    <body>  
        <?php include '../../Client/common/header.php'; ?>
		
        <div class="content">
            <div class="main">
                <h1 id = "heading">Building Permit Form</h1>
            </div>
        </div>
        <div class="container">

            <div class = "col-md-3">
                <div id="sidebar">
                    <div id="nav-anchor"></div>
                    <nav>
                        <ul>
                            <li><a href="#box1"><div>General Information</div></a></li>
                            <li><a href="#box3A"><div>Costs</div></a></li>
                            <li><a href="#box6"><div>Arch./Civil Eng. (Plans and Specifications)</div></a></li>
                            <li><a href="#box7"><div>Arch./Civil Eng. (Construction)</div></a></li>
                             <li><a href="#box8"><div>Community Tax Certificate</div></a></li>
                            <li><a href="#box9"><div>Lot Owner</div></a></li>
                            <li><a href="#trackingAcc"><div>Tracking Account Credentials</div></a></li>
                        </ul>
                    </nav>
                </div>

                <div class = "buttons">
                    <p><a href="../web/index.php" class="btn2" id ="cancel">Cancel Application</a></p>
                </div>
            </div>
					
            <div class = "col-md-9">
                <div class = "scroll">
                        <h4>General Information</h4>
						 <form class="form-horizontal" name="form" action="detecterrors.php" onsubmit="return validate(this);" method="post">
                            <section id="box1">
							<div class="form-group">
                                <label for="lastName" class="control-label col-xs-4">* Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php if(!empty($_SESSION['$lName'])){echo $_SESSION['$lName']; unset($_SESSION['$lName']);}?>" placeholder="Last Name"><span class="error-msg"><?php if(!empty($_SESSION['$lnameErr'])){echo $_SESSION['$lnameErr']; unset($_SESSION['$lnameErr']);}?><?php if(!empty($_SESSION['$lnameErr2'])){echo $_SESSION['$lnameErr2']; unset($_SESSION['$lnameErr2']);}?></span>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="control-label col-xs-4">* First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php if(!empty($_SESSION['$fName'])){echo $_SESSION['$fName']; unset($_SESSION['$fName']);}?>" placeholder="First Name"><span class="error-msg"><?php if(!empty($_SESSION['$fnameErr'])){echo $_SESSION['$fnameErr']; unset($_SESSION['$fnameErr']);}?><?php if(!empty($_SESSION['$fnameErr2'])){echo $_SESSION['$fnameErr2']; unset($_SESSION['$fnameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middleInitial" class="control-label col-xs-4">* Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="middleInitial" name="middleInitial"  value="<?php if(!empty($_SESSION['$mName'])){echo $_SESSION['$mName']; unset($_SESSION['$mName']);}?>" placeholder="Middle Initial"><span class="error-msg"><?php if(!empty($_SESSION['$mnameErr'])){echo $_SESSION['$mnameErr']; unset($_SESSION['$mnameErr']);}?><?php if(!empty($_SESSION['$mnameErr2'])){echo $_SESSION['$mnameErr2']; unset($_SESSION['$mnameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="TaxAccNo" class="control-label col-xs-4">* TIN:</label>
                                <div class="col-xs-8">
									<div class="right-inner-addon table-error">
										<a>
										<span class="glyphicon glyphicon-question-sign red" data-toggle="tooltip" data-placement="left" title="Example. 000-111-222-333"></span>
										<input type="text" class="form-control" id="TaxAccNo" name="TaxAccNo" value="<?php if(!empty($_SESSION['$TaxAccNo'])){echo $_SESSION['$TaxAccNo']; unset($_SESSION['$TaxAccNo']);}?>" placeholder="Tax Account Number">
										</a>										
									</div>
									<span class="error-msg"><?php if(!empty($_SESSION['$TaxAccNoErr'])){echo $_SESSION['$TaxAccNoErr']; unset($_SESSION['$TaxAccNoErr']);}?><?php if(!empty($_SESSION['$TaxAccNoErr2'])){echo $_SESSION['$TaxAccNoErr2']; unset($_SESSION['$TaxAccNoErr2']);}?></span>
							   </div>
                            </div>
                            <div class="form-group">
                                <label for="enterpriseName" class="control-label col-xs-4">* Enterprise Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="enterpriseName" name="enterpriseName" value="<?php if(!empty($_SESSION['$entName'])){echo $_SESSION['$entName']; unset($_SESSION['$entName']);}?>" placeholder="Enterprise Name"><span class="error-msg"><?php if(!empty($_SESSION['$entNameErr'])){echo $_SESSION['$entNameErr']; unset($_SESSION['$entNameErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formOfOwnership" class="control-label col-xs-4">* Form of Ownership:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="formOfOwnership" name="formOfOwnership" value="<?php if(!empty($_SESSION['$formOfOwnership'])){echo $_SESSION['$formOfOwnership']; unset($_SESSION['$formOfOwnership']);}?>" placeholder="Form of Ownership"><span class="error-msg"><?php if(!empty($_SESSION['$formOfOwnershipErr'])){echo $_SESSION['$formOfOwnershipErr']; unset($_SESSION['$formOfOwnershipErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kindOfBusiness" class="control-label col-xs-4">* Kind of Business:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="kindOfBusiness" name="kindOfBusiness" value="<?php if(!empty($_SESSION['$kindOfBusiness'])){echo $_SESSION['$kindOfBusiness']; unset($_SESSION['$kindOfBusiness']);}?>" placeholder="Kind of Business"><span class="error-msg"><?php if(!empty($_SESSION['$kindOfBusinessErr'])){echo $_SESSION['$kindOfBusinessErr']; unset($_SESSION['$kindOfBusinessErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Address" class="control-label col-xs-4">* Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Address" name="Address" value="<?php if(!empty($_SESSION['$Address'])){echo $_SESSION['$Address']; unset($_SESSION['$Address']);}?>" placeholder="Address"><span class="error-msg"><?php if(!empty($_SESSION['$AddressErr'])){echo $_SESSION['$AddressErr']; unset($_SESSION['$AddressErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contactNumber" class="control-label col-xs-4">* Contact Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control"  id="contactNumber" name="contactNumber" value="<?php if(!empty($_SESSION['$contactNumber'])){echo $_SESSION['$contactNumber']; unset($_SESSION['$contactNumber']);}?>" placeholder="e.g 09xx xxx xxx"><span class="error-msg"><?php if(!empty($_SESSION['$contactNumberErr'])){echo $_SESSION['$contactNumberErr']; unset($_SESSION['$contactNumberErr']);}?><?php if(!empty($_SESSION['$contactNumberErr2'])){echo $_SESSION['$contactNumberErr2']; unset($_SESSION['$contactNumberErr2']);}?></span>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label for="location" class="control-label col-xs-4">* Location of Construction:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control"  id="location" name="location" value="<?php if(!empty($_SESSION['$location'])){echo $_SESSION['$location']; unset($_SESSION['$location']);}?>" placeholder="Location of Construction"><span class="error-msg"><?php if(!empty($_SESSION['$locationErr'])){echo $_SESSION['$locationErr']; unset($_SESSION['$locationErr']);}?></span>
                                </div>
                            </div>
							<div class="form-group scope">
								Scope of work
							</div>
							<div class="form-group">
								<label for="newConstruction" class="control-label col-xs-4">* New construction:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="newConstruction" name="newConstruction" value="<?php if(!empty($_SESSION['$newConstruction'])){echo $_SESSION['$newConstruction']; unset($_SESSION['$newConstruction']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$newConstructionErr'])){echo $_SESSION['$newConstructionErr']; unset($_SESSION['$newConstructionErr']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<label for="additionOf" class="control-label col-xs-4">* Addition of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="additionOf" name="additionOf" value="<?php if(!empty($_SESSION['$additionOf'])){echo $_SESSION['$additionOf']; unset($_SESSION['$additionOf']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$additionOfErr'])){echo $_SESSION['$additionOfErr']; unset($_SESSION['$additionOfErr']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<label for="repairOf" class="control-label col-xs-4">* Repair of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="repairOf" name="repairOf" value="<?php if(!empty($_SESSION['$repairOf'])){echo $_SESSION['$repairOf']; unset($_SESSION['$repairOf']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$repairOfErr'])){echo $_SESSION['$repairOfErr']; unset($_SESSION['$repairOfErr']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<label for="renovationOf" class="control-label col-xs-4">* Renovation of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="renovationOf" name="renovationOf" value="<?php if(!empty($_SESSION['$renovationOf'])){echo $_SESSION['$renovationOf']; unset($_SESSION['$renovationOf']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$renovationOfErr'])){echo $_SESSION['$renovationOfErr']; unset($_SESSION['$renovationOfErr']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<label for="demolitionOf" class="control-label col-xs-4">* Demolition of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="demolitionOf" name="demolitionOf" value="<?php if(!empty($_SESSION['$demolitionOf'])){echo $_SESSION['$demolitionOf']; unset($_SESSION['$demolitionOf']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$demolitionOfErr'])){echo $_SESSION['$demolitionOfErr']; unset($_SESSION['$demolitionOfErr']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<label for="repairOf" class="control-label col-xs-4">* Others</label>
							</div>
							<div class="form-group">
								<span class="col-xs-4"></span>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="others1" name="others1" value="<?php if(!empty($_SESSION['$others1'])){echo $_SESSION['$others1']; unset($_SESSION['$others1']);}?>"/>
								</div>
								<div class="col-xs-1">
									<label>of</label>
								</div>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="others2" name="others2" value="<?php if(!empty($_SESSION['$others2'])){echo $_SESSION['$others2']; unset($_SESSION['$others2']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$others1and2Err'])){echo $_SESSION['$others1and2Err']; unset($_SESSION['$others1and2Err']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<span class="col-xs-4"></span>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="others3" name="others3" value="<?php if(!empty($_SESSION['$others3'])){echo $_SESSION['$others3']; unset($_SESSION['$others3']);}?>"/>
								</div>
								<div class="col-xs-1">
									<label>of</label>
								</div>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="others4" name="others4" value="<?php if(!empty($_SESSION['$others4'])){echo $_SESSION['$others4']; unset($_SESSION['$others4']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$others3and4Err'])){echo $_SESSION['$others3and4Err']; unset($_SESSION['$others3and4Err']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<label for="numberOfUnits" class="control-label col-xs-4">* Number of units:</label>
								<div class="col-xs-8">
									<input type="number" min="0" class="form-control" id="numberOfUnits" name="numberOfUnits" value="<?php if(!empty($_SESSION['$numberOfUnits'])){echo $_SESSION['$numberOfUnits']; unset($_SESSION['$numberOfUnits']);}?>"/><span class="error-msg"><?php if(!empty($_SESSION['$numberOfUnitsErr'])){echo $_SESSION['$numberOfUnitsErr']; unset($_SESSION['$numberOfUnitsErr']);}?></span>
								</div>
							</div>
							<div class="form-group">
								<label for="typeOfOccupancy" class="control-label col-xs-4">* Type of Occupancy</label>
							</div>
							<div class="form-group">
									<span class="col-xs-4"></span>
                                    <div class="col-xs-8"><span class="error-msg"><?php if(!empty($_SESSION['$typeOfOccupancyErr'])){echo $_SESSION['$typeOfOccupancyErr']; unset($_SESSION['$typeOfOccupancyErr']);}?><?php if(!empty($_SESSION['$others_typeOfOccupancyErr'])){echo $_SESSION['$others_typeOfOccupancyErr']; unset($_SESSION['$others_typeOfOccupancyErr']);}?><?php if(!empty($_SESSION['$others_typeOfOccupancyErr2'])){echo $_SESSION['$others_typeOfOccupancyErr2'];unset($_SESSION['$others_typeOfOccupancyErr2']);}?></span>
                                        <select id="parent_typeOfOccupancy"  name="parent_typeOfOccupancy">
											<option option selected disabled>SELECT TYPE OF OCCUPANCY</option>
                                            <option value="residential" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'residential'){echo ' selected="selected"';}?>>RESIDENTIAL</option>
                                            <option value="commercial" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'commercial'){echo ' selected="selected"';}?>>COMMERCIAL</option>
                                            <option value="street" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'street'){echo ' selected="selected"';}?>>STREET FURNITURE, LANDSCAPING, SIGNBOARDS</option>
											<option value="industrial" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'industrial'){echo ' selected="selected"';}?>>INDUSTRIAL</option>
											<option value="institutional" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'institutional'){echo ' selected="selected"';}?>>INSTITUTIONAL</option>
											<option value="agricultural" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'agricultural'){echo ' selected="selected"';}?>>AGRICULTURAL</option>
											<option value="others" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'others'){echo ' selected="selected"';}?>>OTHER CONSTRUCTION</option>
										</select>
                                    </div>
                                </div>
								<div class="form-group">
									<span class="col-xs-4"></span>
									<div class="col-xs-8">
											<div id="child_typeOfOccupancy">
												<select id="residential" name="residential" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'residential'){echo 'style="display:block";' ;}?>>
													<option value="single" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'single'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>SINGLE</option>
													<option value="duplex" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'duplex'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>DUPLEX</option>
													<option value="rowhouse/accessoria" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'rowhouse/accessoria'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>ROWHOUSE/ACCESSORIA</option>
													<option value="others" <?php if((isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'residential') && (isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'others')){echo ' selected="selected"';unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OTHERS</option>
												</select>
												<select id="commercial" name="commercial" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'commercial'){echo 'style="display:block";' ;}?>>
													<option value="bank" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'bank'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>BANK</option>
													<option value="store" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'store'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>STORE</option>
													<option value="hotel/motel,etc." <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'hotel/motel,etc.'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>HOTEL/MOTEL,ETC.</option>
													<option value="office condominium/business building office" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'office condominium/business building office'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OFFICE CONDOMINIUM, BUSINESS OFFICE BUILDING</option>
													<option value="restaurant,etc." <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'restaurant,etc.'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>RESTAURANT,ETC.</option>
													<option value="shop (e.g dress shop, tailoring shop, barber shop, etc." <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'shop (e.g dress shop, tailoring shop, barber shop, etc.'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>SHOP (E.G DRESS SHOP, TAILORING SHOP, BARBER SHOP, ETC.)</option>
													<option value="gasoline station" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'gasoline station'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>GASOLINE STATION</option>
													<option value="market" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'market'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>MARKET</option>
													<option value="dormitory or other lodging house" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'dormitory or other lodging house'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>DORMITORY OR OTHER LODGING HOUSE</option>
													<option value="others" <?php if((isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'commercial') && (isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'others')){echo ' selected="selected"';unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OTHERS</option>
												</select>
												<input type="text" name="others" id="others" <?php if(!empty($_SESSION['$others_typeOfOccupancyErr'])||(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'others')){echo 'style="display:block";';unset($_SESSION['$others_typeOfOccupancyErr']);unset($_SESSION['$parent_typeOfOccupancy']);}?> value="<?php if(!empty($_SESSION['$others'])){echo $_SESSION['$others']; unset($_SESSION['$others']);}?>"></input>
												<select id="street" name="street" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'street'){echo 'style="display:block";' ;}?>>
													<option value="parks, plazas, monuments, pools, plant boxes, etc." <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'parks, plazas, monuments, pools, plant boxes, etc.'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>PARKS, PLAZAS, MONUMENTS, POOLS, PLANT BOXES, ETC.</option>
													<option value="sidewalks, promenades, tarraces, lampposts, electric poles, telephone poles, etc." <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'sidewalks, promenades, tarraces, lampposts, electric poles, telephone poles, etc.'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>SIDEWALKS, PROMENADES, TARRACES, LAMPPOSTS, ELECTRIC POLES, TELEPHONE POLES, ETC.</option>
													<option value="outdoor ads, signboards, etc" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'outdoor ads, signboards, etc'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OUTDOOR ADS, SIGNBOARDS, ETC</option>
													<option value="others" <?php if((isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'street') && (isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'others')){echo ' selected="selected"';unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OTHERS</option>
												</select>
												<select id="industrial" name="industrial" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'industrial'){echo 'style="display:block";' ;}?>>
													<option value="factory/plant"<?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'factory/plant'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>FACTORY/PLANT</option>
													<option value="repair shop, machine shop" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'repair shop, machine shop'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>REPAIR SHOP, MACHINE SHOP</option>
													<option value="refinery" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'refinery'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>REFINERY</option>
													<option value="printing press" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'printing press'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>PRINTING PRESS</option>
													<option value="warehouse" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'warehouse'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>WAREHOUSE</option>
													<option value="others" <?php if((isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'industrial') && (isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'others')){echo ' selected="selected"';unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OTHERS</option>
												</select>
												<select id="institutional" name="institutional" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'institutional'){echo 'style="display:block";' ;}?>>
													<option value="school" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'school'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>SCHOOL</option>
													<option value="church and other religious structures" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'church and other religious structures'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>CHURCH AND OTHER RELIGIOUS STRUCTURES</option>
													<option value="hospital or simular structure" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'hospital or simular structure'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>HOSPITAL OR SIMILAR STRUCTURE</option>
													<option value="welfare and charitable structures" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'welfare and charitable structures'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>WELFARE AND CHARITABLE STRUCTURES</option>
													<option value="theater, auditorium, gymnasium, court" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'theater, auditorium, gymnasium, court'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>THEATER, AUDITORIUM, GYMNASIUM, COURT</option>
													<option value="others" <?php if((isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'institutional') && (isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'others')){echo ' selected="selected"';unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OTHERS</option>
												</select>
												<select id="agricultural" name="agricultural" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'agricultural'){echo 'style="display:block";' ;}?>>
													<option value="barn(s) poultry house(s) etc." <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'barn(s) poultry house(s) etc.'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>BARN(S) POULTRY HOUSE(S) ETC.</option>
													<option value="grain mill" <?php if(isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'grain mill'){echo ' selected="selected"'; unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>GRAIN MILL</option>
													<option value="others" <?php if((isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'agricultural') && (isset($_SESSION['$child_typeOfOccupancy']) && $_SESSION['$child_typeOfOccupancy'] == 'others')){echo ' selected="selected"';unset($_SESSION['$child_typeOfOccupancy']);unset($_SESSION['$parent_typeOfOccupancy']);}?>>OTHERS</option>
												</select>
											</div>
										</div>
								</div>
								<div class="form-group">
									<span class="col-xs-4"></span>
									<div class="col-xs-8">
											<div id="other_typeOfOccupancy">
												<input type="text" name="typeOfOccupancy_others" id="typeOfOccupancy_others" <?php if(!empty($_SESSION['$others_typeOfOccupancyErr2'])||!empty($_SESSION['$typeOfOccupancy_others'])){echo 'style="display:block";';unset($_SESSION['$others_typeOfOccupancyErr2']);unset($_SESSION['$child_typeOfOccupancy']);}?> value="<?php if(!empty($_SESSION['$typeOfOccupancy_others'])){echo $_SESSION['$typeOfOccupancy_others']; unset($_SESSION['$typeOfOccupancy_others']);}?>"></input>
											</div>
										</div>
								</div>
								</section>
								
                            <!-- scope of work and use or type of occupancy code should go here-->
                     <!--   </form>-->
                    <hr>
                        <h4>Total Estimated Cost</h4>
							<section id="box3A">
                            <label>* Building</label>
                            <div class="form-group">
                                <label for="tec1" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00"  id="tec1" name="tec1"  onChange="sumTEC()" value="<?php if(!empty($_SESSION['$tec1'])){echo $_SESSION['$tec1']; unset($_SESSION['$tec1']);}?>" placeholder="0.00"><span class="error-msg"><?php if(!empty($_SESSION['$tec1Err'])){echo $_SESSION['$tec1Err']; unset($_SESSION['$tec1Err']);}?></span>
                                </div>
                            </div>
                            <label>* Electrical</label>
                            <div class="form-group">
                                <label for="tec2" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec2" name="tec2" onChange="sumTEC()" value="<?php if(!empty($_SESSION['$tec2'])){echo $_SESSION['$tec2']; unset($_SESSION['$tec2']);}?>" placeholder="0.00"><span class="error-msg"><?php if(!empty($_SESSION['$tec2Err'])){echo $_SESSION['$tec2Err']; unset($_SESSION['$tec2Err']);}?></span>
                                </div>
                            </div>
                            <label>* Mechanical</label>
                            <div class="form-group">
                                <label for="tec3" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec3" name="tec3" onChange="sumTEC()" value="<?php if(!empty($_SESSION['$tec3'])){echo $_SESSION['$tec3']; unset($_SESSION['$tec3']);}?>" placeholder="0.00"><span class="error-msg"><?php if(!empty($_SESSION['$tec3Err'])){echo $_SESSION['$tec3Err']; unset($_SESSION['$tec3Err']);}?></span>
                                </div>
                            </div>
                            <label>* Plumbing</label>
                            <div class="form-group">
                                <label for="tec4" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec4"  name="tec4" onChange="sumTEC()" value="<?php if(!empty($_SESSION['$tec4'])){echo $_SESSION['$tec4']; unset($_SESSION['$tec4']);}?>" placeholder="0.00"><span class="error-msg"><?php if(!empty($_SESSION['$tec4Err'])){echo $_SESSION['$tec4Err']; unset($_SESSION['$tec4Err']);}?></span>
                                </div>
                            </div>
                            <label>* Others</label>
                            <div class="form-group">
                                <label for="tec5" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec5"  name="tec5" onChange="sumTEC()" value="<?php if(!empty($_SESSION['$tec5'])){echo $_SESSION['$tec5']; unset($_SESSION['$tec5']);}?>" placeholder="0.00"><span class="error-msg"><?php if(!empty($_SESSION['$tec5Err'])){echo $_SESSION['$tec5Err']; unset($_SESSION['$tec5Err']);}?></span>
                                </div>
                            </div>
							<label>Total</label>
                            <div class="form-group">
                                <label for="totalTEC" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" id="totalTEC"  name="totalTEC" value="<?php if(!empty($_SESSION['$tec6'])){echo $_SESSION['$tec6']; unset($_SESSION['$tec6']);}?>" readonly>
                                </div>
                            </div>

                            <!-- Cost of Equipment Installed -->
                            <hr>
                            <h4>Cost of Equipment Installed</h4>
                                <div class="form-group">
                                    <label for="cei1" class="control-label col-xs-4">&#8369</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="0.01" id="cei1"  name="cei1" placeholder="0.00" onChange="sumCEI()" value="<?php if(!empty($_SESSION['$cei1'])){echo $_SESSION['$cei1']; unset($_SESSION['$cei1']);}?>"><span class="error-msg"><?php if(!empty($_SESSION['$cei1Err'])){echo $_SESSION['$cei1Err']; unset($_SESSION['$cei1Err']);}?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cei1" class="control-label col-xs-4">&#8369</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="0.01" min="0.00" id="cei2" name="cei2" placeholder="0.00" onChange="sumCEI()" value="<?php if(!empty($_SESSION['$cei2'])){echo $_SESSION['$cei2']; unset($_SESSION['$cei2']);}?>"><span class="error-msg"><?php if(!empty($_SESSION['$cei2Err'])){echo $_SESSION['$cei2Err']; unset($_SESSION['$cei2Err']);}?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cei1" class="control-label col-xs-4">&#8369</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="0.01" min="0.00" id="cei3" name="cei3" placeholder="0.00" onChange="sumCEI()" value="<?php if(!empty($_SESSION['$cei3'])){echo $_SESSION['$cei3']; unset($_SESSION['$cei3']);}?>"><span class="error-msg"><?php if(!empty($_SESSION['$cei3Err'])){echo $_SESSION['$cei3Err']; unset($_SESSION['$cei3Err']);}?></span>
                                    </div>
                                </div>
								<label>Total</label>
								<div class="form-group">
									<label for="totalCEI" class="control-label col-xs-4">&#8369</label>
									<div class="col-xs-8">
										<input type="number" class="form-control" id="totalCEI"  name="totalCEI" value="<?php if(!empty($_SESSION['$cei4'])){echo $_SESSION['$cei4']; unset($_SESSION['$cei4']);}?>" readonly>
									</div>
								</div>
                                <div class="form-group">
                                    <label for="storey" class="control-label col-xs-4">* Number of Storeys:</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="1" min="0"  id="storey" name="storey" value="<?php if(!empty($_SESSION['$storey'])){echo $_SESSION['$storey']; unset($_SESSION['$storey']);}?>"placeholder="0"><span class="error-msg"><?php if(!empty($_SESSION['$storeyErr'])){echo $_SESSION['$storeyErr']; unset($_SESSION['$storeyErr']);}?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="floorArea" class="control-label col-xs-4">* Total Floor Area:</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="1" min="0" id="floorArea" name="floorArea" value="<?php if(!empty($_SESSION['$floorArea'])){echo $_SESSION['$floorArea']; unset($_SESSION['$floorArea']);}?>"placeholder="0"><span class="error-msg"><?php if(!empty($_SESSION['$floorAreaErr'])){echo $_SESSION['$floorAreaErr']; unset($_SESSION['$floorAreaErr']);}?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="constructionDate" class="control-label col-xs-4">* Proposed Date of Construction:</label>
                                    <div class="col-xs-8">
                                        <input type="date" class="form-control" id="constructionDate" name="constructionDate" value="<?php if(!empty($_SESSION['$constructionDate'])){echo $_SESSION['$constructionDate']; unset($_SESSION['$constructionDate']);}?>" ><span class="error-msg"><?php if(!empty($_SESSION['$constructionDateErr'])){echo $_SESSION['$constructionDateErr']; unset($_SESSION['$constructionDateErr']);}?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="constructionDate" class="control-label col-xs-4">* Materials of Conctruction:</label>
                                    <div class="col-xs-8">
                                        <select id="o4"  name="o4"><span class="error-msg"><?php if(!empty($_SESSION['$o4Err'])){echo $_SESSION['$o4Err']; unset($_SESSION['$o4Err']);}?></span>
											<option option selected disabled>SELECT MATERIALS OF CONSTRUCTION</option>
                                            <option value="wood" <?php if(isset($_SESSION['$o4']) && $_SESSION['$o4'] == 'wood') echo ' selected="selected"'; unset($_SESSION['$o4']);?>>WOOD</option>
                                            <option value="concrete" <?php if(isset($_SESSION['$o4']) && $_SESSION['$o4'] == 'wood') echo ' selected="selected"'; unset($_SESSION['$o4']);?>>CONCRETE</option>
                                            <option value="steel" <?php if(isset($_SESSION['$o4']) && $_SESSION['$o4'] == 'wood') echo ' selected="selected"'; unset($_SESSION['$o4']);?>>STEEL</option>
                                            <option value="mixed" <?php if(isset($_SESSION['$o4']) && $_SESSION['$o4'] == 'wood') echo ' selected="selected"'; unset($_SESSION['$o4']);?>>MIXED</option>
                                        </select>
                                    </div>
                                </div>
								</section>

                           <!--   </form>-->
                        <hr>
                        <h4>Architect/Civil Engineer</h4>
                        <h6>Signed and Sealed Plans and Specifications</h6>
							<section id="box6">
                            <div class="form-group">
                                <label for="SPRC" class="control-label col-xs-4">* PRC Reg. Number:</label>
                                <div class="col-xs-8">
										<input type="text" class="form-control" id="SPRC" name="SPRC" value="<?php if(!empty($_SESSION['$SPRC'])){echo $_SESSION['$SPRC']; unset($_SESSION['$SPRC']);}?>" placeholder="PRC Registration Number">
									<span class="error-msg"><?php if(!empty($_SESSION['$SPRCErr'])){echo $_SESSION['$SPRCErr']; unset($_SESSION['$SPRCErr']);}?></span>
								</div>
                            </div>
                            <div class="form-group">
                                <label for="SlastName" class="control-label col-xs-4">* Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="SlastName" name="SlastName" value="<?php if(!empty($_SESSION['$SlastName'])){echo $_SESSION['$SlastName']; unset($_SESSION['$SlastName']);}?>"placeholder="Last Name"><span class="error-msg"><?php if(!empty($_SESSION['$SlastNameErr'])){echo $_SESSION['$SlastNameErr']; unset($_SESSION['$SlastNameErr']);}?><?php if(!empty($_SESSION['$SlastNameErr2'])){echo $_SESSION['$SlastNameErr2']; unset($_SESSION['$SlastNameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SfirstName" class="control-label col-xs-4">* First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="SFirstName" name="SFirstName"value="<?php if(!empty($_SESSION['$SFirstName'])){echo $_SESSION['$SFirstName']; unset($_SESSION['$SFirstName']);}?>" placeholder="First Name"><span class="error-msg"><?php if(!empty($_SESSION['$SFirstNameErr'])){echo $_SESSION['$SFirstNameErr']; unset($_SESSION['$SFirstNameErr']);}?><?php if(!empty($_SESSION['$SFirstNameErr2'])){echo $_SESSION['$SFirstNameErr2']; unset($_SESSION['$SFirstNameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SmiddleInitial" class="control-label col-xs-4">* Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="SmiddleInitial" name="SmiddleInitial" value="<?php if(!empty($_SESSION['$SmiddleInitial'])){echo $_SESSION['$SmiddleInitial']; unset($_SESSION['$SmiddleInitial']);}?>"placeholder="Middle Initial"><span class="error-msg"><?php if(!empty($_SESSION['$SmiddleInitialErr'])){echo $_SESSION['$SmiddleInitialErr']; unset($_SESSION['$SmiddleInitialErr']);}?><?php if(!empty($_SESSION['$SmiddleInitialErr2'])){echo $_SESSION['$SmiddleInitialErr2']; unset($_SESSION['$SmiddleInitialErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Saddress" class="control-label col-xs-4">* Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Saddress" name="Saddress" value="<?php if(!empty($_SESSION['$Saddress'])){echo $_SESSION['$Saddress']; unset($_SESSION['$Saddress']);}?>"placeholder="Address"><span class="error-msg"><?php if(!empty($_SESSION['$SaddressErr'])){echo $_SESSION['$SaddressErr']; unset($_SESSION['$SaddressErr']);}?></span>
                                </div>
                            </div>
							</section>
                        <hr>
                        <h4>Architect/Civil Engineer</h4>
                        <h6>In-charge of Construction</h6>
							<section id="box7">
                            <div class="form-group">
                                <label for="CPRC" class="control-label col-xs-4">* PRC Reg. Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="CPRC" name="CPRC" value="<?php if(!empty($_SESSION['$CPRC'])){echo $_SESSION['$CPRC']; unset($_SESSION['$CPRC']);}?>"placeholder="PRC Registration Number"><span class="error-msg"><?php if(!empty($_SESSION['$CPRCErr'])){echo $_SESSION['$CPRCErr']; unset($_SESSION['$CPRCErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ClastName" class="control-label col-xs-4">* Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="ClastName" name="ClastName" value="<?php if(!empty($_SESSION['$ClastName'])){echo $_SESSION['$ClastName']; unset($_SESSION['$ClastName']);}?>"placeholder="Last Name"><span class="error-msg"><?php if(!empty($_SESSION['$ClastNameErr'])){echo $_SESSION['$ClastNameErr']; unset($_SESSION['$ClastNameErr']);}?><?php if(!empty($_SESSION['$ClastNameErr2'])){echo $_SESSION['$ClastNameErr2']; unset($_SESSION['$ClastNameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CfirstName" class="control-label col-xs-4">* First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="CFirstName" name="CFirstName" value="<?php if(!empty($_SESSION['$CFirstName'])){echo $_SESSION['$CFirstName']; unset($_SESSION['$CFirstName']);}?>"placeholder="First Name"><span class="error-msg"><?php if(!empty($_SESSION['$CFirstNameErr'])){echo $_SESSION['$CFirstNameErr']; unset($_SESSION['$CFirstNameErr']);}?><?php if(!empty($_SESSION['$CFirstNameErr2'])){echo $_SESSION['$CFirstNameErr2']; unset($_SESSION['$CFirstNameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CmiddleInitial" class="control-label col-xs-4">* Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="CmiddleInitial" name="CmiddleInitial" value="<?php if(!empty($_SESSION['$CmiddleInitial'])){echo $_SESSION['$CmiddleInitial']; unset($_SESSION['$CmiddleInitial']);}?>"placeholder="Middle Initial"><span class="error-msg"><?php if(!empty($_SESSION['$CmiddleInitialErr'])){echo $_SESSION['$CmiddleInitialErr']; unset($_SESSION['$CmiddleInitialErr']);}?><?php if(!empty($_SESSION['$CmiddleInitialErr2'])){echo $_SESSION['$CmiddleInitialErr2']; unset($_SESSION['$CmiddleInitialErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Caddress" class="control-label col-xs-4">* Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Ccaddress" name="Ccaddress" value="<?php if(!empty($_SESSION['$Ccaddress'])){echo $_SESSION['$Ccaddress']; unset($_SESSION['$Ccaddress']);}?>"placeholder="Address"><span class="error-msg"><?php if(!empty($_SESSION['$CcaddressErr'])){echo $_SESSION['$CcaddressErr']; unset($_SESSION['$CcaddressErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ptrNo" class="control-label col-xs-4">* PTR Number:</label>
                                <div class="col-xs-8">
									<div class="right-inner-addon table-error">
										<a>
										<span class="glyphicon glyphicon-question-sign red" data-toggle="tooltip" data-placement="left" title="Tax to be paid by the Architect/Engineer &#013 that handles the building construction found at &#013 the upper right corner of the receipt &#013 below the barcode."></span>
										<input type="text" class="form-control" id="ptrNo" name="ptrNo" value="<?php if(!empty($_SESSION['$ptrNo'])){echo $_SESSION['$ptrNo']; unset($_SESSION['$ptrNo']);}?>"placeholder="PTR Number">
										</a>
									</div>
									<span class="error-msg"><?php if(!empty($_SESSION['$ptrNoErr'])){echo $_SESSION['$ptrNoErr']; unset($_SESSION['$ptrNoErr']);}?></span>
							   </div>
                            </div>
                            <div class="form-group">
                                <label for="dateIssued" class="control-label col-xs-4">* Date Issued:</label>
                                <div class="col-xs-8">
                                    <input type="date" class="form-control" id="dateIssued" name="dateIssued" value="<?php if(!empty($_SESSION['$dateIssued'])){echo $_SESSION['$dateIssued']; unset($_SESSION['$dateIssued']);}?>"><span class="error-msg"><?php if(!empty($_SESSION['$dateIssuedErr'])){echo $_SESSION['$dateIssuedErr']; unset($_SESSION['$dateIssuedErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="placeIssued" class="control-label col-xs-4">* Place Issued:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="placeIssued" name="placeIssued" value="<?php if(!empty($_SESSION['$placeIssued'])){echo $_SESSION['$placeIssued']; unset($_SESSION['$placeIssued']);}?>"placeholder="Place Issued"><span class="error-msg"><?php if(!empty($_SESSION['$placeIssuedErr'])){echo $_SESSION['$placeIssuedErr']; unset($_SESSION['$placeIssuedErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tin" class="control-label col-xs-4">* Tin:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="tin" name="tin" value="<?php if(!empty($_SESSION['$tin'])){echo $_SESSION['$tin']; unset($_SESSION['$tin']);}?>"placeholder="Tin"><span class="error-msg"><?php if(!empty($_SESSION['$tinErr'])){echo $_SESSION['$tinErr']; unset($_SESSION['$tinErr']);}?><?php if(!empty($_SESSION['$tinErr2'])){echo $_SESSION['$tinErr2']; unset($_SESSION['$tinErr2']);}?></span>
                                </div>
                            </div> 
							</section>
                        <hr>
                        <h4>Community Tax Certificate</h4>
                        <section id="box8">
						<div class="form-group">
                                <label for="tin" class="control-label col-xs-4">* Community Tax Certificate:</label>
                                <div class="col-xs-8">
										<input type="text" class="form-control" id="ctc" name="ctc" value="<?php if(!empty($_SESSION['$ctc'])){echo $_SESSION['$ctc']; unset($_SESSION['$ctc']);}?>"placeholder="Community Tax Certificate">
									<span class="error-msg"><?php if(!empty($_SESSION['$ctcErr'])){echo $_SESSION['$ctcErr']; unset($_SESSION['$ctcErr']);}?></span>
							   </div>
                        </div> 
                        <div class="form-group">
                                <label for="tin" class="control-label col-xs-4">* Date Issued:</label>
                                <div class="col-xs-8">
                                    <input type="date" class="form-control" id="ctcDate" name="ctcDate" value="<?php if(!empty($_SESSION['$ctcDate'])){echo $_SESSION['$ctcDate']; unset($_SESSION['$ctcDate']);}?>"placeholder="Date Issued"><span class="error-msg"><?php if(!empty($_SESSION['$ctcDateErr'])){echo $_SESSION['$ctcDateErr']; unset($_SESSION['$ctcDateErr']);}?></span>
                                </div>
                        </div> 
                        <div class="form-group">
                                <label for="tin" class="control-label col-xs-4">* Place Issued:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="ctcPlace" name="ctcPlace" value="<?php if(!empty($_SESSION['$ctcPlace'])){echo $_SESSION['$ctcPlace']; unset($_SESSION['$ctcPlace']);}?>"placeholder="Place Issued"><span class="error-msg"><?php if(!empty($_SESSION['$ctcPlaceErr'])){echo $_SESSION['$ctcPlaceErr']; unset($_SESSION['$ctcPlaceErr']);}?></span>
                                </div>
                        </div>   
						</section>
                        <hr>
                        <h4>To be Accomplished by Lot Owner</h4>
						<section id="box9">
                            <div class="form-group">
                                <label for="tct" class="control-label col-xs-4">* TCT/OCT Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="tct" name="tct" value="<?php if(!empty($_SESSION['$tct'])){echo $_SESSION['$tct']; unset($_SESSION['$tct']);}?>"placeholder="TCT/OCT Number"><span class="error-msg"><?php if(!empty($_SESSION['$tctErr'])){echo $_SESSION['$tctErr']; unset($_SESSION['$tctErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OlastName" class="control-label col-xs-4">* Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="OlastName" name="OlastName" value="<?php if(!empty($_SESSION['$OlastName'])){echo $_SESSION['$OlastName']; unset($_SESSION['$OlastName']);}?>"placeholder="Last Name"><span class="error-msg"><?php if(!empty($_SESSION['$OlastNameErr'])){echo $_SESSION['$OlastNameErr']; unset($_SESSION['$OlastNameErr']);}?><?php if(!empty($_SESSION['$OlastNameErr2'])){echo $_SESSION['$OlastNameErr2']; unset($_SESSION['$OlastNameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OfirstName" class="control-label col-xs-4">* First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="OFirstName" name="OFirstName" value="<?php if(!empty($_SESSION['$OFirstName'])){echo $_SESSION['$OFirstName']; unset($_SESSION['$OFirstName']);}?>"placeholder="First Name"><span class="error-msg"><?php if(!empty($_SESSION['$OFirstNameErr'])){echo $_SESSION['$OFirstNameErr']; unset($_SESSION['$OFirstNameErr']);}?><?php if(!empty($_SESSION['$OFirstNameErr2'])){echo $_SESSION['$OFirstNameErr2']; unset($_SESSION['$OFirstNameErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OmiddleInitial" class="control-label col-xs-4">* Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="OmiddleInitial" name="OmiddleInitial" value="<?php if(!empty($_SESSION['$OmiddleInitial'])){echo $_SESSION['$OmiddleInitial']; unset($_SESSION['$OmiddleInitial']);}?>"placeholder="Middle Initial"><span class="error-msg"><?php if(!empty($_SESSION['$OmiddleInitialErr'])){echo $_SESSION['$OmiddleInitialErr']; unset($_SESSION['$OmiddleInitialErr']);}?><?php if(!empty($_SESSION['$OmiddleInitialErr2'])){echo $_SESSION['$OmiddleInitialErr2']; unset($_SESSION['$OmiddleInitialErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Oaddress" class="control-label col-xs-4">* Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Ocaddress" name="Ocaddress" value="<?php if(!empty($_SESSION['$Ocaddress'])){echo $_SESSION['$Ocaddress']; unset($_SESSION['$Ocaddress']);}?>"placeholder="Address"><span class="error-msg"><?php if(!empty($_SESSION['$OcaddressErr'])){echo $_SESSION['$OcaddressErr']; unset($_SESSION['$OcaddressErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Octc" class="control-label col-xs-4">* Community Tax Certificate:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Octc" name="Octc" value="<?php if(!empty($_SESSION['$Octc'])){echo $_SESSION['$Octc']; unset($_SESSION['$Octc']);}?>" placeholder="Community tax Certificate"><span class="error-msg"><?php if(!empty($_SESSION['$OctcErr'])){echo $_SESSION['$OctcErr']; unset($_SESSION['$OctcErr']);}?></span>
                                </div>
                            </div>
							</section>
                        <hr>
                        <h4>Application Credentials</h4>
							<section id="trackingAcc">
                            <div class="form-group">
                                <label for="email" class="control-label col-xs-4">* Email Address:</label>
                                <div class="col-xs-8">
                                    <input type="email" class="form-control" id="email" name="email" value="<?php if(!empty($_SESSION['$email'])){echo $_SESSION['$email']; unset($_SESSION['$email']);}?>"placeholder="Email Address"><span class="error-msg"><?php if(!empty($_SESSION['$emailErr'])){echo $_SESSION['$emailErr']; unset($_SESSION['$emailErr']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pw" class="control-label col-xs-4">* Password:</label>
                                <div class="col-xs-8">
                                    <input type="password" class="form-control" id="pw" name="pw" value="<?php if(!empty($_SESSION['$pw'])){echo $_SESSION['$pw']; unset($_SESSION['$pw']);}?>" placeholder="Password"><span class="error-msg"><?php if(!empty($_SESSION['$pwErr'])){echo $_SESSION['$pwErr']; unset($_SESSION['$pwErr']);}?><?php if(!empty($_SESSION['$pwErr2'])){echo $_SESSION['$pwErr2']; unset($_SESSION['$pwErr2']);}?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpw" class="control-label col-xs-4">* Confirm Password:</label>
                                <div class="col-xs-8">
                                    <input type="password" class="form-control" id="cpw"name="cpw" value="<?php if(!empty($_SESSION['$cpw'])){echo $_SESSION['$cpw']; unset($_SESSION['$cpw']);}?>" placeholder="Confirm Password"><span class="error-msg"><?php if(!empty($_SESSION['$cpwErr'])){echo $_SESSION['$cpwErr']; unset($_SESSION['$cpwErr']);}?></span>
                                </div>
                            </div>
							</section>
                            <h6>Note: This password will be used for tracking your application request</h6>
					<!--   </form>-->
					<div class = "buttons">
						<input type="submit" id ="regSub" value="Submit"/>
                    </div>
					<div id="alert" title="Note" style="display:none" align="center">
						<p style="color:black">All the information entered in the form can not be edited after submit. Do you really want to submit?</p>
						<input type="button" value="Yes" onclick="proceed()"/>
						<input type="button" value="No" onclick="cancel()"/>
					</div>
					</form>
                </div>                                      
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div>
</div>

<?php include '../../Client/common/footer.php'; ?>
</body>

</html>
