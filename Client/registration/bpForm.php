<?php
$conn = mysqli_connect('localhost', 'root', '', 'baguio_cbao');
$db = mysqli_select_db($conn, 'baguio_cbao');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
$message1 = "";
$message2 = "";
$message3 = "";
$message4 = "";
$message5 = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$lnameErr = "";
$fnameErr = "";
$mnameErr = "";
$formOfOwnershipErr = "";
$TaxAccNoErr = "";
$entNameErr = "";
$kindOfBusinessErr = "";
$AddressErr = "";
$contactNumberErr = "";
$locationErr = "";
$tec1Err = "";
$tec2Err = "";
$tec3Err = "";
$tec4Err = "";
$tec5Err = "";
$storeyErr = "";
$floorAreaErr = "";
$constructionDateErr = "";
$o4Err = "";
$SPRCErr = "";
$SlastNameErr = "";
$SmiddleInitialErr = "";
$SFirstNameErr = "";
$SaddressErr = "";
$CPRCErr = "";
$ClastNameErr = "";
$CFirstNameErr = "";
$CmiddleInitialErr = "";
$CcaddressErr = "";
$ptrNoErr = "";
$dateIssuedErr = "";
$placeIssuedErr = "";
$tinErr = "";
$ctcErr = "";
$ctcDateErr = "";
$ctcPlaceErr = "";
$tctErr = "";
$OlastNameErr = "";
$OFirstNameErr = "";
$OmiddleInitialErr = "";
$OcaddressErr = "";
$OctcErr = "";
$emailErr = "";
$pwErr = "";
$cpwErr = "";

if (isset($_POST['save'])) {

    $lName = "";
    if (empty($_POST["lastName"])) {
        $lnameErr = "*Last Name is required";
    } else {
        $lName = test_input($_POST["lastName"]);
    }

    $fName = "";
    if (empty($_POST["firstName"])) {
        $fnameErr = "*First Name is required";
    } else {
        $fName = test_input($_POST["firstName"]);
    }

    $mName = "";
    if (empty($_POST["middleInitial"])) {
        $mnameErr = "*Middle Initial is required";
    } else {
        $mName = test_input($_POST["middleInitial"]);
    }

    $TaxAccNo = "";
    if (empty($_POST["TaxAccNo"])) {
        $TaxAccNoErr = "*Tax Account Number is required";
    } else {
        $TaxAccNo = test_input($_POST["TaxAccNo"]);
    }

    $formOfOwnership = "";
    if (empty($_POST["formOfOwnership"])) {
        $formOfOwnershipErr = "*Form of Ownership is required";
    } else {
        $formOfOwnership = test_input($_POST["formOfOwnership"]);
    }

    $entName = "";
    if (empty($_POST["enterpriseName"])) {
        $entNameErr = "*Enterprise Name is required";
    } else {
        $entName = test_input($_POST["enterpriseName"]);
    }

    $contactNumber = "";
    if (empty($_POST["contactNumber"])) {
        $contactNumberErr = "*Contact Number is required";
    } else {
        $contactNumber = test_input($_POST["contactNumber"]);
    }

    $kindOfBusiness = "";
    if (empty($_POST["kindOfBusiness"])) {
        $kindOfBusinessErr = "*Kind of Business is required";
    } else {
        $kindOfBusiness = test_input($_POST["kindOfBusiness"]);
    }

    $Address = "";
    if (empty($_POST["Address"])) {
        $AddressErr = "*Address is required";
    } else {
        $Address = test_input($_POST["Address"]);
    }

    $location = "";
    if (empty($_POST["location"])) {
        $locationErr = "*Location is required";
    } else {
        $location = test_input($_POST["location"]);
    }

    $tec1 = "";
    if (empty($_POST["tec1"])) {
        $tec1Err = "*Cost is required";
    } else {
        $tec1 = test_input($_POST["tec1"]);
    }

    $tec2 = "asd";
    if (empty($_POST["tec2"])) {
        $tec2Err = "*Cost is required";
    } else {
        $tec2 = test_input($_POST["tec2"]);
    }

    $tec3 = "";
    if (empty($_POST["tec3"])) {
        $tec3Err = "*Cost is required";
    } else {
        $tec3 = test_input($_POST["tec3"]);
    }

    $tec4 = "";
    if (empty($_POST["tec4"])) {
        $tec4Err = "*Cost is required";
    } else {
        $tec4 = test_input($_POST["tec4"]);
    }

    $tec5 = "";
    if (empty($_POST["tec5"])) {
        $tec5Err = "*Cost is required";
    } else {
        $tec5 = test_input($_POST["tec5"]);
    }

    $tec6 = "";
    $tec6 = $tec1 + $tec2 + $tec3 + $tec4 + $tec5;

    $storey = "";
    if (empty($_POST["storey"])) {
        $storeyErr = "*Number of Storeys is required";
    } else {
        $storey = test_input($_POST["storey"]);
    }

    $floorArea = "";
    if (empty($_POST["floorArea"])) {
        $floorAreaErr = "*Floor Area is required";
    } else {
        $floorArea = test_input($_POST["floorArea"]);
    }

    $constructionDate = "";
    if (empty($_POST["constructionDate"])) {
        $constructionDateErr = "*Proposed Date of Conctruction is required";
    } else {
        $constructionDate = test_input($_POST["constructionDate"]);
    }

    $o4 = test_input($_POST["o4"]);

    $SPRC = "";
    if (empty($_POST["SPRC"])) {
        $SPRCErr = "*PRC Reg. Number is required";
    } else {
        $SPRC = test_input($_POST["SPRC"]);
    }

    $SlastName = "";
    if (empty($_POST["SlastName"])) {
        $SlastNameErr = "*Last Name is required";
    } else {
        $SlastName = test_input($_POST["SlastName"]);
    }

    $SmiddleInitial = "";
    if (empty($_POST["SmiddleInitial"])) {
        $SmiddleInitialErr = "*Middle Initial is required";
    } else {
        $SmiddleInitial = test_input($_POST["SmiddleInitial"]);
    }

    $SFirstName = "";
    if (empty($_POST["SFirstName"])) {
        $SFirstNameErr = "*First Name is required";
    } else {
        $SFirstName = test_input($_POST["SFirstName"]);
    }

    $Saddress = "";
    if (empty($_POST["Saddress"])) {
        $SaddressErr = "*Address is required";
    } else {
        $Saddress = test_input($_POST["Saddress"]);
    }

    $CPRC = "";
    if (empty($_POST["CPRC"])) {
        $CPRCErr = "*PRC Reg. Number is required";
    } else {
        $CPRC = test_input($_POST["CPRC"]);
    }

    $ClastName = "";
    if (empty($_POST["ClastName"])) {
        $ClastNameErr = "*Last Name is required";
    } else {
        $ClastName = test_input($_POST["ClastName"]);
    }

    $CFirstName = "";
    if (empty($_POST["CFirstName"])) {
        $CFirstNameErr = "*First Name is required";
    } else {
        $CFirstName = test_input($_POST["CFirstName"]);
    }

    $CmiddleInitial = "";
    if (empty($_POST["CmiddleInitial"])) {
        $CmiddleInitialErr = "*MIddle Initial is required";
    } else {
        $CmiddleInitial = test_input($_POST["CmiddleInitial"]);
    }

    $Ccaddress = "";
    if (empty($_POST["Ccaddress"])) {
        $CcaddressErr = "*Address is required";
    } else {
        $Ccaddress = test_input($_POST["Ccaddress"]);
    }

    $ptrNo = "";
    if (empty($_POST["ptrNo"])) {
        $ptrNoErr = "*PTR Number is required";
    } else {
        $ptrNo = test_input($_POST["ptrNo"]);
    }

    $dateIssued = "";
    if (empty($_POST["dateIssued"])) {
        $dateIssuedErr = "*Date Issued is required";
    } else {
        $dateIssued = test_input($_POST["dateIssued"]);
    }

    $placeIssued = "";
    if (empty($_POST["placeIssued"])) {
        $placeIssuedErr = "*Place Issued is required";
    } else {
        $placeIssued = test_input($_POST["placeIssued"]);
    }


    $tin = "";
    if (empty($_POST["tin"])) {
        $tinErr = "*Place Issued is required";
    } else {
        $tin = test_input($_POST["tin"]);
    }

    $ctc = "";
    if (empty($_POST["ctc"])) {
        $ctcErr = "*Community Tax Certificate is required";
    } else {
        $ctc = test_input($_POST["ctc"]);
    }

    $ctcDate = "";
    if (empty($_POST["ctcDate"])) {
        $ctcDateErr = "*Date Issued is required";
    } else {
        $ctcDate = test_input($_POST["ctcDate"]);
    }

    $ctcPlace = "";
    if (empty($_POST["ctcPlace"])) {
        $ctcPlaceErr = "*Place Issued is required";
    } else {
        $ctcPlace = test_input($_POST["ctcPlace"]);
    }

    $tct = "";
    if (empty($_POST["tct"])) {
        $tctErr = "*TCT/OCT Number is required";
    } else {
        $tct = test_input($_POST["tct"]);
    }

    $OlastName = "";
    if (empty($_POST["OlastName"])) {
        $OlastNameErr = "*Last Name is required";
    } else {
        $OlastName = test_input($_POST["OlastName"]);
    }

    $OFirstName = "";
    if (empty($_POST["OFirstName"])) {
        $OFirstNameErr = "*First Name is required";
    } else {
        $OFirstName = test_input($_POST["OFirstName"]);
    }

    $OmiddleInitial = "";
    if (empty($_POST["OmiddleInitial"])) {
        $OmiddleInitialErr = "*Middle Initial is required";
    } else {
        $OmiddleInitial = test_input($_POST["OmiddleInitial"]);
    }

    $Ocaddress = "";
    if (empty($_POST["Ocaddress"])) {
        $OcaddressErr = "*Address is required";
    } else {
        $Ocaddress = test_input($_POST["Ocaddress"]);
    }

    $Octc = "";
    if (empty($_POST["Octc"])) {
        $OctcErr = "*Community Tax Certificate is required";
    } else {
        $Octc = test_input($_POST["Octc"]);
    }

    $email = "";
    if (empty($_POST["email"])) {
        $emailErr = "*Email Address is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    $pw = "";
    if (empty($_POST["pw"])) {
        $pwErr = "*Password is required";
    } else {
        $pw = test_input($_POST["pw"]);
    }

    $cpw = "";
    if (empty($_POST["cpw"])) {
        $cpwErr = "*Password is required";
    } else {
        $cpw = test_input($_POST["cpw"]);
    }

    if ($pw != $cpw) {
        $pwErr = "*Passwords do not match";
        $cpwErr = "*Passwords do not match";
    } else {
        
    }

    if (empty($_POST["lastName"]) || empty($_POST["firstName"]) || empty($_POST["middleInitial"]) || empty($_POST["TaxAccNo"]) || empty($_POST["formOfOwnership"]) || empty($_POST["enterpriseName"]) || empty($_POST["contactNumber"]) || empty($_POST["kindOfBusiness"]) || empty($_POST["Address"]) || empty($_POST["location"]) || empty($_POST["tec1"]) || empty($_POST["tec2"]) || empty($_POST["tec3"]) || empty($_POST["tec4"]) || empty($_POST["tec5"]) || empty($_POST["storey"]) || empty($_POST["floorArea"]) || empty($_POST["constructionDate"]) || empty($_POST["SPRC"]) || empty($_POST["SlastName"]) || empty($_POST["SmiddleInitial"]) || empty($_POST["SFirstName"]) || empty($_POST["Saddress"]) || empty($_POST["CPRC"]) || empty($_POST["ClastName"]) || empty($_POST["CFirstName"]) || empty($_POST["CmiddleInitial"]) || empty($_POST["Ccaddress"]) || empty($_POST["ptrNo"]) || empty($_POST["dateIssued"]) || empty($_POST["placeIssued"]) || empty($_POST["tin"]) || empty($_POST["ctc"]) || empty($_POST["ctcDate"]) || empty($_POST["ctcPlace"]) || empty($_POST["tct"]) || empty($_POST["OlastName"]) || empty($_POST["OFirstName"]) || empty($_POST["OmiddleInitial"]) || empty($_POST["Ocaddress"]) || empty($_POST["Octc"]) || empty($_POST["email"]) || ($pw != $cpw)) {
        $message = "asdadas";
    } else {
        $sql = "INSERT INTO general_info (last_name,first_name,middle_initial,tax_no,address,enterprise_name,ownership_form,business,contact_number) VALUES ('$lName','$fName','$mName','$TaxAccNo','$Address','$entName','$formOfOwnership','$kindOfBusiness','$contactNumber')";

        if ($conn->query($sql) === TRUE) {
            $message = "New record created successfully";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }

        $sql1 = "INSERT INTO costs (building,electrical,mechanical,plumbing,others,total_cost,number_of_storeys,floor_area,proposed_construction_date,construction_materials) VALUES ('$tec1','$tec2','$tec3','$tec4','$tec5','$tec6','$storey','$floorArea','$constructionDate','$o4')";
        $sql2 = "INSERT INTO in_charge_of_construction (prc_registration_number,engineer_last_name,engineer_first_name,engineer_middle_initial,engineer_address,ptr_number,date_issued,place_issued,tin) VALUES ('$CPRC','$ClastName','$CFirstName','$CmiddleInitial','$Ccaddress','$ptrNo','$dateIssued','$placeIssued','$tin')";
        $sql3 = "INSERT INTO lot_owner (tct_oct_number,owner_last_name,owner_first_name,owner_middle_initial,owner_address,community_tax_certificate) VALUES ('$tct','$OlastName','$OFirstName','$OmiddleInitial','$Ocaddress','$Octc')";
        $sql4 = "INSERT INTO plans_and_specifications (prc_registration_number,engineer_last_name,engineer_first_name,engineer_middle_initial,engineer_address) VALUES ('$SPRC','$SlastName','$SFirstName','$SmiddleInitial','$Saddress')";
        $sql5 = "INSERT INTO tracking_accounts (email_address,password) VALUES ('$email','$pw')";



        if ($conn->query($sql1) === TRUE) {
            $message1 = "sql1";
        } else {
            $message1 = "Error1: " . $sql1 . "<br>" . $conn->error;
        }

        if ($conn->query($sql2) === TRUE) {
            $message2 = "sql2";
        } else {
            $message2 = "Error2: " . $sql . "<br>" . $conn->error;
        }

        if ($conn->query($sql3) === TRUE) {
            $message3 = "sql3";
        } else {
            $message3 = "Error3: " . $sql . "<br>" . $conn->error;
        }
        if ($conn->query($sql4) === TRUE) {
            $message4 = "sql4";
        } else {
            $message4 = "Error4: " . $sql . "<br>" . $conn->error;
        }
        if ($conn->query($sql5) === TRUE) {
            $message5 = "sql5";
        } else {
            $message5 = "Error5: " . $sql . "<br>" . $conn->error;
        }
    }



    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../Client/common/head.php'; ?>

        <link rel="stylesheet" href="../../Client/css/bpForm.css">
        <link rel="stylesheet" href="../../Client/btstrp/css/bootstrap.css">
    </head>
      
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
                    <p><a href="index.html" class="btn2">Cancel Application</a></p>
                </div>
            </div>

            <div class = "col-md-9">
                <div class = "scroll">
                    <section id="box1">
                        <h4>General Information</h4>
                        <form class="form-horizontal"action="bpForm.php" method="post">
                            <div class="form-group">
                                <label for="lastName" class="control-label col-xs-4">* Last Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?= (isset($lName) ? $lName : "") ?>" placeholder="Last Name"><?php echo $lnameErr; ?> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="control-label col-xs-4">* First Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?= (isset($fName) ? $fName : "") ?>" placeholder="First Name"><?php echo $fnameErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middleInitial" class="control-label col-xs-4">* Middle Initial:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="middleInitial" name="middleInitial"  value="<?= (isset($mName) ? $mName : "") ?>"placeholder="Middle Initial"><?php echo $mnameErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="TaxAccNo" class="control-label col-xs-4">TIN:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="TaxAccNo" name="TaxAccNo" value="<?= (isset($TaxAccNo) ? $TaxAccNo : "") ?>" placeholder="Tax Account Number"><?php echo $TaxAccNoErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="enterpriseName" class="control-label col-xs-4">Enterprise Name:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="enterpriseName" name="enterpriseName" value="<?= (isset($entName) ? $entName : "") ?>"placeholder="Enterprise Name"><?php echo $entNameErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formOfOwnership" class="control-label col-xs-4">* Form of Ownership:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="formOfOwnership" name="formOfOwnership" value="<?= (isset($formOfOwnership) ? $formOfOwnership : "") ?>"placeholder="Form of Ownership"><?php echo $formOfOwnershipErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kindOfBusiness" class="control-label col-xs-4">Kind of Business:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="kindOfBusiness" name="kindOfBusiness"value="<?= (isset($kindOfBusiness) ? $kindOfBusiness : "") ?>" placeholder="Kind of Business"><?php echo $kindOfBusinessErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Address" class="control-label col-xs-4">Address:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="Address" name="Address" value="<?= (isset($Address) ? $Address : "") ?>" placeholder="Address"><?php echo $AddressErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contactNumber" class="control-label col-xs-4">Contact Number:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control"  id="contactNumber" name="contactNumber" value="<?= (isset($contactNumber) ? $contactNumber : "") ?>" placeholder="Contact Number"><?php echo $contactNumberErr; ?>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label for="location" class="control-label col-xs-4">Location of Construction:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control"  id="location" name="location" value="<?= (isset($location) ? $location : "") ?>" placeholder="Location of Construction"><?php echo $locationErr; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="scope" class="control-label col-xs-4">Scope of work</label>
                            </div>
                            <div class="form-group">
                                <label for="newConstruction" class="control-label col-xs-4">New construction:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="newConstruction" name="newConstruction"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="additionOf" class="control-label col-xs-4">Addition of:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="additionOf" name="additionOf"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="repairOf" class="control-label col-xs-4">Repair of:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="repairOf" name="repairOf"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="renovationOf" class="control-label col-xs-4">Renovation of:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="renovationOf" name="renovationOf"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="demolitionOf" class="control-label col-xs-4">Demolition of:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="demolitionOf" name="demolitionOf"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="repairOf" class="control-label col-xs-4">Others</label>
                            </div>
                            <div class="form-group">
                                <span class="col-xs-4"></span>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" id="others1" name="others1"/>
                                </div>
                                <div class="col-xs-1">
                                    <label>of</label>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" id="others2" name="others2"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-xs-4"></span>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" id="others3" name="others3"/>
                                </div>
                                <div class="col-xs-1">
                                    <label>of</label>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" id="others4" name="others4"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="numberOfUnits" class="control-label col-xs-4">Number of units:</label>
                                <div class="col-xs-8">
                                    <input type="number" class="form-control" id="numberOfUnits" name="numberOfUnits"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="typeOfOccupancy" class="control-label col-xs-4">Type of Occupancy</label>
                            </div>
                            <div class="form-group">
                                <span class="col-xs-4"></span>
                                <div class="col-xs-8">
                                    <select id="parent_typeOfOccupancy"  name="parent_typeOfOccupancy">
                                        <option value="residential">RESIDENTIAL</option>
                                        <option value="commercial">COMMERCIAL</option>
                                        <option value="other construction">STEEL</option>
                                        <option value="street furniture, landscaping, signboards">STREET FURNITURE, LANDSCAPING, SIGNBOARDS</option>
                                        <option value="industrial">INDUSTRIAL</option>
                                        <option value="institutional">INSTITUTIONAL</option>
                                        <option value="agricultural">AGRICULTURAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-xs-4"></span>
                                <div class="col-xs-8">
                                    <select id="child_typeOfOccupancy"  name="child_typeOfOccupancy">
                                    </select>
                                </div>
                            </div>
                    </section>
                    <hr>
                    <section id="box3A">
                        <h4>Total Estimated Cost</h4>
                        <label>Building</label>
                        <div class="form-group">
                            <label for="tec1" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1.00" min="0.00"  id="tec1" name="tec1"  value="<?= (isset($tec1) ? $tec1 : "") ?>" placeholder="0.00"><?php echo $tec1Err; ?>
                            </div>
                        </div>
                        <label>Electrical</label>
                        <div class="form-group">
                            <label for="tec2" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1.00" min="0.00" id="tec2" name="tec2" value="<?= (isset($tec2) ? $tec2 : "") ?>" placeholder="0.00"><?php echo $tec2Err; ?>
                            </div>
                        </div>
                        <label>Mechanical</label>
                        <div class="form-group">
                            <label for="tec3" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1.00" min="0.00" id="tec3" name="tec3" value="<?= (isset($tec3) ? $tec3 : "") ?>" placeholder="0.00"><?php echo $tec3Err; ?>
                            </div>
                        </div>
                        <label>Plumbing</label>
                        <div class="form-group">
                            <label for="tec4" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1.00" min="0.00" id="tec4"  name="tec4" value="<?= (isset($tec4) ? $tec4 : "") ?>" placeholder="0.00"><?php echo $tec4Err; ?>
                            </div>
                        </div>
                        <label>Others</label>
                        <div class="form-group">
                            <label for="tec5" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1.00" min="0.00" id="tec5"  name="tec5" value="<?= (isset($tec5) ? $tec5 : "") ?>" placeholder="0.00"><?php echo $tec5Err; ?>
                            </div>
                        </div>
                        <label>Total Cost</label>
                        <div class="form-group">
                            <label for="tec6" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1.00" min="0.00" id="tec6"   name="tec6"  placeholder="0.00">
                            </div>
                        </div

                        <!-- Cost of Equipment Installed -->
                        <hr>
                        <h4>Cost of Equipment Installed</h4>
                        <div class="form-group">
                            <label for="cei1" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="0.01" min="0.00" id="cei1"  placeholder="0.00">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cei1" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="0.01" min="0.00" id="cei1" placeholder="0.00">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cei1" class="control-label col-xs-4">&#8369</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="0.01" min="0.00" id="cei1" placeholder="0.00">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="storey" class="control-label col-xs-4">Number of Storeys:</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1" min="1"  id="storey" name="storey" value="<?= (isset($storey) ? $storey : "") ?>"placeholder="0"><?php echo $storeyErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="floorArea" class="control-label col-xs-4">Total Floor Area:</label>
                            <div class="col-xs-8">
                                <input type="number" class="form-control" step="1" min="1" id="floorArea" name="floorArea" value="<?= (isset($floorArea) ? $floorArea : "") ?>"placeholder="0"><?php echo $floorAreaErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="constructionDate" class="control-label col-xs-4">Proposed Date of Conctruction:</label>
                            <div class="col-xs-8">
                                <input type="date" class="form-control" id="constructionDate" name="constructionDate" value="<?= (isset($constructionDate) ? $constructionDate : "") ?>" ><?php echo $constructionDateErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="constructionDate" class="control-label col-xs-4">Materials of Conctruction:</label>
                            <div class="col-xs-8">
                                <select id="o4"  name="o4">
                                    <option value="wood">WOOD</option>
                                    <option value="concrete">CONCRETE</option>
                                    <option value="steel">STEEL</option>
                                    <option value="mixed">MIXED</option>
                                </select>
                            </div>
                        </div>

                    </section>
                    <section id="box6">
                        <hr>
                        <h4>Architect/Civil Engineer</h4>
                        <h6>Signed and Sealed Plans and Specifications</h6>
                        <div class="form-group">
                            <label for="SPRC" class="control-label col-xs-4">PRC Reg. Number:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="SPRC" name="SPRC" value="<?= (isset($SPRC) ? $SPRC : "") ?>" placeholder="PRC Registration Number"><?php echo $SPRCErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SlastName" class="control-label col-xs-4">Last Name:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="SlastName" name="SlastName" value="<?= (isset($SlastName) ? $SlastName : "") ?>"placeholder="Last Name"><?php echo $SlastNameErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SfirstName" class="control-label col-xs-4">First Name:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="SFirstName" name="SFirstName"value="<?= (isset($SFirstName) ? $SFirstName : "") ?>" placeholder="First Name"><?php echo $SFirstNameErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SmiddleInitial" class="control-label col-xs-4">Middle Initial:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="SmiddleInitial" name="SmiddleInitial" value="<?= (isset($SmiddleInitial) ? $SmiddleInitial : "") ?>"placeholder="Middle Initial"><?php echo $SmiddleInitialErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Saddress" class="control-label col-xs-4">Address:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="Saddress" name="Saddress" value="<?= (isset($Saddress) ? $Saddress : "") ?>"placeholder="Address"><?php echo $SaddressErr; ?>
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
                                <input type="text" class="form-control" id="CPRC" name="CPRC" value="<?= (isset($CPRC) ? $CPRC : "") ?>"placeholder="PRC Registration Number"><?php echo $CPRCErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ClastName" class="control-label col-xs-4">Last Name:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="ClastName" name="ClastName" value="<?= (isset($ClastName) ? $ClastName : "") ?>"placeholder="Last Name"><?php echo $ClastNameErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CfirstName" class="control-label col-xs-4">First Name:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="CFirstName" name="CFirstName" value="<?= (isset($CFirstName) ? $CFirstName : "") ?>"placeholder="First Name"><?php echo $CFirstNameErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CmiddleInitial" class="control-label col-xs-4">Middle Initial:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="CmiddleInitial" name="CmiddleInitial" value="<?= (isset($CmiddleInitial) ? $CmiddleInitial : "") ?>"placeholder="Middle Initial"><?php echo $CmiddleInitialErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Caddress" class="control-label col-xs-4">Address:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="Ccaddress" name="Ccaddress" value="<?= (isset($Ccaddress) ? $Ccaddress : "") ?>"placeholder="Address"><?php echo $CcaddressErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ptrNo" class="control-label col-xs-4">PTR Number:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="ptrNo" name="ptrNo" value="<?= (isset($ptrNo) ? $ptrNo : "") ?>"placeholder="PTR Number"><?php echo $ptrNoErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateIssued" class="control-label col-xs-4">Date Issued:</label>
                            <div class="col-xs-8">
                                <input type="date" class="form-control" id="dateIssued" name="dateIssued" value="<?= (isset($dateIssued) ? $dateIssued : "") ?>"><?php echo $dateIssuedErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="placeIssued" class="control-label col-xs-4">Place Issued:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="placeIssued" name="placeIssued" value="<?= (isset($placeIssued) ? $placeIssued : "") ?>"placeholder="Place Issued"><?php echo $placeIssuedErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tin" class="control-label col-xs-4">Tin:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="tin" name="tin" value="<?= (isset($tin) ? $tin : "") ?>"placeholder="Tin"><?php echo $tinErr; ?>
                            </div>
                        </div> 
                    </section>

                    <section id="box8">
                        <hr>
                        <h4>Community Tax Certificate</h4>
                        <div class="form-group">
                            <label for="tin" class="control-label col-xs-4">Community Tax Certificate:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="ctc" name="ctc" value="<?= (isset($ctc) ? $ctc : "") ?>"placeholder="Community Tax Certificate"><?php echo $ctcErr; ?>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="tin" class="control-label col-xs-4">Date Issued:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="ctcDate" name="ctcDate" value="<?= (isset($ctcDate) ? $ctcDate : "") ?>"placeholder="Date Issued"><?php echo $ctcDateErr; ?>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="tin" class="control-label col-xs-4">Place Issued:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="ctcPlace" name="ctcPlace" value="<?= (isset($ctcPlace) ? $ctcPlace : "") ?>"placeholder="Place Issued"><?php echo $ctcPlaceErr; ?>
                            </div>
                        </div>   
                    </section>
                    <section id="box9">
                        <hr>
                        <h4>To be Accomplished by Lot Owner</h4>
                        <div class="form-group">
                            <label for="tct" class="control-label col-xs-4">TCT/OCT Number:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="tct" name="tct" value="<?= (isset($tct) ? $tct : "") ?>"placeholder="TCT/OCT Number"><?php echo $tctErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="OlastName" class="control-label col-xs-4">Last Name:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="OlastName" name="OlastName" value="<?= (isset($OlastName) ? $OlastName : "") ?>"placeholder="Last Name"><?php echo $OlastNameErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="OfirstName" class="control-label col-xs-4">First Name:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="OFirstName" name="OFirstName" value="<?= (isset($OFirstName) ? $OFirstName : "") ?>"placeholder="First Name"><?php echo $OFirstNameErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="OmiddleInitial" class="control-label col-xs-4">Middle Initial:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="OmiddleInitial" name="OmiddleInitial" value="<?= (isset($OmiddleInitial) ? $OmiddleInitial : "") ?>"placeholder="Middle Initial"><?php echo $OmiddleInitialErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Oaddress" class="control-label col-xs-4">Address:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="Ocaddress" name="Ocaddress" value="<?= (isset($Ocaddress) ? $Ocaddress : "") ?>"placeholder="Address"><?php echo $OcaddressErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Octc" class="control-label col-xs-4">Community Tax Certificate:</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" id="Octc" name="Octc" value="<?= (isset($Octc) ? $Octc : "") ?>"placeholder="Community tax Certificate"><?php echo $OctcErr; ?>
                            </div>
                        </div>
                    </section>

                    <section id="trackingAcc">
                        <hr>
                        <h4>Tracking Account Credentials</h4>
                        <div class="form-group">
                            <label for="email" class="control-label col-xs-4">Email Address:</label>
                            <div class="col-xs-8">
                                <input type="email" class="form-control" id="email" name="email" value="<?= (isset($email) ? $email : "") ?>"placeholder="Email Address"><?php echo $emailErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pw" class="control-label col-xs-4">Password:</label>
                            <div class="col-xs-8">
                                <input type="password" class="form-control" id="pw" name="pw" placeholder="Password"><?php echo $pwErr; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpw" class="control-label col-xs-4">Confirm Password:</label>
                            <div class="col-xs-8">
                                <input type="password" class="form-control" id="cpw"name="cpw" placeholder="Confirm Password"><?php echo $cpwErr; ?>
                            </div>
                        </div>
                        <h6>Note: This password will be used for tracking your application request</h6>
                    </section>

                    <div class = "buttons"> 
                        <button id = "regSub" type="submit" name = "save"  value="save">Submit</button>                  
                    </div>
                </div>                                      
            </div>
        </div>

<?php include '../../Client/common/footer.php'; ?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
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

        var residential = [
            {display: "SINGLE", value: "single"},
            {display: "DUPLEX", value: "duplex"},
            {display: "ROWHOUSE/ACCESSORIA", value: "rowhouse/accessoria"}];

        var commercial = [
            {display: "BANK", value: "bank"},
            {display: "STORE", value: "store"},
            {display: "HOTEL,MOTEL, ETC.", value: "hotel,motel, etc."},
            {display: "OFFICE CONDOMINIUM/BUSINESS OFFICE BUILDING", value: "office condominium/business office building"},
            {display: "RESTAURANT, ETC.", value: "restaurant, etc."},
            {display: "SHOP (E.G. DRESS SHOP, TAILORING SHOP, BARBER SHOP, ETC.", value: "shop"},
            {display: "GASOLINE STATION", value: "gasoline station"},
            {display: "MARKET", value: "market"},
            {display: "DORMITORY OR OTHER LODGING HOUSE", value: "dormitory or other lodging house"}];

        var street = [
            {display: "PARKS, PLAZAS, MONUMENTS, POOLS, PLANT BOXES, ETC.", value: "parks, plazas, monuments, pools, plant boxes, etc."},
            {display: "SIDEWALKS, PROMENADES, TARRACES, LAMPPOSTS, ELECTRIC POLES, TELEPHONE POLES, ETC.", value: "duplex"},
            {display: "OUTDOOR ADS, SIGNBOARDS, ETC.", value: "outdoor ads, signboards, etc."},
            {display: "FENCE ENCLOSURE", value: "fence enclosure"}];

        var industrial = [
            {display: "FACTORY/PLANT", value: "factory/plant"},
            {display: "REPAIR SHOP, MACHINE SHOP", value: "repair shop, machine shop"},
            {display: "REFINERY", value: "refinery"},
            {display: "PRINTING PRESS", value: "printing press"},
            {display: "WAREHOUSE", value: "warehouse"}];

        var institutional = [
            {display: "SCHOOL", value: "school"},
            {display: "CHURCH AND OTHER RELIGIOUS STRUCTURES", value: "church and other religious structures"},
            {display: "HOSPITAL OR SIMILAR STRUCTURE", value: "hospital or similar structure"},
            {display: "WELFARE AND CHARITABLE STRUCTURES", value: "welfare and charitable structures"},
            {display: "THEATER, AUDITORIUM, GYMNASIUM, COURT", value: "theater, auditorium, gymnasium, court"}];

        var agricultural = [
            {display: "BARN(S) POULTRY HOUSE(S), ETC.", value: "barn(s) poultry house(s), etc."},
            {display: "GRAIN MILL", value: "grain mill"}];
        //If parent option is changed
        $("#parent_typeOfOccupancy").change(function () {
            var parent = $(this).val(); //get option value from parent 

            switch (parent) { //using switch compare selected option and populate child
                case 'residential':
                    list(residential);
                    break;
                case 'commercial':
                    list(commercial);
                    break;
                case 'street':
                    list(street);
                    break;

                case 'industrial':
                    list(industrial);
                    break;
                case 'institutional':
                    list(institutional);
                    break;
                case 'agricultural':
                    list(agricultural);
                    break;
            }
        });

        //function to populate child select box
        function list(array_list)
        {
            $("#child_typeOfOccupancy").html(""); //reset child options
            $(array_list).each(function (i) { //populate child options 
                $("#child_typeOfOccupancy").append("<option value=\"" + array_list[i].value + "\">" + array_list[i].display + "</option>");
            });
        }
    });
</script>



</html>