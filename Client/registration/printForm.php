<?php
session_start();

$_SESSION['printForm'] = basename($_SERVER['PHP_SELF']);

if (!empty($_SESSION['$entName'])) {
    unset($_SESSION['$entName']);
}

if (!empty($_SESSION['$parent_typeOfOccupancy'])) {
    unset($_SESSION['$parent_typeOfOccupancy']);
}

if (!empty($_SESSION['$email'])) {
    unset($_SESSION['$email']);
}

if (!empty($_SESSION['$pw'])) {
    unset($_SESSION['$pw']);
}

if (!empty($_SESSION['$cpw'])) {
    unset($_SESSION['$cpw']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once '../common/head.php'; ?>

        <link rel="stylesheet" href="../css/main2.css">            
        <link rel="stylesheet" href="../css/printForm.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">

        <script type="text/javascript" language="javascript" src="../jquery/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="../jquery/html2canvas.min.js"></script>
        <script type="text/javascript" language="javascript" src="../jquery/jquery.plugin.html2canvas.js"></script>
        <script type="text/javascript" language="javascript" src="../js/printform.js"></script>

    </head>
    <body>

        <?php include_once '../common/header.php'; ?>


        <div class="container">
            <div class="content">
                <div class="main">

                    <h1 id = "heading">Building Permit Preview</h1>
                    <p id="info">A preview of your building permit application</p>

                    <div id="bpform">
                        <div id="target">
                            <div id="header" class="fnt-tmplt">
                                <p id="fhead">
                                    Republic of the Philippines<br>0
                                    OFFICE OF THE CITY BUILDING OFFICIAL<br>
                                    BAGUIO CITY                           
                                </p>
                            </div>

                            <div id="bp-info">
                                <div id="app-no">
                                    <p class="box-title">APPLICATION NUMBER</p>
                                    <table id="app-table">
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
                                    <table id="p-no-table">
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
                                        <p id="o-name">ORIGINAL</p>
                                    </div>

                                    <div id="renew">
                                        <p id="r-name">RENEWAL</p>
                                    </div>
                                </div>

                            </div>

                            <div id="nso-box">
                                <div id="nso-box-title">
                                    <p id="appendix">APPENDIX B</p>
                                    <p class="fnt-tmplt">
                                        DO NOT FILL-UP (NSO USE ONLY)
                                    </p>
                                </div>

                                <div id="nso-box-table">
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>			
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"> </div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
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
                                                    <p id="r1-c1-d1-dt1">OWNER/APPLICANT</p>
                                                    <p id="r1-c1-d1-dt2">LAST NAME</p>
                                                    <p id="r1-c1-d1-dt3">FIRST NAME</p>
                                                    <p id="r1-c1-d1-dt4">M.I.</p>

                                                </div>
                                                <div id="r1-c1-d2" class="box-1-val-template">
                                                    <div id="r1-c1-d2-i1" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$lNameFinal'])) {
                                                            echo $_SESSION['$lNameFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                    <div id="r1-c1-d2-i2" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$fNameFinal'])) {
                                                            echo $_SESSION['$fNameFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                    <div id="r1-c1-d2-i3" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$mNameFinal'])) {
                                                            echo $_SESSION['$mNameFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="r1-c2" class="box-1-template">
                                                <div id="r1-c2-d1" class="box-1-name-template">
                                                    <p id="r1-c2-d1-dt1">TIN</p>
                                                </div>
                                                <div id="r1-c2-d2" class="box-1-val-template">
                                                    <div id="r1-c2-d2-i1" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$TaxAccNoFinal'])) {
                                                            echo $_SESSION['$TaxAccNoFinal'];
                                                        }
                                                        ?>
                                                    </div>
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
                                                    <div id="r2-c2-d2-i1" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$formOfOwnershipFinal'])) {
                                                            echo $_SESSION['$formOfOwnershipFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                </div>							
                                            </div>
                                            <div id="r2-c3" class="box-1-template">
                                                <div id="r2-c3-d1" class="box-1-name-template">
                                                    <p id="r2-c3-d1-dt1">MAIN ECONOMIC ACTIVITY/KIND OF BUSINESS</p>						
                                                </div>
                                                <div id="r2-c3-d2" class="box-1-val-template">
                                                    <div id="r2-c3-d2-i1" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$kindOfBusinessFinal'])) {
                                                            echo $_SESSION['$kindOfBusinessFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                </div>							
                                            </div>
                                        </div>
                                        <div id="r3" class="box-1-template">
                                            <div id="r3-c1" class="box-1-template">
                                                <div id="r3-c1-d1" class="box-1-name-template">
                                                    <p id="r3-c1-d1-dt1">ADDRESS:</p>						
                                                </div>
                                                <div id="r3-c1-d2" class="box-1-val-template">
                                                    <div id="r3-c1-d2-i1" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$AddressFinal'])) {
                                                            echo $_SESSION['$AddressFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                </div>							
                                            </div>
                                            <div id="r3-c2" class="box-1-template">
                                                <div id="r3-c2-d1" class="box-1-name-template">
                                                    <p id="r3-c2-d1-dt1">TELEPHONE NO.</p>						
                                                </div>
                                                <div id="r3-c2-d2" class="box-1-val-template">
                                                    <div id="r3-c2-d2-i1" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$contactNumberFinal'])) {
                                                            echo $_SESSION['$contactNumberFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                </div>						
                                            </div>
                                        </div>
                                        <div id="r4" class="box-1-template">
                                            <div id="r4-c1" class="box-1-template">
                                                <div id="r4-c1-d1" class="box-1-name-template">
                                                    <p id="r4-c1-d1-dt1">LOCATION OF CONSTRUCTION</p>						
                                                </div>
                                                <div id="r4-c1-d2" class="box-1-val-template">
                                                    <div id="r4-c1-d2-i1" class="box-1-val-template-i">
                                                        <?php
                                                        if (!empty($_SESSION['$locationFinal'])) {
                                                            echo $_SESSION['$locationFinal'];
                                                        }
                                                        ?>
                                                    </div>
                                                </div>							
                                            </div>
                                        </div>
                                        <div id="r5">
                                            <div id="r5-c1">
                                                <p id="r5-c1-d1-dt1" class="sow-fnt-tmplt">SCOPE OF WORK</p>
                                            </div>

                                            <div id="r5-c2">
                                                <p id="r5-c2-dt1" class="sow-fnt-tmplt">1 NEW CONSTRUCTION</p>
                                                <div id="r5-c2-dt1-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$newConstructionFinal'])) {
                                                        echo $_SESSION['$newConstructionFinal'];
                                                    }
                                                    ?>
                                                </div>

                                                <p id="r5-c2-dt2" class="sow-fnt-tmplt">2 ADDITION OF</p>
                                                <div id="r5-c2-dt2-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$additionOfFinal'])) {
                                                        echo $_SESSION['$additionOfFinal'];
                                                    }
                                                    ?>
                                                </div>

                                                <p id="r5-c2-dt3" class="sow-fnt-tmplt">3 REPAIR OF</p>
                                                <div id="r5-c2-dt3-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$repairOfFinal'])) {
                                                        echo $_SESSION['$repairOfFinal'];
                                                    }
                                                    ?>
                                                </div>

                                                <p id="r5-c2-dt4" class="sow-fnt-tmplt">4 RENOVATION OF</p>
                                                <div id="r5-c2-dt4-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$renovationOfFinal'])) {
                                                        echo $_SESSION['$renovationOfFinal'];
                                                    }
                                                    ?>
                                                </div>

                                                <p id="r5-c2-dt5" class="sow-fnt-tmplt">5 DEMOLITION OF</p>
                                                <div id="r5-c2-dt5-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$demolitionOfFinal'])) {
                                                        echo $_SESSION['$demolitionOfFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                            <div id="r5-c3">
                                                <p id="r5-c3-dt1" class="sow-fnt-tmplt">OTHERS (SPECIFY)</p>

                                                <p id="r5-c3-dt2" class="sow-fnt-tmplt">6</p>
                                                <div id="r5-c3-dt2-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$others1Final'])) {
                                                        echo $_SESSION['$others1Final'];
                                                    }
                                                    ?>
                                                </div>
                                                <p id="r5-c3-dt3" class="sow-fnt-tmplt">OF</p>
                                                <div id="r5-c3-dt3-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$others2Final'])) {
                                                        echo $_SESSION['$others2Final'];
                                                    }
                                                    ?>
                                                </div>

                                                <p id="r5-c3-dt4" class="sow-fnt-tmplt">7</p>
                                                <div id="r5-c3-dt4-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$others3Final'])) {
                                                        echo $_SESSION['$others3Final'];
                                                    }
                                                    ?>
                                                </div>
                                                <p id="r5-c3-dt5" class="sow-fnt-tmplt">OF</p>
                                                <div id="r5-c3-dt5-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$others4Final'])) {
                                                        echo $_SESSION['$others4Final'];
                                                    }
                                                    ?>
                                                </div>							
                                            </div>

                                            <div id="r5-c4">
                                                <p id="r5-c4-dt1" class="sow-fnt-tmplt">NUMBER OF UNITS</p>
                                                <div id="r5-c4-dt1-i" class="sow-i-tmplt">
                                                    <?php
                                                    if (!empty($_SESSION['$numberOfUnitsFinal'])) {
                                                        echo $_SESSION['$numberOfUnitsFinal'];
                                                    }
                                                    ?>
                                                </div>
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
                                    <p id="box-2-c1-dt1">BOX 2 (TO BE ASSESSED BY THE RECEIVING AND RECORDING SECTION)</p>
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
                                    <p id="box-3-c1-d2-dt1">CITY BUILDING OFFICIAL</p>

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


                        <!-- PAGE 2 -->

                        <div id="target-2">

                            <div id="nso-box-2">
                                <div id="nso-box-title">
                                    <p class="fnt-tmplt">
                                        DO NOT FILL (NSO USE ONLY)
                                    </p>
                                </div>

                                <div id="nso-box-table-2">
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>                                        
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>                                        
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"> </div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                    <div class="nso-box-row">
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2-b"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                        <div class="nso-box-cell-2"></div>
                                    </div>
                                </div>
                            </div>

                            <div id="box-3a">
                                <div id="box-3a-title">	
                                    <p id="box-3a-name" class="no-tplt">
                                        BOX 3A (TO BE ACCOMPLISHED BY DESIGNING ARCHITECT/CIVIL ENGINEER IN PRINT)
                                    </p>
                                </div>

                                <div id="box-3a-r1-c1">		
                                    <div id="box-3a-r1-c1-d1">
                                        <p id="box-3a-r1-c1-d1-dt1">TOTAL ESTIMATED COST</p>
                                        <p id="box-3a-r1-c1-d1-dt2">BUILDING</p>
                                        <p id="box-3a-r1-c1-d1-dt3">ELECTRICAL</p>
                                        <p id="box-3a-r1-c1-d1-dt4">MECHANICAL</p>
                                        <p id="box-3a-r1-c1-d1-dt5">PLUMBING</p>
                                        <p id="box-3a-r1-c1-d1-dt6">OTHERS</p><br>
                                        <p id="box-3a-r1-c1-d1-dt7">TOTAL COST</p>
                                    </div>				
                                    <div id="box-3a-r1-c1-d2">
                                        <p id="box-3a-r1-c1-d2-dt1">P</p>
                                        <div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$tec1Final'])) {
                                                echo $_SESSION['$tec1Final'];
                                            }
                                            ?>
                                        </div>

                                        <p id="box-3a-r1-c1-d2-dt2">P</p>
                                        <div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$tec2Final'])) {
                                                echo $_SESSION['$tec2Final'];
                                            }
                                            ?>
                                        </div>
                                        <p id="box-3a-r1-c1-d2-dt3">P</p>
                                        <div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$tec3Final'])) {
                                                echo $_SESSION['$tec3Final'];
                                            }
                                            ?>
                                        </div>
                                        <p id="box-3a-r1-c1-d2-dt4">P</p>
                                        <div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$tec4Final'])) {
                                                echo $_SESSION['$tec4Final'];
                                            }
                                            ?>
                                        </div>
                                        <p id="box-3a-r1-c1-d2-dt5">P</p>
                                        <div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$tec5Final'])) {
                                                echo $_SESSION['$tec5Final'];
                                            }
                                            ?>
                                        </div>
                                        <br>
                                        <p id="box-3a-r1-c1-d2-dt6">P</p>
                                        <div id="box-3a-r1-c1-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$tec6Final'])) {
                                                echo $_SESSION['$tec6Final'];
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div id="box-3a-r1-c2">
                                    <div id="box-3a-r1-c2-d1">
                                        <p id="box-3a-r1-c2-d1-dt1">COST OF <br><br>
                                            EQUIPMENT <br><br>
                                            INSTALLED</p>
                                    </div>
                                    <div id="box-3a-r1-c2-d2">
                                        <p id="box-3a-r1-c2-d2-dt1">P</p>
                                        <div id="box-3a-r1-c2-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$cei1Final'])) {
                                                echo $_SESSION['$cei1Final'];
                                            }
                                            ?>
                                        </div>
                                        <p id="box-3a-r1-c2-d2-dt2">P</p>
                                        <div id="box-3a-r1-c2-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$cei2Final'])) {
                                                echo $_SESSION['$cei2Final'];
                                            }
                                            ?>
                                        </div>
                                        <p id="box-3a-r1-c2-d2-dt3">P</p>
                                        <div id="box-3a-r1-c2-d2-i" class="sow-i-tmplt">
                                            <?php
                                            if (!empty($_SESSION['$cei3Final'])) {
                                                echo $_SESSION['$cei3Final'];
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div id="box-3a-r1-c3">
                                    <p id="box-3a-r1-c3-d1-dt1">NO. OF STOREYS</p>
                                    <div id="box-3a-r1-c3-d1-i-1" class="sow-i-tmplt">
                                        <?php
                                        if (!empty($_SESSION['$storeyFinal'])) {
                                            echo $_SESSION['$storeyFinal'];
                                        }
                                        ?>
                                    </div>
                                    <p id="box-3a-r1-c3-d1-dt2">TOTAL FLOOR</p>
                                    <p id="box-3a-r1-c3-d1-dt3">AREA</p>
                                    <div id="box-3a-r1-c3-d1-i-2" class="sow-i-tmplt">
                                        <?php
                                        if (!empty($_SESSION['$floorAreaFinal'])) {
                                            echo $_SESSION['$floorAreaFinal'];
                                        }
                                        ?>
                                    </div>
                                    <p id="box-3a-r1-c3-d1-dt4">PROPOSED DATE</p>
                                    <p id="box-3a-r1-c3-d1-dt5">OF CONSTRUCTION</p>
                                    <div id="box-3a-r1-c3-d1-i-3" class="sow-i-tmplt">
                                        <?php
                                        if (!empty($_SESSION['$constructionDateFinal'])) {
                                            echo $_SESSION['$constructionDateFinal'];
                                        }
                                        ?>
                                    </div>
                                    <p id="box-3a-r1-c3-d1-dt6">MATERIALS OF CONST.</p>
                                    <p id="box-3a-r1-c3-d1-dt7">(WOOD, CONC, STEEL, MIXED)</p>
                                    <div id="box-3a-r1-c3-d1-i-4" class="sow-i-tmplt">
                                        <?php
                                        if (!empty($_SESSION['$o4Final'])) {
                                            echo $_SESSION['$o4Final'];
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>					

                            <div id="box-4">			
                                <div id="box-4-title">
                                    <p id="box-4-name" class="no-tplt">
                                        BOX 4 (TO BE ACCOMPLISHED BY THE DIVISION/SECTION CONCERNED)
                                    </p>
                                </div>

                                <div id="box-4-r1" class="box-4-template">                                    
                                    <p id="box-4-r1-c1-d1-dt1">ASSESSED FEES</p>                                                                            
                                </div>

                                <div id="box-4-r2" class="box-4-table">
                                    <table id="box-4-r2-table">
                                        <col class="col-1">
                                        <col class="col-2">
                                        <col class="col-3">
                                        <col class="col-4">
                                        <col class="col-5">
                                        <thead>
                                            <tr>
                                                <td></td>
                                                <td>AMOUNT DUE</td>
                                                <td>ASSESSED BY</td>
                                                <td>O.R. NUMBER</td>
                                                <td>DATE PAID</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>LAND USE/ZONING</td>
                                                <td id="z1"></td>
                                                <td id="z2"></td>
                                                <td id="z3"></td>
                                                <td id="z4"></td>
                                            </tr>
                                            <tr>
                                                <td>LAND & GRADE</td>
                                                <td id="lg1"></td>
                                                <td id="lg2"></td>
                                                <td id="lg3"></td>
                                                <td id="lg4"></td>
                                            </tr>
                                            <tr>
                                                <td>BUILDING</td>
                                                <td id="b1"></td>
                                                <td id="b2"></td>
                                                <td id="b3"></td>
                                                <td id="b4"></td>
                                            </tr>
                                            <tr>
                                                <td>PLUMBING</td>
                                                <td id="pl1"></td>
                                                <td id="pl2"></td>
                                                <td id="pl3"></td>
                                                <td id="pl4"></td>
                                            </tr>
                                            <tr>
                                                <td>ELECTRICAL</td>
                                                <td id="e1"></td>
                                                <td id="e2"></td>
                                                <td id="e3"></td>
                                                <td id="e4"></td>
                                            </tr>
                                            <tr>
                                                <td>MECHANICAL</td>
                                                <td id="m1"></td>
                                                <td id="m2"></td>
                                                <td id="m3"></td>
                                                <td id="m4"></td>
                                            </tr>
                                            <tr>
                                                <td>INSPECTION FEE</td>
                                                <td id="ie1"></td>
                                                <td id="ie2"></td>
                                                <td id="ie3"></td>
                                                <td id="ie4"></td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL</td>
                                                <td id="t1"></td>
                                                <td id="t2"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div id="box-4-r3">
                                    <div id="box-4-r3-d1" class="box-4-name-template">
                                        <p id="box-4-r3-d1-dt1">REVIEWED BY:</p>
                                        <p id="box-4-r3-d1-dt2">CHIEF, PROCESSING DIVISION/SECTION</p>
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
                                    <div id="box-5-r1">                                                                            
                                        <p id="box-5-r1-c1-d1-dt1">PROGRESS FLOW</p>                                                                           
                                    </div>

                                    <div id="box-5-r2">
                                        <table id="box-5-r2-table">
                                            <col class="col-6">
                                            <col class="col-7">
                                            <col class="col-8">
                                            <col class="col-9">
                                            <col class="col-10">
                                            <col class="col-11">
                                            <col class="col-12">

                                            <thead>
                                                <tr>
                                                    <td>NOTED:</td>
                                                    <td colspan="2">IN</td>
                                                    <td colspan="2">OUT</td>
                                                    <td>ACTION/</td>
                                                    <td>PROCESSED</td>
                                                </tr>
                                            </thead>
                                            <tbody>
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
                                                    <td id="rr1"></td>
                                                    <td id="rr2"></td>
                                                    <td id="rr3"></td>
                                                    <td id="rr4"></td>
                                                    <td id="rr5"></td>
                                                    <td id="rr6"></td>
                                                </tr>

                                                <tr>
                                                    <td>LAND USE and ZONING</td>
                                                    <td id="za1"></td>
                                                    <td id="za2"></td>
                                                    <td id="za3"></td>
                                                    <td id="za4"></td>
                                                    <td id="za5"></td>
                                                    <td id="za6"></td>
                                                </tr>
                                                <tr>
                                                    <td>GEODETIC (LINE & GRADE)</td>
                                                    <td id="lga1"></td>
                                                    <td id="lga2"></td>
                                                    <td id="lga3"></td>
                                                    <td id="lga4"></td>
                                                    <td id="lga5"></td>
                                                    <td id="lga6"></td>
                                                </tr>
                                                <tr>
                                                    <td>ARCHITECTURAL</td>
                                                    <td id="aa1"></td>
                                                    <td id="aa2"></td>
                                                    <td id="aa3"></td>
                                                    <td id="aa4"></td>
                                                    <td id="aa5"></td>
                                                    <td id="aa6"></td>
                                                </tr>
                                                <tr>
                                                    <td>STRUCTURAL</td>
                                                    <td id="s1"></td>
                                                    <td id="s2"></td>
                                                    <td id="s3"></td>
                                                    <td id="s4"></td>
                                                    <td id="s5"></td>
                                                    <td id="s6"></td>
                                                </tr>
                                                <tr>
                                                    <td>SANITARY/PLUMBING</td>
                                                    <td id="pa1"></td>
                                                    <td id="pa2"></td>
                                                    <td id="pa3"></td>
                                                    <td id="pa4"></td>
                                                    <td id="pa5"></td>
                                                    <td id="pa6"></td>
                                                </tr>
                                                <tr>
                                                    <td>ELECTRICAL</td>
                                                    <td id="ea1"></td>
                                                    <td id="ea2"></td>
                                                    <td id="ea3"></td>
                                                    <td id="ea4"></td>
                                                    <td id="ea5"></td>
                                                    <td id="ea6"></td>
                                                </tr>
                                                <tr>
                                                    <td>MECHANICAL</td>
                                                    <td id="ma1"></td>
                                                    <td id="ma2"></td>
                                                    <td id="ma3"></td>
                                                    <td id="ma4"></td>
                                                    <td id="ma5"></td>
                                                    <td id="ma6"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div id="box-5-r4">                                    
                                        WE HEREBY AFFIX OUR HANDS 
                                        SIGNIFYING OUR CONFORMITY TO 
                                        THE INFORMATION HEREIN ABOVE 
                                        SETFORTH.                                    
                                    </div>
                                </div>
                            </div>

                            <div id="box-6">
                                <div id="box-6-title">
                                    <p id="box-6-name" class="no-tplt">BOX 6</p>
                                </div>

                                <div id="box-6-info">
                                    <div id="box-6-r1">
                                        <div id="box-6-r1-c1">
                                            <p id="box-6-r1-c1-dt1">ARCHITECT/CIVIL ENGINEER</p>
                                            <p id="box-6-r1-c1-dt2">SIGNED AND SEALED PLANS & SPECIFICATIONS</p>
                                        </div>
                                        <div id="box-6-r1-c2">
                                            <p id="box-6-r1-c2-dt1">PRC REG. NO</p>
                                            <div id="box-6-r1-c1-d1-i">
                                                <?php
                                                if (!empty($_SESSION['$SPRCFinal'])) {
                                                    echo $_SESSION['$SPRCFinal'];
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="box-6-r2">
                                        <div id="box-6-r2-c1">
                                            <p id="box-6-r2-c1-dt1">PRINT NAME</p>
                                            <div id="box-6-r2-c1-i">
                                                <?php
                                                if (!empty($_SESSION['$SFirstNameFinal']) && !empty($_SESSION['$SmiddleInitialFinal']) && !empty($_SESSION['$SlastNameFinal'])) {
                                                    echo $_SESSION['$SFirstNameFinal'] . " " . $_SESSION['$SmiddleInitialFinal'] . " " . $_SESSION['$SlastNameFinal'];
                                                }
                                                ?>
                                            </div>
                                        </div> 
                                    </div>

                                    <div id="box-6-r3">
                                        <div id="box-6-r3-c1">
                                            <p id="box-6-r3-c1-d1-dt1">ADDRESS</p>
                                            <div id="box-6-r3-c1-d1-i">
                                                <?php
                                                if (!empty($_SESSION['$SaddressFinal'])) {
                                                    echo $_SESSION['$SaddressFinal'];
                                                }
                                                ?>
                                            </div>
                                        </div> 
                                    </div>
                                    <div id="box-6-r4">
                                        <div id="box-6-r4-c1">
                                            <p id="box-6-r4-c1-d1-dt1">SIGNATURE</p>                                        
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div id="box-8">
                                <div id="box-8-title">
                                    <p id="box-8-name" class="no-tplt">BOX 8</p>
                                </div>

                                <div id="box-8-info">
                                    <div id="box-8-r1">
                                        <div id="box-8-r1-c1">
                                            <p id="box-8-r1-c1-dt1">SIGNATURE</p>                                        
                                            <p id="box-8-r1-c1-dt2">APPLICANT</p>
                                            <div id="box-8-r1-c1-i2"></div>
                                        </div>
                                    </div>
                                    <div id="box-8-r2">                                    
                                        <table id="box-8-r2-table">
                                            <col class="col-13">
                                            <col class="col-13">
                                            <col class="col-14">
                                            <thead>
                                                <tr>
                                                    <td>COMMUNITY TAX CERT.</td>
                                                    <td>DATE ISSUED</td>
                                                    <td>PLACE ISSUED</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        if (!empty($_SESSION['$ctcFinal'])) {
                                                            echo $_SESSION['$ctcFinal'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if (!empty($_SESSION['$ctcDateFinal'])) {
                                                            echo $_SESSION['$ctcDateFinal'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if (!empty($_SESSION['$ctcPlaceFinal'])) {
                                                            echo $_SESSION['$ctcPlaceFinal'];
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                
                                </div>
                                <div id="box-8-end">
                                    <p id="box-8-end-p">WITH MY CONSENT</p>
                                </div>
                            </div>


                            <div id="box-7">
                                <div id="box-7-title">
                                    <p id="box-7-name" class="no-tplt">BOX 7</p>
                                </div>

                                <div id="box-7-info">
                                    <div id="box-7-r1">
                                        <div id="box-7-r1-c1">
                                            <p id="box-7-r1-c1-dt1">ARCHITECT/CIVIL ENGINEER</p>
                                            <p id="box-7-r1-c1-dt2">IN-CHARGE OF CONSTRUCTION</p>
                                        </div>
                                        <div id="box-7-r1-c2">
                                            <p id="box-7-r1-c2-dt1">PRC REG. NO</p>
                                            <div id="box-7-r1-c1-d1-i">
                                                <?php
                                                if (!empty($_SESSION['$CPRCFinal'])) {
                                                    echo $_SESSION['$CPRCFinal'];
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="box-7-r2">
                                        <div id="box-7-r2-c1-d1">	
                                            <div id="box-7-r2-c1-d1">
                                                <p id="box-7-r2-c1-d1-dt1">PRINT NAME</p>
                                                <div id="box-7-r2-c1-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$CFirstNameFinal']) && !empty($_SESSION['$CmiddleInitialFinal']) && !empty($_SESSION['$ClastNameFinal'])) {
                                                        echo $_SESSION['$CFirstNameFinal'] . " " . $_SESSION['$CmiddleInitialFinal'] . " " . $_SESSION['$ClastNameFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div id="box-7-r3">
                                        <div id="box-7-r3-c1"> 
                                            <div id="box-7-r3-c1-d1">
                                                <p id="box-7-r3-c1-d1-dt1">ADDRESS</p>
                                                <div id="box-7-r3-c1-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$CcaddressFinal'])) {
                                                        echo $_SESSION['$CcaddressFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div id="box-7-r4">
                                        <div id="box-7-r4-c1">
                                            <div id="box-7-r4-c1-d1">
                                                <p id="box-7-r4-c1-d1-dt1">PTR NO.</p>
                                                <div id="box-7-r4-c1-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$ptrNoFinal'])) {
                                                        echo $_SESSION['$ptrNoFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div> 
                                        </div>

                                        <div id="box-7-r4-c2">
                                            <div id="box-7-r4-c2-d1">
                                                <p id="box-7-r4-c2-d1-dt1">DATE ISSUED</p>
                                                <div id="box-7-r4-c2-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$dateIssuedFinal'])) {
                                                        echo $_SESSION['$dateIssuedFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="box-7-r4-c3">
                                            <div id="box-7-r4-c3-d1">
                                                <p id="box-7-r4-c3-d1-dt1">PLACE ISSUED</p>
                                                <div id="box-7-r4-c3-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$placeIssuedFinal'])) {
                                                        echo $_SESSION['$placeIssuedFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="box-7-r5">
                                        <div id="box-7-r5-c1">
                                            <div id="box-7-r5-c1-d1">
                                                <p id="box-7-r5-c1-d1-dt1">SIGNATURE</p>                                           
                                            </div> 
                                        </div>

                                        <div id="box-7-r5-c2">
                                            <div id="box-7-r5-c2-d1">
                                                <p id="box-7-r5-c2-d1-dt1">TIN</p>
                                                <div id="box-7-r5-c2-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$tinFinal'])) {
                                                        echo $_SESSION['$tinFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div id="box-9">
                                <div id="box-9-title">
                                    <p id="box-9-name">BOX 9(TO BE ACCOMPLISHED BY LOT OWNER)</p>
                                </div>

                                <div id="box-9-info">
                                    <div id="box-9-r1">
                                        <div id="box-9-r1-c1">
                                            <p id="box-9-r1-c1-dt1">TCT/OCT NO.</p>
                                            <div id="box-9-r1-c1-i">
                                                <?php
                                                if (!empty($_SESSION['$tctFinal'])) {
                                                    echo $_SESSION['$tctFinal'];
                                                }
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="box-9-r2">
                                        <div id="box-9-r2-c1-d1">	
                                            <div id="box-9-r2-c1-d1">
                                                <p id="box-9-r2-c1-d1-dt1">PRINT NAME OF LOT OWNER</p>
                                                <div id="box-9-r2-c1-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$OFirstNameFinal']) && !empty($_SESSION['$OmiddleInitialFinal']) && !empty($_SESSION['$OlastNameFinal'])) {
                                                        echo $_SESSION['$OFirstNameFinal'] . " " . $_SESSION['$OmiddleInitialFinal'] . " " . $_SESSION['$OlastNameFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div id="box-9-r3">
                                        <div id="box-9-r3-c1"> 
                                            <div id="box-9-r3-c1-d1">
                                                <p id="box-9-r3-c1-d1-dt1">ADDRESS</p>
                                                <div id="box-9-r3-c1-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$OcaddressFinal'])) {
                                                        echo $_SESSION['$OcaddressFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="box-9-r4">
                                        <div id="box-9-r4-c1">
                                            <div id="box-9-r4-c1-d1">
                                                <p id="box-9-r4-c1-d1-dt1">COMMUNITY TAX CERT.</p>
                                                <div id="box-9-r4-c1-d1-i">
                                                    <?php
                                                    if (!empty($_SESSION['$OctcFinal'])) {
                                                        echo $_SESSION['$OctcFinal'];
                                                    }
                                                    ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="box-9-r5">
                                        <div id="box-9-r5-c1">
                                            <div id="box-9-r5-c1-d1">
                                                <p id="box-9-r5-c1-d1-dt1">SIGNATURE</p>                                            
                                            </div> 
                                        </div>					
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class = "buttons">                    
                    <form action="../client_validation/finish_app.php" method="POST">
                        <input type="submit" id="done" value="Done"/>
                        <input type="hidden" name="app_status" value="finished"/>
                    </form>
                </div>
            </div>
        </div>


        <?php include_once '../common/footer.php'; ?>

    </body>
</html>
