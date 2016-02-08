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

        <!-- Body -->
		<link rel="stylesheet" href="css/main2.css">
		<link rel="stylesheet" href="css/main3.css">
        <!--<link rel="stylesheet" href="css/printForm.css">-->
        <!--<link rel="stylesheet" href="btstrp/css/bootstrap.css">-->
        
        <script type="text/javascript" language="javascript" src="jquery.js"></script>
        <script type="text/javascript" language="javascript" src="html2canvas.min.js"></script>
        <script type="text/javascript" language="javascript" src="jquery.plugin.html2canvas.js"></script>
        <script type="text/javascript" language="javascript" src="script.js"></script>

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

        <div class="container">

            <div class="content">
                <div class="main">

                    <h1 id = "heading">Print Form</h1>
                    <p>Print or Download the form to be submitted together with your permit requirements</p>

                        <div id="target">
                            <div id="header" class="fnt-tmplt">
                                <p id="fhead">
                                    REPUBLIC OF THE PHILIPPINES<br>
                                    OFFICE OF THE CITY/MUNICIPAL MAYOR<br>
                                    <br><br>
                                    <u>BAGUIO CITY</u>
                                    <br>
                                    CITY/MUNICIPALITY
                                </p>
                            </div>

                            <div id="bp-info">
                                <div id="app-no">
                                    <p class="box-title">APPLICATION NUMBER</p>
                                    <table id="app-table" style="border-collapse: collapse;">
                                        <tr id="app-row" class="no-tplt">
                                            <td id="a1"></td>
                                            <td id="a2"></td>
                                            <td id="a3"></td>
                                            <td id="a4"></td>
                                            <td id="a5"></td>
                                            <td id="a6"></td>
                                            <td id="a7"></td>
                                            <td id="a8"></td>
                                            <td id="a9"></td>
                                            <td id="a10"></td>
                                        </tr>
                                    </table>
                                </div>

                                <div id="bp" class="fnt-tmplt">
                                    <p id="bp-name">BUILDING PERMIT</p>
                                </div>

                                <div id="p-no">
                                    <p class="box-title">PERMIT NUMBER</p>
                                    <table id="p-no-table"style="border-collapse: collapse;">
                                        <tr id="pNo-row" class="no-tplt">
                                            <td id="p1"></td>
                                            <td id="p2"></td>
                                            <td id="p3"></td>
                                            <td id="p4"></td>
                                            <td id="p5"></td>
                                            <td id="p6"></td>
                                            <td id="p7"></td>
                                            <td id="p8"></td>
                                            <td id="p9"></td>
                                            <td id="p10"></td>
                                        </tr>
                                    </table>
                                </div>

                                <div id="doa">
                                    <div id="doa-box"></div>
                                    <p id="doa-name" class="fnt-tmplt"> DATE OF APPLICATION</p>
                                </div>

                                <div id="di">
                                    <div id="di-box"></div>
                                    <p id="di-name" class="fnt-tmplt">DATE ISSUED</p>
                                </div>

                                <div id="state" class="fnt-tmplt">
                                    <div id="orig">
                                        <div class="state-box" id="o"></div>
                                        <p id="o-name">ORIGINAL</p>
                                    </div>

                                    <div id="renew">
                                        <div class="state-box" id="r"></div>
                                        <p id="r-name">RENEWAL</p>
                                    </div>
                                </div>

                            </div>

                            <div id="nso-box">
                                <div id="nso-box-title">
                                    <p class="fnt-tmplt">
                                        DO NOT FILL-UP (NSO USE ONLY)
                                    </p>
                                </div>

                                <div id="nso-box-table">
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                    </div>			
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="bb">
                                            </div>						
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                        <div class="nso-box-cell">
                                            <div class="wb">
                                            </div>					
                                        </div>
                                    </div>						
                                </div>
                            </div>

                            <div id="box-1">
                                <div id="applicant-info">
                                    <div id="box-1-title">	
                                        <p id="box-1-name" class="no-tplt">
                                            BOX 1 (TO BE ACCOMPLISHED BY DESIGNING ARCHITECT/CIVIL ENGINEER IN PRINT)
                                        </p>
                                    </div>

                                    <div id="box-1-info">
                                        <div id="r1" class="box-1-template">
                                            <div id="r1-c1" class="box-1-template">
                                                <div id="r1-c1-d1" class="box-1-name-template">
                                                    <p id="r1-c1-d1-dt1">OWNER</p>
                                                    <p id="r1-c1-d1-dt2">LAST NAME</p>
                                                    <p id="r1-c1-d1-dt3">FIRST NAME</p>
                                                    <p id="r1-c1-d1-dt4">M.I.</p>

                                                </div>
                                                <div id="r1-c1-d2" class="box-1-val-template">
                                                    <div id="r1-c1-d2-i1" class="box-1-val-template-i"><?php if(!empty($_SESSION['$lName'])){echo $_SESSION['$lName']; unset($_SESSION['$lName']);}?></div>
                                                    <div id="r1-c1-d2-i2" class="box-1-val-template-i"><?php if(!empty($_SESSION['$fName'])){echo $_SESSION['$fName']; unset($_SESSION['$fName']);}?></div>
                                                    <div id="r1-c1-d2-i3" class="box-1-val-template-i"><?php if(!empty($_SESSION['$mName'])){echo $_SESSION['$mName']; unset($_SESSION['$mName']);}?></div>
                                                </div>
                                            </div>
                                            <div id="r1-c2" class="box-1-template">
                                                <div id="r1-c2-d1" class="box-1-name-template">
                                                    <p id="r1-c2-d1-dt1">TAX ACCT. NO.</p>
                                                </div>
                                                <div id="r1-c2-d2" class="box-1-val-template">
                                                    <div id="r1-c2-d2-i1" class="box-1-val-template-i"><?php if(!empty($_SESSION['$TaxAccNo'])){echo $_SESSION['$TaxAccNo']; unset($_SESSION['$TaxAccNo']);}?></div>
                                                </div>
                                            </div>					
                                        </div>
                                        <div id="r2" class="box-1-template">	
                                            <div id="r2-c1" class="box-1-template">
                                                <div id="r2-c1-d1" class="box-1-name-template">
                                                    <p id="r2-c1-d1-dt1">FOR CONSTRUCTION OWNED</p>
                                                    <p id="r2-c1-d1-dt2">BY AN ENTERPRISE</p>
                                                </div>						
                                            </div>
                                            <div id="r2-c2" class="box-1-template">
                                                <div id="r2-c2-d1" class="box-1-name-template">
                                                    <p id="r2-c2-d1-dt1">FORM OF OWNERSHIP</p>						
                                                </div>
                                                <div id="r2-c2-d2" class="box-1-val-template">
                                                    <div id="r2-c2-d2-i1" class="box-1-val-template-i"><?php if(!empty($_SESSION['$formOfOwnership'])){echo $_SESSION['$formOfOwnership']; unset($_SESSION['$formOfOwnership']);}?></div>
                                                </div>							
                                            </div>
                                            <div id="r2-c3" class="box-1-template">
                                                <div id="r2-c3-d1" class="box-1-name-template">
                                                    <p id="r2-c3-d1-dt1">MAIN ECONOMIC ACTIVITY/KIND OF BUSINESS</p>						
                                                </div>
                                                <div id="r2-c3-d2" class="box-1-val-template">
                                                    <div id="r2-c3-d2-i1" class="box-1-val-template-i"><?php if(!empty($_SESSION['$kindOfBusiness'])){echo $_SESSION['$kindOfBusiness']; unset($_SESSION['$kindOfBusiness']);}?></div>
                                                </div>							
                                            </div>
                                        </div>
                                        <div id="r3" class="box-1-template">
                                            <div id="r3-c1" class="box-1-template">
                                                <div id="r3-c1-d1" class="box-1-name-template">
                                                    <p id="r3-c1-d1-dt1">ADDRESS</p>						
                                                </div>
                                                <div id="r3-c1-d2" class="box-1-val-template">
                                                    <div id="r3-c1-d2-i1" class="box-1-val-template-i"><?php if(!empty($_SESSION['$Address'])){echo $_SESSION['$Address']; unset($_SESSION['$Address']);}?></div>
                                                </div>							
                                            </div>
                                            <div id="r3-c2" class="box-1-template">
                                                <div id="r3-c2-d1" class="box-1-name-template">
                                                    <p id="r3-c2-d1-dt1">TEL NO.</p>						
                                                </div>
                                                <div id="r3-c2-d2" class="box-1-val-template">
                                                    <div id="r3-c2-d2-i1" class="box-1-val-template-i"><?php if(!empty($_SESSION['$contactNumber'])){echo $_SESSION['$contactNumber']; unset($_SESSION['$contactNumber']);}?></div>
                                                </div>						
                                            </div>
                                        </div>
                                        <div id="r4" class="box-1-template">
                                            <div id="r4-c1" class="box-1-template">
                                                <div id="r4-c1-d1" class="box-1-name-template">
                                                    <p id="r4-c1-d1-dt1">LOCATION OF CONSTRUCTION</p>						
                                                </div>
                                                <div id="r4-c1-d2" class="box-1-val-template">
                                                    <div id="r4-c1-d2-i1" class="box-1-val-template-i"><?php if(!empty($_SESSION['$location'])){echo $_SESSION['$location']; unset($_SESSION['$location']);}?></div>
                                                </div>							
                                            </div>
                                        </div>
                                        <div id="r5">
                                            <div id="r5-c1">
                                                <p id="r5-c1-d1-dt1" class="sow-fnt-tmplt">SCOPE OF WORK</p>
                                            </div>

                                            <div id="r5-c2">
                                                <p id="r5-c2-dt1" class="sow-fnt-tmplt">1 NEW CONSTRUCTION</p>
                                                <div id="r5-c2-dt1-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$newConstruction'])){echo $_SESSION['$newConstruction']; unset($_SESSION['$newConstruction']);}?></div>

                                                <p id="r5-c2-dt2" class="sow-fnt-tmplt">2 ADDITION OF</p>
                                                <div id="r5-c2-dt2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$additionOf'])){echo $_SESSION['$additionOf']; unset($_SESSION['$additionOf']);}?></div>

                                                <p id="r5-c2-dt3" class="sow-fnt-tmplt">3 REPAIR OF</p>
                                                <div id="r5-c2-dt3-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$repairOf'])){echo $_SESSION['$repairOf']; unset($_SESSION['$repairOf']);}?></div>

                                                <p id="r5-c2-dt4" class="sow-fnt-tmplt">4 RENOVATION OF</p>
                                                <div id="r5-c2-dt4-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$renovationOf'])){echo $_SESSION['$renovationOf']; unset($_SESSION['$renovationOf']);}?></div>

                                                <p id="r5-c2-dt5" class="sow-fnt-tmplt">5 DEMOLITION OF</p>
                                                <div id="r5-c2-dt5-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$demolitionOf'])){echo $_SESSION['$demolitionOf']; unset($_SESSION['$demolitionOf']);}?></div>
                                            </div>

                                            <div id="r5-c3">
                                                <p id="r5-c3-dt1" class="sow-fnt-tmplt">OTHERS</p>

                                                <p id="r5-c3-dt2" class="sow-fnt-tmplt">6</p>
                                                <div id="r5-c3-dt2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$others1'])){echo $_SESSION['$others1']; unset($_SESSION['$others1']);}?></div>
                                                <p id="r5-c3-dt3" class="sow-fnt-tmplt">OF</p>
                                                <div id="r5-c3-dt3-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$others2'])){echo $_SESSION['$others2']; unset($_SESSION['$others2']);}?></div>

                                                <p id="r5-c3-dt4" class="sow-fnt-tmplt">7</p>
                                                <div id="r5-c3-dt4-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$others3'])){echo $_SESSION['$others3']; unset($_SESSION['$others3']);}?></div>
                                                <p id="r5-c3-dt5" class="sow-fnt-tmplt">OF</p>
                                                <div id="r5-c3-dt5-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$others4'])){echo $_SESSION['$others4']; unset($_SESSION['$others4']);}?></div>							
                                            </div>

                                            <div id="r5-c4">
                                                <p id="r5-c4-dt1" class="sow-fnt-tmplt">NUMBER OF UNITS</p>
                                                <div id="r5-c4-dt1-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$numberOfUnits'])){echo $_SESSION['$numberOfUnits']; unset($_SESSION['$numberOfUnits']);}?></div>
                                            </div>
                                        </div>
                                        <div id="r6">
                                            <p id="r6-name" class="fnt-tmplt">
                                                USE OR TYPE OF OCCUPANCY
                                            </p>
                                            <div id="r6-c1">
                                                <div id="r6-c1-d1" class="fnt-tmplt">
                                                    <p id="r6-c1-d1-dt1" class="r6-tmplt">RESIDENTIAL</p>
                                                    <p id="r6-c1-d1-dt2" class="r6-tmplt">11 SINGLE</p>
                                                    <p id="r6-c1-d1-dt3" class="r6-tmplt">12 DUPLEX</p>
                                                    <p id="r6-c1-d1-dt4" class="r6-tmplt">13 ROWHOUSE/ACCESSORIA</p>
                                                    <p id="r6-c1-d1-dt5" class="r6-tmplt">10 OTHERS (SPECIFY)</p>
                                                    <div id="r6-c1-d1-i" class="r6-i-tmplt"></div>
                                                </div>
                                                <div id="r6-c1-d2" class="fnt-tmplt">
                                                    <p id="r6-c1-d2-dt1">COMMERCIAL</p>
                                                    <p id="r6-c1-d2-dt2" class="r6-tmplt">21 BANK</p>
                                                    <p id="r6-c1-d2-dt3" class="r6-tmplt">22 STORE</p>
                                                    <p id="r6-c1-d2-dt4" class="r6-tmplt">23 HOTEL/MOTEL, ETC.</p>
                                                    <p id="r6-c1-d2-dt5" class="r6-tmplt">24 OFFICE CONDOMINIUM/BUSINESS OFFICE BUILDING</p>
                                                    <p id="r6-c1-d2-dt6" class="r6-tmplt">25 RESTAURANT, ETC.</p>
                                                    <p id="r6-c1-d2-dt6" class="r6-tmplt">26 SHOP (E.G. DRESS SHOP, TAILORING SHOP, BARBER SHOP, ETC.)</p>
                                                    <p id="r6-c1-d2-dt6" class="r6-tmplt">27 GASOLINE STATION</p>
                                                    <p id="r6-c1-d2-dt6" class="r6-tmplt">28 MARKET</p>
                                                    <p id="r6-c1-d2-dt6" class="r6-tmplt">29 DORMITORY OR OTHER LODGING HOUSE</p>
                                                    <p id="r6-c1-d2-dt6" class="r6-tmplt">20 OTHERS (SPECIFY)</p>

                                                    <div id="r6-c1-d2-i" class="r6-i-tmplt"></div>							
                                                </div>
                                                <div id="r6-c1-d3" class="fnt-tmplt">
                                                    <p id="r6-c1-d3-dt1" class="r6-tmplt">OTHER CONSTRUCTION</p>							
                                                    <p id="r6-c1-d3-dt2" class="r6-tmplt">60 SPECIFY</p>

                                                    <div id="r6-c1-d3-i" class="r6-i-tmplt"></div>							
                                                </div>
                                            </div>
                                            <div id="r6-c2">
                                                <div id="r6-c2-d1" class="fnt-tmplt">
                                                    <p id="r6-c2-d1-dt1" class="r6-tmplt">INDUSTRIAL</p>
                                                    <p id="r6-c2-d1-dt2" class="r6-tmplt">31 FACTORY/PLANT</p>
                                                    <p id="r6-c2-d1-dt3" class="r6-tmplt">32 REPAIR SHOP, MACHINE SHOP</p>
                                                    <p id="r6-c2-d1-dt4" class="r6-tmplt">33 REFINERY</p>
                                                    <p id="r6-c2-d1-dt5" class="r6-tmplt">34 PRINTING PRESS</p>
                                                    <p id="r6-c2-d1-dt6" class="r6-tmplt">35 WAREHOUSE</p>
                                                    <p id="r6-c2-d1-dt7" class="r6-tmplt">30 OTHERS (SPECIFY)</p>								
                                                    <div id="r6-c2-d1-i" class="r6-i-tmplt"></div>							
                                                </div>
                                                <div id="r6-c2-d2" class="fnt-tmplt">
                                                    <p id="r6-c2-d2-dt1" class="r6-tmplt">INSTITUTIONAL</p>
                                                    <p id="r6-c2-d2-dt2" class="r6-tmplt">41 SCHOOL</p>
                                                    <p id="r6-c2-d2-dt3" class="r6-tmplt">42 CHURCH AND OTHER RELIGIOUS STRUCTURES</p>
                                                    <p id="r6-c2-d2-dt4" class="r6-tmplt">43 HOSPITAL OR SIMILAR STRUCTURE</p>
                                                    <p id="r6-c2-d2-dt5" class="r6-tmplt">44 WELFARE AND CHARITABLE STRUCTURES</p>
                                                    <p id="r6-c2-d2-dt6" class="r6-tmplt">45 THEATER, AUDITORIUM, GYMNASIUM, COURT</p>
                                                    <p id="r6-c2-d2-dt7" class="r6-tmplt">40 OTHERS (SPECIFY)</p>								
                                                    <div id="r6-c2-d2-i" class="r6-i-tmplt"></div>								
                                                </div>
                                                <div id="r6-c2-d3" class="fnt-tmplt">
                                                    <p id="r6-c2-d3-dt1" class="r6-tmplt">AGRICULTURAL</p>
                                                    <p id="r6-c2-d3-dt2" class="r6-tmplt">51 BARN(S), POULTRY HOUSE(S), ETC.</p>
                                                    <p id="r6-c2-d3-dt3" class="r6-tmplt">52 GRAIN MILL</p>
                                                    <p id="r6-c2-d3-dt4" class="r6-tmplt">50 OTHERS (SPECIFY)</p>
                                                    <div id="r6-c2-d3-i" class="r6-i-tmplt"></div>							
                                                </div>
                                            </div>
                                            <div id="r6-c3" class="fnt-tmplt">
                                                <p id="r6-c3-d1-dt1" class="r6-tmplt">STREET FURNITURE, LANDSCAPING, SIGNBOARDS</p>
                                                <p id="r6-c3-d1-dt2" class="r6-tmplt">71 PARKS, PLAZAS, MONUMENTS, POOLS, PLANT BOXES, ETC.</p>
                                                <p id="r6-c3-d1-dt3" class="r6-tmplt">72 SIDEWALKS, PROMENADES, TARRACES, LAMPPOSTS, ELECTRIC POLES, TELEPHONE POLES, ETC.</p>
                                                <p id="r6-c3-d1-dt4" class="r6-tmplt">73 OUTDOOR ADS, SIGNBOARDS, ETC.</p>
                                                <p id="r6-c3-d1-dt5" class="r6-tmplt">74 FENCE ENCLOSURE</p>						
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="box-2">
                                <div id="box-2-c1" class="box-2-3-name-tmplt">
                                    <p id="box-2-c1-dt1">BOX 2 (TO BE ACCOMPLISHED BY THE RECEIVING & RECORDING SECTION)</p>
                                </div>
                                <div id="box-2-c2" class="fnt-tmplt">
                                    <p id="box-2-c2-dt1">BUILDING DOCUMENTS (FIVE SETS EACH)</p>
                                    <div id="box-2-c2-d1">
                                        <p id="box-2-c2-dt2">SITE DEVELOPMENT AND LOCATION PLAN</p>
                                        <p id="box-2-c2-dt3" class="box-2-c2-d2-tmplt">ARCHITECTURAL PLANS & SPECIFICATIONS</p>
                                        <p id="box-2-c2-dt4" class="box-2-c2-d2-tmplt">STRUCTURAL DESIGN & COMPUTATIONS</p>
                                        <p id="box-2-c2-dt5" class="box-2-c2-d2-tmplt">SANITARY/PLUMBING PLANS & SPECIFICATIONS</p>
                                        <p id="box-2-c2-dt6" class="box-2-c2-d2-tmplt">ELECTRICAL PLANS & SPECIFICATIONS</p>				
                                    </div>
                                    <div id="box-2-c2-d2">
                                        <p id="box-2-c2-dt7">MECHANICAL PLANS & SPECIFICATIONS</p>
                                        <p id="box-2-c2-dt8" class="box-2-c2-d2-tmplt">LOGBOOK (1 COPY)</p>
                                        <p id="box-2-c2-dt9" class="box-2-c2-d2-tmplt">OTHERS (SPECIFY)</p>

                                        <div id="box-2-c2-i1" class="box-2-c2-i-tmplt"></div>
                                        <div id="box-2-c2-i2" class="box-2-c2-i-tmplt"></div>
                                        <div id="box-2-c2-i3" class="box-2-c2-i-tmplt"></div>
                                    </div>				
                                </div>
                            </div>

                            <div id="box-3">
                                <div id="box-3-c1" class="box-2-3-name-tmplt">
                                    <p id="box-3-c1-dt1">BOX 3 (TO BE ACCOMPLISHED BY THE BUILDING OFFICIAL)</p>			
                                </div>	
                                <div id="box-3-c1-d1" class="fnt-tmplt">
                                    <p id="box-3-c1-dt1">ACTION TAKEN:</p>
                                    <p id="box-3-c1-dt2">PERMIT IS HEREBY GRANTED SUBJECT TO THE FOLLOWING CONDITIONS:</p>
                                    <p id="box-3-c1-dt3">1.</p>
                                    <div id="box-3-c1-i1" class="box-3-c1-i">
                                        <p id="box-3-c1-i1-t1" class="fnt-tmplt">
                                            THAT THE PROPOSED CONSTRUCTION/ADDITION/REPAIR/RENOVATIONS/ <br>
                                            DEMOLITION/INSTALLATION ETC SHALL BE IN CONFORMITY WITH THE <br>
                                            NATIONAL BUILDING CODE (P.D. 1096) AND 119 CORRESPONDING IMPLEMEN- <br>
                                            TING RULES AND REGULATIONS.
                                        </p>				
                                    </div>

                                    <p id="box-3-c1-dt4">2.</p>
                                    <div id="box-3-c1-i2" class="box-3-c1-i">
                                        <p id="box-3-c1-i2-t1" class="fnt-tmplt">
                                            THAT A DULY LICENSED ARCHITECT/CIVIL ENGINEER HAS BEEN ENGAGED TO <br>
                                            PREPARE PLANS AND SPECIFICATIONS AND UNDERTAKE THE SUPERVISION <br>
                                            /INSPECTION OF THE CONSTRUCTION OF THE PROJECT. 
                                        </p>				
                                    </div>								
                                    <p id="box-3-c1-dt5">3.</p>
                                    <div id="box-3-c1-i3" class="box-3-c1-i">
                                        <p id="box-3-c1-i3-t1" class="fnt-tmplt">
                                            THAT A CERTIFICATE OF COMPLETION DULY SIGNED AND SEALED BY THE <br>
                                            DESIGNING ARCHITECT/CIVIL ENGINEER AND THE ARCHITECT/ENGINEER IN-CHARGE <br>
                                            OF CONSTRUCTION SHALL BE SUBMITTED NOT LATER THAN SEVEN (7) DAYS <br>
                                            AFTER COMPLETION OF THE CONSTRUCTION OF THE PROJECT. 
                                        </p>				
                                    </div>
                                    <p id="box-3-c1-dt6">4.</p>
                                    <div id="box-3-c1-i4" class="box-3-c1-i">
                                        <p id="box-3-c1-i3-t1" class="fnt-tmplt">
                                            THAT A "CERTIFICATE OF OCCUPANCY" SHALL BE SECURED PRIOR TO ACTUAL <br>
                                            OCCUPANCY OF THE BUILDING.
                                        </p>				
                                    </div>				
                                </div>
                                <div id="box-3-c1-d2" class="fnt-tmplt">
                                    <div id="box-3-c1-d2-i1" class="box-3-c1-d2-i"></div>
                                    <p id="box-3-c1-d2-dt1">BUILDING OFFICIAL</p>

                                    <div id="box-3-c1-d2-i2" class="box-3-c1-d2-i"></div>
                                    <p id="box-3-c1-d2-dt2">DATE</p>
                                </div>
                                <div id="box-3-c1-d3" class="fnt-tmplt">
                                    <p id="box-3-c1-d3-dt1">NOTE:</p>
                                    <p id="box-3-c1-d3-dt2">
                                        THIS PERMIT MAY BE CANCELLED OR REVOKED
                                        PURSUANT TO SECTION 305 & 306 OF THE NATIONAL 
                                        BUILDING CODE
                                    </p>	
                                </div>
                            </div>
                    </div>
					
		<div id="target-2">
		<div id="nso-box-2">
			<div id="nso-box-title">
				<p class="fnt-tmplt">
					DO NOT FILL-UP (NSO USE ONLY)
				</p>
			</div>
			
			<div id="nso-box-table">
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>
				<div class="nso-box-row">
					<div class="nso-box-cell">
						<div class="bb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="bb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>					
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
					<div class="nso-box-cell">
						<div class="wb">
						</div>						
					</div>
				</div>

				</div>
		</div>

		<div id="box-3a">

				<div id="box-3a-title">	
					<p id="box-3a-name" class="no-tplt">
						BOX 3A (TO BE ACCOMPLISHED BY DESIGNING ARCHITECT/CIVIL ENGINEER IN PRINT)
					</p>
				</div>
				
				<div id="box-3a-info">
					<div id="box-3a-r1">
						<div id="box-3a-r1-c1">		
							<div id="box-3a-r1-c1-d1">
								<p id="box-3a-r1-c1-d1-dt1">TOTAL ESTIMATED COST</p>
								<p id="box-3a-r1-c1-d1-dt2">BUILDING</p>
								<p id="box-3a-r1-c1-d1-dt3">ELECTRICAL</p>
								<p id="box-3a-r1-c1-d1-dt4">MECHANICAL</p>
								<p id="box-3a-r1-c1-d1-dt5">PLUMBING</p>
								<p id="box-3a-r1-c1-d1-dt6">OTHERS</p>
								<p id="box-3a-r1-c1-d1-dt7">TOTAL COST</p>
								
								
							</div>				
							<div id="box-3a-r1-c1-d2">
								<p id="box-3a-r1-c1-d2-dt1" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$tec1'])){echo $_SESSION['$tec1']; unset($_SESSION['$tec1']);}?></div>
								
								<p id="box-3a-r1-c1-d2-dt2" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$tec2'])){echo $_SESSION['$tec2']; unset($_SESSION['$tec2']);}?></div>
								<p id="box-3a-r1-c1-d2-dt3" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$tec3'])){echo $_SESSION['$tec3']; unset($_SESSION['$tec3']);}?></div>
								<p id="box-3a-r1-c1-d2-dt4" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$tec4'])){echo $_SESSION['$tec4']; unset($_SESSION['$tec4']);}?></div>
								<p id="box-3a-r1-c1-d2-dt5" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$tec5'])){echo $_SESSION['$tec5']; unset($_SESSION['$tec5']);}?></div>
								<p id="box-3a-r1-c1-d2-dt6" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$tec6'])){echo $_SESSION['$tec6']; unset($_SESSION['$tec6']);}?></div>
							
							</div>
						</div>
						<div id="box-3a-r1-c2">
							<div id="box-3a-r1-c2-d1">
								<p id="box-3a-r1-c2-d1-dt1">COST OF EQUIPMENT INSTALLED</p>
							</div>
							<div id="box-3a-r1-c2-d2">
								<p id="box-3a-r1-c2-d2-dt1" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c2-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$cei1'])){echo $_SESSION['$cei1']; unset($_SESSION['$cei1']);}?></div>
								
								<p id="box-3a-r1-c2-d2-dt2" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c2-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$cei2'])){echo $_SESSION['$cei2']; unset($_SESSION['$cei2']);}?></div>
								
								<p id="box-3a-r1-c2-d2-dt3" class="sow-fnt-tmplt">P</p>
								<div id="box-3a-r1-c2-d2-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$cei3'])){echo $_SESSION['$cei3']; unset($_SESSION['$cei3']);}?></div>
								
							</div>
						</div>
						
						<div id="box-3a-r1-c3">
							<p id="box-3a-r1-c3-d1-dt1">NO. OF STOREYS</p>
							<div id="box-3a-r1-c3-d1-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$storey'])){echo $_SESSION['$storey']; unset($_SESSION['$storey']);}?></div>
							<p id="box-3a-r1-c3-d1-dt2">TOTAL FLOOR</p>
							<p id="box-3a-r1-c3-d1-dt3">AREA</p>
							<div id="box-3a-r1-c3-d1-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$floorArea'])){echo $_SESSION['$floorArea']; unset($_SESSION['$floorArea']);}?></div>
							<p id="box-3a-r1-c3-d1-dt4">PROPOSED DATE</p>
							<p id="box-3a-r1-c3-d1-dt5">OF CONSTRUCTION</p>
							<div id="box-3a-r1-c3-d1-i" class="sow-i-tmplt"><?php if(!empty($_SESSION['$constructionDate'])){echo $_SESSION['$constructionDate']; unset($_SESSION['$constructionDate']);}?></div>
							<p id="box-3a-r1-c3-d1-dt6">MATERIALS OF CONST</p>
							<p id="box-3a-r1-c3-d1-dt7">(WOOD, CONC, STEEL, MIXED)</p>
						</div>
						
					</div>
				</div>

		</div>					
					
		<div id="box-4">			

			<div id="box-4-title">
				<p id="box-4-name" class="no-tplt">
					BOX 4 (TO BE ACCOMPLISHED BY THE DIVISION/SECTION CONCERNED)
				</p>
			</div>
				
			<div id="box-4-info">
				<div id="box-4-r1" class="box-4-template">
					<div id="box-4-r1-c1" class="box-4-template">
						<div id="box-4-r1-c1-d1" class="box-4-name-template">
							<p id="box-4-r1-c1-d1-dt1">ASSESSED FEES</p>
						</div>
					</div>
				</div>
					
				<div id="box-4-r2" class="box-4-table">
					
					<table id="box-4-r2-table">
						<tr>
							<td></td>
							<td>AMOUNT DUE</td>
							<td>ASSESSED BY</td>
							<td>O.R NUMBER</td>
							<td>DATE PAID</td>
						</tr>
						<tr>
							<td>LAND USE/ZONING</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>LAND & GRADE</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>BUILDING</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>PLUMBING</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>ELECTRICAL</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>MECHANICAL</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>INSPECTION FEE</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>TOTAL</td>
							<td></td>
							<td></td>
						</tr>
						
					</table>

				</div>
					
				<div id="box-4-r3" class="box-4-template">
						<div id="box-4-r3-d1" class="box-4-name-template">
							<p id="box-4-r3-d1-dt1">REVIEWED BY: CHIEF, PROCESSING DIVISION/SECTION</p>
						</div>
					</div>
				
					
					
				</div>
		</div>		

		<div id="box-5">
			
				<div id="box-5-title">
					<p id="box-5-name" class="no-tplt">
						BOX 5 (TO BE ACCOMPLISHED BY THE DIVISION/SECTION CONCERNED)
					</p>
				</div>
				
				<div id="box-5-info">
					<div id="box-5-r1" class="box-5-template">
						<div id="box-5-r1-c1" class="box-5-template">
							<div id="box-5-r1-c1-d1" class="box-5-name-template">
								<p id="box-5-r1-c1-d1-dt1">PROGRESS FLOW</p>
							</div>
						</div>
					</div>
					
					<div id="box-5-r2" class="box-5-template">
						
						<table id="box-5-r2-table">
							<tr>
								<td>NOTED</td>
								<td colspan="2">IN</td>
								<td colspan="2">OUT</td>
								<td>ACTION</td>
								<td>PROCESSING</td>
							</tr>

							<tr>
								<td>CHIEF PROCESSING DIVISION/SECTION</td>
								<td>TIME</td>
								<td>DATE</td>
								<td>TIME</td>
								<td>DATE</td>
								<td>REMARKS</td>
								<td>BY</td>
							</tr>
							<tr>
								<td>RECEIVING and RECORDING</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>LAND USE and ZONING</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>GEODETIC (LINE & GRADE)</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>ARCHITECTURAL</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>STRUCTURAL</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>SANITARY/PLUMBING</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>ELECTRICAL</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>MECHANICAL</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

						</table>
					</div>
					
					<div id="box-5-r4" class="box-5-template">
						<div id="box-5-r4-c1" class="box-5-template">
							<div id="box-5-r4-c1-d1" class="box-5-name-template">
								<p id="box-5-r4-c1-d1-dt1">WE HEREBY AFFIX OUR HANDS SIGNIFYING OUR CONFORMITY TO THE INFORMATION HEREIN ABOVE SETFORTH</p>
							</div>
						</div>
						
						
					</div>
					

			</div>


		</div>
		

		
		<div id="box-6">
			<div id="box-6-title">
				<p id="box-6-name" class="no-tplt">BOX 6</p>
			</div>
			
			<div id="box-6-info">
				<div id="box-6-r1" class="box-6-template">
					<div id="box-6-r1-c1" class="box-6-template">
						<p id="box-6-r1-c1-dt1">ARCHITECT/CIVIL ENGINEER</p>
						<p id="box-6-r1-c1-dt2">SIGNED AND SEALED PLANS & SPECIFICATIONS</p>
					</div>
					<div id="box-6-r1-c2" class="box-6-template">
						<p id="box-6-r1-c2-dt1">PRC REG. NO</p>
						<div id="box-6-r1-c1-d1-i" class="box-6-name-template"><?php if(!empty($_SESSION['$SPRC'])){echo $_SESSION['$SPRC']; unset($_SESSION['$SPRC']);}?></div>
					</div>
				</div>
				<div id="box-6-r2" class="box-6-name-template">
					<div id="box-6-r2-c1" class="box-6-name-template">
						<p id="box-6-r2-c1-dt1" class="box-6-name-template">PRINT NAME</p>
						<div id="box-6-r2-c1-i" class="box-6-name-template"><?php if(!empty($_SESSION['$SFirstName'])&&!empty($_SESSION['$SmiddleInitial'])&&!empty($_SESSION['$SlastName'])){echo $_SESSION['$SFirstName']." ".$_SESSION['$SmiddleInitial']." ".$_SESSION['$SlastName']; unset($_SESSION['$SFirstName']); unset($_SESSION['$SmiddleInitial']); unset($_SESSION['$SlastName']);}?></div>
					</div> 
				</div>
				
				<div id="box-6-r3" class="box-6-name-template">
					<div id="box-6-r3-c1" class="box-6-name-template">
						<p id="box-6-r3-c1-d1-dt1" class="box-6-name-template">ADDRESS</p>
						<div id="box-6-r3-c1-d1-i" class="box-6-name-template"><?php if(!empty($_SESSION['$Saddress'])){echo $_SESSION['$Saddress']; unset($_SESSION['$Saddress']);}?></div>
					</div> 
				</div>
				<div id="box-6-r4" class="box-6-name-template">
					<div id="box-6-r4-c1" class="box-6-name-template">
						<p id="box-6-r4-c1-d1-dt1" class="box-6-name-template">SIGNATURE</p>
						<div id="box-6-r4-c1-d1-i" class="box-6-name-template"></div>
					</div> 
				</div>
				
				
			</div>
		
		</div>

		
		<div id="box-8">
			<div id="box-8-title">
				<p id="box-8-name" class="no-tplt">BOX 8</p>
			</div>
			
			<div id="box-8-info">
				<div id="box-8-r1" class="box-8-template">
					<div id="box-8-r1-c1" class="box-8-template">
						<p id="box-8-r1-c1-dt1">SIGNATURE</p>
						<div id="box-8-r1-c1-i1"></div>
						<p id="box-8-r1-c1-dt2">APPLICANT</p>
						<div id="box-8-r1-c1-i2"></div>
					</div>
					
				</div>
				<div id="box-8-r2" class="box-8-name-template">
					<div id="box-8-r2-c1" class="box-8-name-template">	
						<div id="box-8-r2-c1-d1" class="box-8-name-template">
							<p id="box-8-r2-c1-d1-dt1" class="box-8-name-template">COMMUNITY TAX & CERT</p>
							<div id="box-8-r2-c1-d1-i" class="box-8-name-template"><?php if(!empty($_SESSION['$Octc'])){echo $_SESSION['$Octc']; unset($_SESSION['$Octc']);}?></div>
						</div> 
					</div>
					<div id="box-8-r2-c2" class="box-8-name-template">	
						<div id="box-8-r2-c2-d1" class="box-8-name-template">
							<p id="box-8-r2-c2-d1-dt1" class="box-8-name-template">DATE ISSUED</p>
							<div id="box-8-r2-c2-d1-i" class="box-8-name-template"><?php if(!empty($_SESSION['$ctcDate'])){echo $_SESSION['$ctcDate']; unset($_SESSION['$ctcDate']);}?></div>
						</div> 
					</div>
					<div id="box-8-r2-c3" class="box-8-name-template">	
						<div id="box-8-r2-c3-d1" class="box-8-name-template">
							<p id="box-8-r2-c3-d1-dt1" class="box-8-name-template">PLACE ISSUED</p>
							<div id="box-8-r2-c3-d1-i" class="box-8-name-template"><?php if(!empty($_SESSION['$ctcPlace'])){echo $_SESSION['$ctcPlace']; unset($_SESSION['$ctcPlace']);}?></div>
						</div> 
					</div>
				</div>
				
				<div id="box-8-r3" class="box-8-name-temdivlate">
					<div id="box-8-r3-c1-d1" class="box-8-name-temdivlate">	
						<div id="box-8-r3-c1-d1" class="box-8-name-temdivlate">
							<div id="box-8-r3-c1-d1-i1" class="box-8-name-temdivlate"></div>
						</div> 
					</div>
					<div id="box-8-r3-c2-d1" class="box-8-name-temdivlate">	
						<div id="box-8-r3-c2-d1" class="box-8-name-temdivlate">
							<div id="box-8-r3-c2-d1-i1" class="box-8-name-temdivlate"></div>
						</div> 
					</div>
					<div id="box-8-r3-c3-d1" class="box-8-name-temdivlate">	
						<div id="box-8-r3-c3-d1" class="box-8-name-temdivlate">
							<div id="box-8-r3-c3-d1-i1" class="box-8-name-temdivlate"></div>
						</div> 
					</div>
				</div>
				
				
			</div>
		
		</div>
		<div id="box-7">
			<div id="box-7-title">
				<p id="box-7-name" class="no-tplt">BOX 7</p>
			</div>
			
			<div id="box-7-info">
				<div id="box-7-r1" class="box-7-template">
					<div id="box-7-r1-c1" class="box-7-template">
						<p id="box-7-r1-c1-dt1">ARCHITECT/CIVIL ENGINEER</p>
						<p id="box-7-r1-c1-dt2">IN-CHARGE OF CONSTRUCTION</p>
					</div>
					<div id="box-7-r1-c2" class="box-7-template">
						<p id="box-7-r1-c2-dt1">PRC REG. NO</p>
						<div id="box-7-r1-c1-d1-i" class="box-7-name-template"><?php if(!empty($_SESSION['$CPRC'])){echo $_SESSION['$CPRC']; unset($_SESSION['$CPRC']);}?></div>
					</div>
				</div>
				<div id="box-7-r2" class="box-7-name-template">
					<div id="box-7-r2-c1-d1" class="box-7-name-template">	
						<div id="box-7-r2-c1-d1" class="box-7-name-template">
							<p id="box-7-r2-c1-d1-dt1" class="box-7-name-template">PRINT NAME</p>
							<div id="box-7-r2-c1-d1-i" class="box-7-name-template"><?php if(!empty($_SESSION['$CFirstName'])&&!empty($_SESSION['$CmiddleInitial'])&&!empty($_SESSION['$ClastName'])){echo $_SESSION['$CFirstName']." ".$_SESSION['$CmiddleInitial']." ".$_SESSION['$ClastName']; unset($_SESSION['$CFirstName']); unset($_SESSION['$CmiddleInitial']); unset($_SESSION['$ClastName']);}?></div>
						</div> 
					</div>
				</div>
				
				<div id="box-7-r3" class="box-7-name-template">
					<div id="box-7-r3-c1" class="box-7-name-template"> 
						<div id="box-7-r3-c1-d1" class="box-7-name-template">
							<p id="box-7-r3-c1-d1-dt1" class="box-7-name-template">ADDRESS</p>
							<div id="box-7-r3-c1-d1-i" class="box-7-name-template"><?php if(!empty($_SESSION['$Ccaddress'])){echo $_SESSION['$Ccaddress']; unset($_SESSION['$Ccaddress']);}?></div>
						</div> 
					</div>
				</div>
				<div id="box-7-r4" class="box-7-name-template">
					<div id="box-7-r4-c1" class="box-7-name-template">
						<div id="box-7-r4-c1-d1" class="box-7-name-template">
							<p id="box-7-r4-c1-d1-dt1" class="box-7-name-template">P.T.R NO</p>
							<div id="box-7-r4-c1-d1-i" class="box-7-name-template"><?php if(!empty($_SESSION['$ptrNo'])){echo $_SESSION['$ptrNo']; unset($_SESSION['$ptrNo']);}?></div>
						</div> 
					</div>
					<div id="box-7-r4-c2" class="box-7-name-template">
						<div id="box-7-r4-c2-d1" class="box-7-name-template">
							<p id="box-7-r4-c2-d1-dt1" class="box-7-name-template">DATE ISSUED</p>
							<div id="box-7-r4-c2-d1-i" class="box-7-name-template"><?php if(!empty($_SESSION['$dateIssued'])){echo $_SESSION['$dateIssued']; unset($_SESSION['$dateIssued']);}?></div>
						</div>
					</div>
					<div id="box-7-r4-c3" class="box-7-name-template">
						<div id="box-7-r4-c3-d1" class="box-7-name-template">
							<p id="box-7-r4-c3-d1-dt1" class="box-7-name-template">PLACE ISSUED</p>
							<div id="box-7-r4-c3-d1-i" class="box-7-name-template"><?php if(!empty($_SESSION['$placeIssued'])){echo $_SESSION['$placeIssued']; unset($_SESSION['$placeIssued']);}?></div>
						</div>
					</div>
				</div>
				<div id="box-7-r5" class="box-7-name-template">
					<div id="box-7-r5-c1" class="box-7-name-template">
						<div id="box-7-r5-c1-d1" class="box-7-name-template">
							<p id="box-7-r5-c1-d1-dt1" class="box-7-name-template">SIGNATURE</p>
							<div id="box-7-r5-c1-d1-i" class="box-7-name-template"></div>
						</div> 
					</div>
					<div id="box-7-r5-c2" class="box-7-name-template">
						<div id="box-7-r5-c2-d1" class="box-7-name-template">
							<p id="box-7-r5-c2-d1-dt1" class="box-7-name-template">TIN</p>
							<div id="box-7-r5-c2-d1-i" class="box-7-name-template"><?php if(!empty($_SESSION['$tin'])){echo $_SESSION['$tin']; unset($_SESSION['$tin']);}?></div>
						</div>
					</div>
				</div>
				
				
			</div>
		
		</div>

		<div id="box-9">
			<div id="box-9-title">
				<p id="box-9-name" class="no-tplt">BOX 9(TO BE ACCOMPLISHED BY LOT OWNER)</p>
			</div>
			
			<div id="box-9-info">
				<div id="box-9-r1" class="box-9-template">
					<div id="box-9-r1-c1" class="box-9-template">
						<p id="box-9-r1-c1-dt1">TCT/OCT NO.</p>
						<div id="box-9-r1-c1-i"><?php if(!empty($_SESSION['$tct'])){echo $_SESSION['$tct']; unset($_SESSION['$tct']);}?></div>
					</div>
					
				</div>
				<div id="box-9-r2" class="box-9-name-template">
					<div id="box-9-r2-c1-d1" class="box-9-name-template">	
						<div id="box-9-r2-c1-d1" class="box-9-name-template">
							<p id="box-9-r2-c1-d1-dt1" class="box-9-name-template">PRINT NAME OF LOT OWNER</p>
							<div id="box-9-r2-c1-d1-i" class="box-9-name-template"><?php if(!empty($_SESSION['$OFirstName'])&&!empty($_SESSION['$0middleInitial'])&&!empty($_SESSION['$OlastName'])){echo $_SESSION['$OFirstName']." ".$_SESSION['$OmiddleInitial']." ".$_SESSION['$OlastName']; unset($_SESSION['$OFirstName']); unset($_SESSION['$OmiddleInitial']); unset($_SESSION['$OlastName']);}?></div>
						</div> 
					</div>
				</div>
				
				<div id="box-9-r3" class="box-9-name-template">
					<div id="box-9-r3-c1" class="box-9-name-template"> 
						<div id="box-9-r3-c1-d1" class="box-9-name-template">
							<p id="box-9-r3-c1-d1-dt1" class="box-9-name-template">ADDRESS</p>
							<div id="box-9-r3-c1-d1-i" class="box-9-name-template"><?php if(!empty($_SESSION['$Ocaddress'])){echo $_SESSION['$Ocaddress']; unset($_SESSION['$Ocaddress']);}?></div>
						</div> 
					</div>
				</div>
				<div id="box-9-r4" class="box-9-name-template">
					<div id="box-9-r4-c1" class="box-9-name-template">
						<div id="box-9-r4-c1-d1" class="box-9-name-template">
							<p id="box-9-r4-c1-d1-dt1" class="box-9-name-template">COMMUNITY TAX CERT</p>
							<div id="box-9-r4-c1-d1-i" class="box-9-name-template"><?php if(!empty($_SESSION['$Octc'])){echo $_SESSION['$Octc']; unset($_SESSION['$Octc']);}?></div>
						</div> 
					</div>
				</div>
				<div id="box-9-r5" class="box-9-name-template">
					<div id="box-9-r5-c1" class="box-9-name-template">
						<div id="box-9-r5-c1-d1" class="box-9-name-template">
							<p id="box-9-r5-c1-d1-dt1" class="box-9-name-template">SIGNATURE</p>
							<div id="box-9-r5-c1-d1-i" class="box-9-name-template"></div>
						</div> 
					</div>					
				</div>
				
				
			</div>
		
		</div>
		</div>

                    <div class = "buttons">
                        <button id="myP" type="button" onclick="myFunction()">Print</button>
						<button id="downloadBtn" type="button" onclick="downloadBtn()">Download</button>
                    </div>

                    <!-- PC -->

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
    </body>
</html>
