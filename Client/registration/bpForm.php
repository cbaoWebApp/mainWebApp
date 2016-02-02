<?php
session_start();
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

        <link rel="stylesheet" href="css/bpForm.css">
        <link rel="stylesheet" href="btstrp/css/bootstrap.css">
		
    </head>
    <body>  
        <div class="header">
            <div class = "row">
                <div class = "col-md-4">
                    <p><img class = "img-responsive" src="img/seal.png" alt=""></p>
                </div>
                <div class = "col-md-4">
                    <p>City Government of Baguio</p>
					
                </div>
                <div class = "col-md-4">
                    <p id = "cbao">CBAO</p>
                </div>
            </div>
        </div>
		
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
                    <p><a href="index.html" class="btn2">Cancel Application</a></p>
                </div>
            </div>
					
            <div class = "col-md-9">
                <div class = "scroll">
                    <section id="box1">
                        <h4>General Information</h4>
						 <form class="form-horizontal" action="processBpForm.php" method="post">
                            <div class="form-group">
                                <label for="lastName" class="control-label col-xs-4">* Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php if(!empty($_SESSION['$lName'])){echo $_SESSION['$lName']; unset($_SESSION['$lName']);}?>" placeholder="Last Name"><?php if(!empty($_SESSION['$lnameErr'])){echo $_SESSION['$lnameErr']; unset($_SESSION['$lnameErr']);}?> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="control-label col-xs-4">* First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php if(!empty($_SESSION['$fName'])){echo $_SESSION['$fName']; unset($_SESSION['$fName']);}?>" placeholder="First Name"><?php if(!empty($_SESSION['$fnameErr'])){echo $_SESSION['$fnameErr']; unset($_SESSION['$fnameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middleInitial" class="control-label col-xs-4">* Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="middleInitial" name="middleInitial"  value="<?php if(!empty($_SESSION['$mName'])){echo $_SESSION['$mName']; unset($_SESSION['$mName']);}?>" placeholder="Middle Initial"><?php if(!empty($_SESSION['$mnameErr'])){echo $_SESSION['$mnameErr']; unset($_SESSION['$mnameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="TaxAccNo" class="control-label col-xs-4">TIN:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="TaxAccNo" name="TaxAccNo" value="<?php if(!empty($_SESSION['$TaxAccNo'])){echo $_SESSION['$TaxAccNo']; unset($_SESSION['$TaxAccNo']);}?>" placeholder="Tax Account Number"><?php if(!empty($_SESSION['$TaxAccNoErr'])){echo $_SESSION['$TaxAccNoErr']; unset($_SESSION['$TaxAccNoErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="enterpriseName" class="control-label col-xs-4">Enterprise Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="enterpriseName" name="enterpriseName" value="<?php if(!empty($_SESSION['$entName'])){echo $_SESSION['$entName']; unset($_SESSION['$entName']);}?>" placeholder="Enterprise Name"><?php if(!empty($_SESSION['$entNameErr'])){echo $_SESSION['$entNameErr']; unset($_SESSION['$entNameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formOfOwnership" class="control-label col-xs-4">* Form of Ownership:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="formOfOwnership" name="formOfOwnership" value="<?php if(!empty($_SESSION['$formOfOwnership'])){echo $_SESSION['$formOfOwnership']; unset($_SESSION['$formOfOwnership']);}?>" placeholder="Form of Ownership"><?php if(!empty($_SESSION['$formOfOwnershipErr'])){echo $_SESSION['$formOfOwnershipErr']; unset($_SESSION['$formOfOwnershipErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kindOfBusiness" class="control-label col-xs-4">Kind of Business:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="kindOfBusiness" name="kindOfBusiness" value="<?php if(!empty($_SESSION['$kindOfBusiness'])){echo $_SESSION['$kindOfBusiness']; unset($_SESSION['$kindOfBusiness']);}?>" placeholder="Kind of Business"><?php if(!empty($_SESSION['$kindOfBusinessErr'])){echo $_SESSION['$kindOfBusinessErr']; unset($_SESSION['$kindOfBusinessErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Address" class="control-label col-xs-4">Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Address" name="Address" value="<?php if(!empty($_SESSION['$Address'])){echo $_SESSION['$Address']; unset($_SESSION['$Address']);}?>" placeholder="Address"><?php if(!empty($_SESSION['$AddressErr'])){echo $_SESSION['$AddressErr']; unset($_SESSION['$AddressErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contactNumber" class="control-label col-xs-4">Contact Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control"  id="contactNumber" name="contactNumber" value="<?php if(!empty($_SESSION['$contactNumber'])){echo $_SESSION['$contactNumber']; unset($_SESSION['$contactNumber']);}?>" placeholder="Contact Number"><?php if(!empty($_SESSION['$contactNumberErr'])){echo $_SESSION['$contactNumberErr']; unset($_SESSION['$contactNumberErr']);}?>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label for="location" class="control-label col-xs-4">Location of Construction:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control"  id="location" name="location" value="<?php if(!empty($_SESSION['$location'])){echo $_SESSION['$location']; unset($_SESSION['$location']);}?>" placeholder="Location of Construction"><?php if(!empty($_SESSION['$locationErr'])){echo $_SESSION['$locationErr']; unset($_SESSION['$locationErr']);}?>
                                </div>
                            </div>
							<div class="form-group">
								<label for="scope" class="control-label col-xs-4">Scope of work</label>
							</div>
							<div class="form-group">
								<label for="newConstruction" class="control-label col-xs-4">New construction:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="newConstruction" name="newConstruction" value="<?php if(!empty($_SESSION['$newConstruction'])){echo $_SESSION['$newConstruction']; unset($_SESSION['$newConstruction']);}?>"/><?php if(!empty($_SESSION['$newConstructionErr'])){echo $_SESSION['$newConstructionErr']; unset($_SESSION['$newConstructionErr']);}?>
								</div>
							</div>
							<div class="form-group">
								<label for="additionOf" class="control-label col-xs-4">Addition of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="additionOf" name="additionOf" value="<?php if(!empty($_SESSION['$additionOf'])){echo $_SESSION['$additionOf']; unset($_SESSION['$additionOf']);}?>"/><?php if(!empty($_SESSION['$additionOfErr'])){echo $_SESSION['$additionOfErr']; unset($_SESSION['$additionOfErr']);}?>
								</div>
							</div>
							<div class="form-group">
								<label for="repairOf" class="control-label col-xs-4">Repair of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="repairOf" name="repairOf" value="<?php if(!empty($_SESSION['$repairOf'])){echo $_SESSION['$repairOf']; unset($_SESSION['$repairOf']);}?>"/><?php if(!empty($_SESSION['$repairOfErr'])){echo $_SESSION['$repairOfErr']; unset($_SESSION['$repairOfErr']);}?>
								</div>
							</div>
							<div class="form-group">
								<label for="renovationOf" class="control-label col-xs-4">Renovation of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="renovationOf" name="renovationOf" value="<?php if(!empty($_SESSION['$renovationOf'])){echo $_SESSION['$renovationOf']; unset($_SESSION['$renovationOf']);}?>"/><?php if(!empty($_SESSION['$renovationOfErr'])){echo $_SESSION['$renovationOfErr']; unset($_SESSION['$renovationOfErr']);}?>
								</div>
							</div>
							<div class="form-group">
								<label for="demolitionOf" class="control-label col-xs-4">Demolition of:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="demolitionOf" name="demolitionOf" value="<?php if(!empty($_SESSION['$demolitionOf'])){echo $_SESSION['$demolitionOf']; unset($_SESSION['$demolitionOf']);}?>"/><?php if(!empty($_SESSION['$demolitionOfErr'])){echo $_SESSION['$demolitionOfErr']; unset($_SESSION['$demolitionOfErr']);}?>
								</div>
							</div>
							<div class="form-group">
								<label for="repairOf" class="control-label col-xs-4">Others</label>
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
									<input type="text" class="form-control" id="others2" name="others2" value="<?php if(!empty($_SESSION['$others2'])){echo $_SESSION['$others2']; unset($_SESSION['$others2']);}?>"/><?php if(!empty($_SESSION['$others1and2Err'])){echo $_SESSION['$others1and2Err']; unset($_SESSION['$others1and2Err']);}?>
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
									<input type="text" class="form-control" id="others4" name="others4" value="<?php if(!empty($_SESSION['$others4'])){echo $_SESSION['$others4']; unset($_SESSION['$others4']);}?>"/><?php if(!empty($_SESSION['$others3and4Err'])){echo $_SESSION['$others3and4Err']; unset($_SESSION['$others3and4Err']);}?>
								</div>
							</div>
							<div class="form-group">
								<label for="numberOfUnits" class="control-label col-xs-4">Number of units:</label>
								<div class="col-xs-8">
									<input type="number" class="form-control" id="numberOfUnits" name="numberOfUnits" value="<?php if(!empty($_SESSION['$numberOfUnits'])){echo $_SESSION['$numberOfUnits']; unset($_SESSION['$numberOfUnits']);}?>"/><?php if(!empty($_SESSION['$numberOfUnitsErr'])){echo $_SESSION['$numberOfUnitsErr']; unset($_SESSION['$numberOfUnitsErr']);}?>
								</div>
							</div>
							<div class="form-group">
								<label for="typeOfOccupancy" class="control-label col-xs-4">Type of Occupancy</label>
							</div>
							<div class="form-group">
									<span class="col-xs-4"></span>
                                    <div class="col-xs-8">
                                        <select id="parent_typeOfOccupancy"  name="parent_typeOfOccupancy">
											<option option disabled selected>SELECT TYPE OF OCCUPANCY</option>
                                            <option value="residential" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'residential') echo ' selected="selected"';?>>RESIDENTIAL</option>
                                            <option value="commercial" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'commercial') echo ' selected="selected"';?>>COMMERCIAL</option>
                                            <option value="street furniture, landscaping, signboards" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'street furniture, landscaping, signboards') echo ' selected="selected"';?>>STREET FURNITURE, LANDSCAPING, SIGNBOARDS</option>
											<option value="industrial" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'industrial') echo ' selected="selected"';?>>INDUSTRIAL</option>
											<option value="institutional" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'institutional') echo ' selected="selected"';?>>INSTITUTIONAL</option>
											<option value="agricultural" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'agricultural') echo ' selected="selected"';?>>AGRICULTURAL</option>
											<option value="others" <?php if(isset($_SESSION['$parent_typeOfOccupancy']) && $_SESSION['$parent_typeOfOccupancy'] == 'others') echo ' selected="selected"';?>>OTHER CONSTRUCTION</option>
										</select>
                                    </div>
                                </div>
								<div class="form-group">
									<span class="col-xs-4"></span>
									<div class="col-xs-8">
											<div id="child_typeOfOccupancy"></div>
										</div>
								</div>
								<div class="form-group">
									<span class="col-xs-4"></span>
									<div class="col-xs-8">
											<div id="other_typeOfOccupancy"></div>
										</div>
								</div>
								
                            <!-- scope of work and use or type of occupancy code should go here-->
                     <!--   </form>-->
                    </section>
                    <hr>
                    <section id="box3A">
                        <h4>Total Estimated Cost</h4>
                            <label>Building</label>
                            <div class="form-group">
                                <label for="tec1" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00"  id="tec1" name="tec1"  value="<?php if(!empty($_SESSION['$tec1'])){echo $_SESSION['$tec1']; unset($_SESSION['$tec1']);}?>" placeholder="0.00"><?php if(!empty($_SESSION['$tec1Err'])){echo $_SESSION['$tec1Err']; unset($_SESSION['$tec1Err']);}?>
                                </div>
                            </div>
                            <label>Electrical</label>
                            <div class="form-group">
                                <label for="tec2" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec2" name="tec2" value="<?php if(!empty($_SESSION['$tec2'])){echo $_SESSION['$tec2']; unset($_SESSION['$tec2']);}?>" placeholder="0.00"><?php if(!empty($_SESSION['$tec2Err'])){echo $_SESSION['$tec2Err']; unset($_SESSION['$tec2Err']);}?>
                                </div>
                            </div>
                            <label>Mechanical</label>
                            <div class="form-group">
                                <label for="tec3" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec3" name="tec3" value="<?php if(!empty($_SESSION['$tec3'])){echo $_SESSION['$tec3']; unset($_SESSION['$tec3']);}?>" placeholder="0.00"><?php if(!empty($_SESSION['$tec3Err'])){echo $_SESSION['$tec3Err']; unset($_SESSION['$tec3Err']);}?>
                                </div>
                            </div>
                            <label>Plumbing</label>
                            <div class="form-group">
                                <label for="tec4" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec4"  name="tec4" value="<?php if(!empty($_SESSION['$tec4'])){echo $_SESSION['$tec4']; unset($_SESSION['$tec4']);}?>" placeholder="0.00"><?php if(!empty($_SESSION['$tec4Err'])){echo $_SESSION['$tec4Err']; unset($_SESSION['$tec4Err']);}?>
                                </div>
                            </div>
                            <label>Others</label>
                            <div class="form-group">
                                <label for="tec5" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec5"  name="tec5" value="<?php if(!empty($_SESSION['$tec5'])){echo $_SESSION['$tec5']; unset($_SESSION['$tec5']);}?>" placeholder="0.00"><?php if(!empty($_SESSION['$tec5Err'])){echo $_SESSION['$tec5Err']; unset($_SESSION['$tec5Err']);}?>
                                </div>
                            </div>
                            <label>Total Cost</label>
                            <div class="form-group">
                                <label for="tec6" class="control-label col-xs-4">&#8369</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" step="1.00" min="0.00" id="tec6"   name="tec6" value="<?php if(!empty($_SESSION['$tec6'])){echo $_SESSION['$tec6']; unset($_SESSION['$tec6']);}?>" placeholder="0.00">
                                </div>
                            </div

                            <!-- Cost of Equipment Installed -->
                            <hr>
                            <h4>Cost of Equipment Installed</h4>
                                <div class="form-group">
                                    <label for="cei1" class="control-label col-xs-4">&#8369</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="0.01" min="0.00" id="cei1"  name="cei1" placeholder="0.00" value="<?php if(!empty($_SESSION['$cei1'])){echo $_SESSION['$cei1']; unset($_SESSION['$cei1']);}?>"><?php if(!empty($_SESSION['$cei1Err'])){echo $_SESSION['$cei1Err']; unset($_SESSION['$cei1Err']);}?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cei1" class="control-label col-xs-4">&#8369</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="0.01" min="0.00" id="cei1" name="cei2" placeholder="0.00" value="<?php if(!empty($_SESSION['$cei2'])){echo $_SESSION['$cei2']; unset($_SESSION['$cei2']);}?>"><?php if(!empty($_SESSION['$cei2Err'])){echo $_SESSION['$cei2Err']; unset($_SESSION['$cei2Err']);}?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cei1" class="control-label col-xs-4">&#8369</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="0.01" min="0.00" id="cei1" name="cei3" placeholder="0.00" value="<?php if(!empty($_SESSION['$cei3'])){echo $_SESSION['$cei3']; unset($_SESSION['$cei3']);}?>"><?php if(!empty($_SESSION['$cei3Err'])){echo $_SESSION['$cei3Err']; unset($_SESSION['$cei3Err']);}?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="storey" class="control-label col-xs-4">Number of Storeys:</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="1" min="1"  id="storey" name="storey" value="<?php if(!empty($_SESSION['$storey'])){echo $_SESSION['$storey']; unset($_SESSION['$storey']);}?>"placeholder="0"><?php if(!empty($_SESSION['$storeyErr'])){echo $_SESSION['$storeyErr']; unset($_SESSION['$storeyErr']);}?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="floorArea" class="control-label col-xs-4">Total Floor Area:</label>
                                    <div class="col-xs-8">
                                        <input type="number" class="form-control" step="1" min="1" id="floorArea" name="floorArea" value="<?php if(!empty($_SESSION['$floorArea'])){echo $_SESSION['$floorArea']; unset($_SESSION['$floorArea']);}?>"placeholder="0"><?php if(!empty($_SESSION['$floorAreaErr'])){echo $_SESSION['$floorAreaErr']; unset($_SESSION['$floorAreaErr']);}?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="constructionDate" class="control-label col-xs-4">Proposed Date of Construction:</label>
                                    <div class="col-xs-8">
                                        <input type="date" class="form-control" id="constructionDate" name="constructionDate" value="<?php if(!empty($_SESSION['$constructionDate'])){echo $_SESSION['$constructionDate']; unset($_SESSION['$constructionDate']);}?>" ><?php if(!empty($_SESSION['$constructionDateErr'])){echo $_SESSION['$constructionDateErr']; unset($_SESSION['$constructionDateErr']);}?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="constructionDate" class="control-label col-xs-4">Materials of Conctruction:</label>
                                    <div class="col-xs-8">
                                        <select id="o4"  name="o4">
											<option>SELECT MATERIALS OF CONSTRUCTION</option>
                                            <option value="wood">WOOD</option>
                                            <option value="concrete">CONCRETE</option>
                                            <option value="steel">STEEL</option>
                                            <option value="mixed">MIXED</option>
                                        </select>
                                    </div>
                                </div>

                           <!--   </form>-->
                    </section>
                    <section id="box6">
                        <hr>
                        <h4>Architect/Civil Engineer</h4>
                        <h6>Signed and Sealed Plans and Specifications</h6>
                            <div class="form-group">
                                <label for="SPRC" class="control-label col-xs-4">PRC Reg. Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="SPRC" name="SPRC" value="<?php if(!empty($_SESSION['$SPRC'])){echo $_SESSION['$SPRC']; unset($_SESSION['$SPRC']);}?>" placeholder="PRC Registration Number"><?php if(!empty($_SESSION['$SPRCErr'])){echo $_SESSION['$SPRCErr']; unset($_SESSION['$SPRCErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SlastName" class="control-label col-xs-4">Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="SlastName" name="SlastName" value="<?php if(!empty($_SESSION['$SlastName'])){echo $_SESSION['$SlastName']; unset($_SESSION['$SlastName']);}?>"placeholder="Last Name"><?php if(!empty($_SESSION['$SlastNameErr'])){echo $_SESSION['$SlastNameErr']; unset($_SESSION['$SlastNameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SfirstName" class="control-label col-xs-4">First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="SFirstName" name="SFirstName"value="<?php if(!empty($_SESSION['$SFirstName'])){echo $_SESSION['$SFirstName']; unset($_SESSION['$SFirstName']);}?>" placeholder="First Name"><?php if(!empty($_SESSION['$SFirstNameErr'])){echo $_SESSION['$SFirstNameErr']; unset($_SESSION['$SFirstNameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SmiddleInitial" class="control-label col-xs-4">Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="SmiddleInitial" name="SmiddleInitial" value="<?php if(!empty($_SESSION['$SmiddleInitial'])){echo $_SESSION['$SmiddleInitial']; unset($_SESSION['$SmiddleInitial']);}?>"placeholder="Middle Initial"><?php if(!empty($_SESSION['$SmiddleInitialErr'])){echo $_SESSION['$SmiddleInitialErr']; unset($_SESSION['$SmiddleInitialErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Saddress" class="control-label col-xs-4">Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Saddress" name="Saddress" value="<?php if(!empty($_SESSION['$Saddress'])){echo $_SESSION['$Saddress']; unset($_SESSION['$Saddress']);}?>"placeholder="Address"><?php if(!empty($_SESSION['$SaddressErr'])){echo $_SESSION['$SaddressErr']; unset($_SESSION['$SaddressErr']);}?>
                                </div>
                            </div>
                    </section>

                    <section id="box7">
                        <hr>
                        <h4>Architect/Civil Engineer</h4>
                        <h6>In-charge of Construction</h6>
                            <div class="form-group">
                                <label for="CPRC" class="control-label col-xs-4">PRC Reg. Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="CPRC" name="CPRC" value="<?php if(!empty($_SESSION['$CPRC'])){echo $_SESSION['$CPRC']; unset($_SESSION['$CPRC']);}?>"placeholder="PRC Registration Number"><?php if(!empty($_SESSION['$CPRCErr'])){echo $_SESSION['$CPRCErr']; unset($_SESSION['$CPRCErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ClastName" class="control-label col-xs-4">Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="ClastName" name="ClastName" value="<?php if(!empty($_SESSION['$ClastName'])){echo $_SESSION['$ClastName']; unset($_SESSION['$ClastName']);}?>"placeholder="Last Name"><?php if(!empty($_SESSION['$ClastNameErr'])){echo $_SESSION['$ClastNameErr']; unset($_SESSION['$ClastNameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CfirstName" class="control-label col-xs-4">First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="CFirstName" name="CFirstName" value="<?php if(!empty($_SESSION['$CFirstName'])){echo $_SESSION['$CFirstName']; unset($_SESSION['$CFirstName']);}?>"placeholder="First Name"><?php if(!empty($_SESSION['$CFirstNameErr'])){echo $_SESSION['$CFirstNameErr']; unset($_SESSION['$CFirstNameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CmiddleInitial" class="control-label col-xs-4">Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="CmiddleInitial" name="CmiddleInitial" value="<?php if(!empty($_SESSION['$CmiddleInitial'])){echo $_SESSION['$CmiddleInitial']; unset($_SESSION['$CmiddleInitial']);}?>"placeholder="Middle Initial"><?php if(!empty($_SESSION['$CmiddleInitialErr'])){echo $_SESSION['$CmiddleInitialErr']; unset($_SESSION['$CmiddleInitialErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Caddress" class="control-label col-xs-4">Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Ccaddress" name="Ccaddress" value="<?php if(!empty($_SESSION['$Ccaddress'])){echo $_SESSION['$Ccaddress']; unset($_SESSION['$Ccaddress']);}?>"placeholder="Address"><?php if(!empty($_SESSION['$CcaddressErr'])){echo $_SESSION['$CcaddressErr']; unset($_SESSION['$CcaddressErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ptrNo" class="control-label col-xs-4">PTR Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="ptrNo" name="ptrNo" value="<?php if(!empty($_SESSION['$ptrNo'])){echo $_SESSION['$ptrNo']; unset($_SESSION['$ptrNo']);}?>"placeholder="PTR Number"><?php if(!empty($_SESSION['$ptrNoErr'])){echo $_SESSION['$ptrNoErr']; unset($_SESSION['$ptrNoErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dateIssued" class="control-label col-xs-4">Date Issued:</label>
                                <div class="col-xs-8">
                                    <input type="date" class="form-control" id="dateIssued" name="dateIssued" value="<?php if(!empty($_SESSION['$dateIssued'])){echo $_SESSION['$dateIssued']; unset($_SESSION['$dateIssued']);}?>"><?php if(!empty($_SESSION['$dateIssuedErr'])){echo $_SESSION['$dateIssuedErr']; unset($_SESSION['$dateIssuedErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="placeIssued" class="control-label col-xs-4">Place Issued:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="placeIssued" name="placeIssued" value="<?php if(!empty($_SESSION['$placeIssued'])){echo $_SESSION['$placeIssued']; unset($_SESSION['$placeIssued']);}?>"placeholder="Place Issued"><?php if(!empty($_SESSION['$placeIssuedErr'])){echo $_SESSION['$placeIssuedErr']; unset($_SESSION['$placeIssuedErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tin" class="control-label col-xs-4">Tin:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="tin" name="tin" value="<?php if(!empty($_SESSION['$tin'])){echo $_SESSION['$tin']; unset($_SESSION['$tin']);}?>"placeholder="Tin"><?php if(!empty($_SESSION['$tinErr'])){echo $_SESSION['$tinErr']; unset($_SESSION['$tinErr']);}?>
                                </div>
                            </div> 
                    </section>
                    
                    <section id="box8">
                        <hr>
                        <h4>Community Tax Certificate</h4>
                        <div class="form-group">
                                <label for="tin" class="control-label col-xs-4">Community Tax Certificate:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="ctc" name="ctc" value="<?php if(!empty($_SESSION['$ctc'])){echo $_SESSION['$ctc']; unset($_SESSION['$ctc']);}?>"placeholder="Community Tax Certificate"><?php if(!empty($_SESSION['$ctcErr'])){echo $_SESSION['$ctcErr']; unset($_SESSION['$ctcErr']);}?>
                                </div>
                        </div> 
                        <div class="form-group">
                                <label for="tin" class="control-label col-xs-4">Date Issued:</label>
                                <div class="col-xs-8">
                                    <input type="date" class="form-control" id="ctcDate" name="ctcDate" value="<?php if(!empty($_SESSION['$ctcDate'])){echo $_SESSION['$ctcDate']; unset($_SESSION['$ctcDate']);}?>"placeholder="Date Issued"><?php if(!empty($_SESSION['$ctcDateErr'])){echo $_SESSION['$ctcDateErr']; unset($_SESSION['$ctcDateErr']);}?>
                                </div>
                        </div> 
                        <div class="form-group">
                                <label for="tin" class="control-label col-xs-4">Place Issued:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="ctcPlace" name="ctcPlace" value="<?php if(!empty($_SESSION['$ctcPlace'])){echo $_SESSION['$ctcPlace']; unset($_SESSION['$ctcPlace']);}?>"placeholder="Place Issued"><?php if(!empty($_SESSION['$ctcPlaceErr'])){echo $_SESSION['$ctcPlaceErr']; unset($_SESSION['$ctcPlaceErr']);}?>
                                </div>
                        </div>   
                    </section>
                    <section id="box9">
                        <hr>
                        <h4>To be Accomplished by Lot Owner</h4>
                            <div class="form-group">
                                <label for="tct" class="control-label col-xs-4">TCT/OCT Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="tct" name="tct" value="<?php if(!empty($_SESSION['$tct'])){echo $_SESSION['$tct']; unset($_SESSION['$tct']);}?>"placeholder="TCT/OCT Number"><?php if(!empty($_SESSION['$tctErr'])){echo $_SESSION['$tctErr']; unset($_SESSION['$tctErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OlastName" class="control-label col-xs-4">Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="OlastName" name="OlastName" value="<?php if(!empty($_SESSION['$OlastName'])){echo $_SESSION['$OlastName']; unset($_SESSION['$OlastName']);}?>"placeholder="Last Name"><?php if(!empty($_SESSION['$OlastNameErr'])){echo $_SESSION['$OlastNameErr']; unset($_SESSION['$OlastNameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OfirstName" class="control-label col-xs-4">First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="OFirstName" name="OFirstName" value="<?php if(!empty($_SESSION['$OFirstName'])){echo $_SESSION['$OFirstName']; unset($_SESSION['$OFirstName']);}?>"placeholder="First Name"><?php if(!empty($_SESSION['$OFirstNameErr'])){echo $_SESSION['$OFirstNameErr']; unset($_SESSION['$OFirstNameErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OmiddleInitial" class="control-label col-xs-4">Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="OmiddleInitial" name="OmiddleInitial" value="<?php if(!empty($_SESSION['$OmiddleInitial'])){echo $_SESSION['$OmiddleInitial']; unset($_SESSION['$OmiddleInitial']);}?>"placeholder="Middle Initial"><?php if(!empty($_SESSION['$OmiddleInitialErr'])){echo $_SESSION['$OmiddleInitialErr']; unset($_SESSION['$OmiddleInitialErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Oaddress" class="control-label col-xs-4">Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Ocaddress" name="Ocaddress" value="<?php if(!empty($_SESSION['$Ocaddress'])){echo $_SESSION['$Ocaddress']; unset($_SESSION['$Ocaddress']);}?>"placeholder="Address"><?php if(!empty($_SESSION['$OcaddressErr'])){echo $_SESSION['$OcaddressErr']; unset($_SESSION['$OcaddressErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Octc" class="control-label col-xs-4">Community Tax Certificate:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Octc" name="Octc" value="<?php if(!empty($_SESSION['$Octc'])){echo $_SESSION['$Octc']; unset($_SESSION['$Octc']);}?>"placeholder="Community tax Certificate"><?php if(!empty($_SESSION['$OctcErr'])){echo $_SESSION['$OctcErr']; unset($_SESSION['$OctcErr']);}?>
                                </div>
                            </div>
                    </section>

                    <section id="trackingAcc">
                        <hr>
                        <h4>Tracking Account Credentials</h4>
                            <div class="form-group">
                                <label for="email" class="control-label col-xs-4">Email Address:</label>
                                <div class="col-xs-8">
                                    <input type="email" class="form-control" id="email" name="email" value="<?php if(!empty($_SESSION['$email'])){echo $_SESSION['$email']; unset($_SESSION['$email']);}?>"placeholder="Email Address"><?php if(!empty($_SESSION['$emailErr'])){echo $_SESSION['$emailErr']; unset($_SESSION['$emailErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pw" class="control-label col-xs-4">Password:</label>
                                <div class="col-xs-8">
                                    <input type="password" class="form-control" id="pw" name="pw" placeholder="Password"><?php if(!empty($_SESSION['$pwErr'])){echo $_SESSION['$pwErr']; unset($_SESSION['$pwErr']);}?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpw" class="control-label col-xs-4">Confirm Password:</label>
                                <div class="col-xs-8">
                                    <input type="password" class="form-control" id="cpw"name="cpw" placeholder="Confirm Password"><?php if(!empty($_SESSION['$cpwErr'])){echo $_SESSION['$cpwErr']; unset($_SESSION['$cpwErr']);}?>
                                </div>
                            </div>
                            <h6>Note: This password will be used for tracking your application request</h6>
                    <!--   </form>--></section>
					<!--   </form>-->
					<div class = "buttons">
						<input type="submit" value="Go"/>
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

<div class="footer">
    <div class = "row">
        <div class = "col-xs-8">
            <div class="contact">
                <p>Contact Us</p>
                <p>(074)-998-7654<br>
                    cbao_baguio@gmail.com<br>
                    http:www.baguio.gov.ph<br>
                </p>
            </div>
        </div>

        <div class = "col-xs-3">
            <div class="contact2">
                <p>&copy; Copyright 2016</p>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
            var div_top = $('#nav-anchor').offset().top;
            if (window_top > div_top) {
                $('nav').addClass('stick');
            } else {
                $('nav').removeClass('stick');
            }
        });

        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $("nav a").click(function (evn) {
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });

        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and 
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $("nav li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i = 0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values

        $(window).scroll(function () {
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();

            for (var i = 0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }

            if (windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav li:last-child a").addClass("nav-active");
                }
            }
        });
		
		/**
		* Select option.
		*/
    });
</script>

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script>
 $(document).ready(function () {
var residential = [
		{display:"SINGLE", value:"single"},
		{display:"DUPLEX", value:"duplex"},
		{display:"ROWHOUSE/ACCESSORIA", value:"rowhouse/accessoria"},
		{display:"OTHERS", value:"others"}];
		
		var commercial = [
		{display:"BANK", value:"bank"},
		{display:"STORE", value:"store"},
		{display:"HOTEL,MOTEL, ETC.", value:"hotel,motel, etc."},
		{display:"OFFICE CONDOMINIUM/BUSINESS OFFICE BUILDING", value:"office condominium/business office building"},
		{display:"RESTAURANT, ETC.", value:"restaurant, etc."},
		{display:"SHOP (E.G. DRESS SHOP, TAILORING SHOP, BARBER SHOP, ETC.", value:"shop"},
		{display:"GASOLINE STATION", value:"gasoline station"},
		{display:"MARKET", value:"market"},
		{display:"DORMITORY OR OTHER LODGING HOUSE", value:"dormitory or other lodging house"},
		{display:"OTHERS", value:"others"}];
				
		var street = [
		{display:"PARKS, PLAZAS, MONUMENTS, POOLS, PLANT BOXES, ETC.", value:"parks, plazas, monuments, pools, plant boxes, etc."},
		{display:"SIDEWALKS, PROMENADES, TARRACES, LAMPPOSTS, ELECTRIC POLES, TELEPHONE POLES, ETC.", value:"duplex"},
		{display:"OUTDOOR ADS, SIGNBOARDS, ETC.", value:"outdoor ads, signboards, etc."},
		{display:"FENCE ENCLOSURE", value:"fence enclosure"}];

		var industrial = [
		{display:"FACTORY/PLANT", value:"factory/plant"},
		{display:"REPAIR SHOP, MACHINE SHOP", value:"repair shop, machine shop"},
		{display:"REFINERY", value:"refinery"},
		{display:"PRINTING PRESS", value:"printing press"},
		{display:"WAREHOUSE", value:"warehouse"},
		{display:"OTHERS", value:"others"}];
		
		var institutional = [
		{display:"SCHOOL", value:"school"},
		{display:"CHURCH AND OTHER RELIGIOUS STRUCTURES", value:"church and other religious structures"},
		{display:"HOSPITAL OR SIMILAR STRUCTURE", value:"hospital or similar structure"},
		{display:"WELFARE AND CHARITABLE STRUCTURES", value:"welfare and charitable structures"},
		{display:"THEATER, AUDITORIUM, GYMNASIUM, COURT", value:"theater, auditorium, gymnasium, court"},
		{display:"OTHERS", value:"others"}];
		
		var agricultural = [
		{display:"BARN(S) POULTRY HOUSE(S), ETC.", value:"barn(s) poultry house(s), etc."},
		{display:"GRAIN MILL", value:"grain mill"},
		{display:"OTHERS", value:"others"}];
		
		
		//If parent option is changed
		$("#parent_typeOfOccupancy").change(function() {
				var parent = $(this).val(); //get option value from parent 
				
				switch(parent){ //using switch compare selected option and populate child
					case 'residential':
						list(residential);
						$("#other_typeOfOccupancy").html("");
						break;
					case 'commercial':
						list(commercial);
						$("#other_typeOfOccupancy").html("");
						break;              
					case 'street furniture, landscaping, signboards':
						list(street);
						$("#other_typeOfOccupancy").html("");
						break;
					
					case 'industrial':
						list(industrial);
						$("#other_typeOfOccupancy").html("");
						break;
					
					case 'institutional':
						list(institutional);
						$("#other_typeOfOccupancy").html("");
						break;              
					
					case 'agricultural':
						list(agricultural);
						$("#other_typeOfOccupancy").html("");
						break;
						
					case 'others':
						createTextField();
						$("#other_typeOfOccupancy").html("");
						break;
				   }
		});
		
		$("#child_typeOfOccupancy").on("change", "#select_typeOfOccupancy", function(){
			var child = $(this).val();
			
			switch(child){
				case "others":
					$("#other_typeOfOccupancy").append("<input type=\"text\" id=\"specific2\"/>");
					break;
					
				default:
					$("#other_typeOfOccupancy").html("");
					break;
			}
		});

		//function to populate child select box
		function list(array_list)
		{
			$("#child_typeOfOccupancy").html(""); //reset child options
			$("#child_typeOfOccupancy").append("<select id=\"select_typeOfOccupancy\">");
			$("#select_typeOfOccupancy").append("<option disabled selected>SELECT SPECIFIC TYPE OF OCCUPANCY</option>");
			$(array_list).each(function (i) { //populate child options 
				$("#select_typeOfOccupancy").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
			});
			$("#child_typeOfOccupancy").append("</select>");
		}
		
		function createTextField(){
			$("#child_typeOfOccupancy").html(""); 
			$("#child_typeOfOccupancy").append("<input type=\"text\" id=\"specific1\">");
		}
		
		})(jQuery);
</script>
 
</body>

</html>
