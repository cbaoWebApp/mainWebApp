<?php
    require_once '../client_validation/requirements_data.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once '../common/head.php'; ?>

        <link rel="stylesheet" href="../css/appReq.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">

        <script src="../jquery/jquery-1.10.2.min.js"></script>
        <script src="../jquery/jquery-ui.min.js"></script>
        <script src="../js/cancel.js"></script>
    </head>
    <body>	

        <?php include_once '../common/track_header.php'; ?>

        <div class="content">
            <div class="main">
                <h1 id = "heading">Application Requirements</h1>	
            </div>
        </div>
        <div class="container">	
            <div class = "col-md-3">
                <div id="sidebar">
                    <div id="nav-anchor"></div>
                    <nav>
                        <ul>
                            <li><a href="trackAppHome.php"><div>Track Application</div></a></li>
                            <li><a href="appReq.php"><div>Application Requirements</div></a></li>
                            <li><a href="appRecord.php"><div>View Application Record</div></a></li>
                        </ul>
                    </nav>
                    <input type="button" id="cancel" value="Cancel Application"/>
                </div>

            </div>
            <div class = "col-md-9">
                <div class = "scroll">
                    <div>                        
                        <p class="heading">Applicant is the registered owner</p>                         
                        <div class="contents">
                            <p>
                                <input type="checkbox" id="title" name="title" value="1" disabled="true" readonly <?php if(!empty($_SESSION["col_0"])){echo ($_SESSION["col_0"] == 'true' ? 'checked' : '');} ?> >
                                Certified true copy of the title (updated for more than 3 mos.), or <br> 
                            </p>    
                            <p>
                                <input type="checkbox" id="award" name="award" disabled="true" readonly <?php if(!empty($_SESSION["col_1"])){echo ($_SESSION["col_1"] == 'true' ? 'checked' : '');} ?> >
                                Copy of Award <br>   
                            </p>    
                            <p>
                                <input type="checkbox" id="plan" name="plan" disabled="true" readonly <?php if(!empty($_SESSION["col_2"])){echo ($_SESSION["col_2"] == 'true' ? 'checked' : '');} ?> >
                                Survey plan prepared by a Geodetic Engineer <br>  
                            </p>    

                        </div>

                        <p class="heading">Applicant is not the registered owner</p>
                        <div class="contents">
                            <p>
                                <input type="checkbox" id="lease" name="lease" disabled="true" readonly <?php if(!empty($_SESSION["col_3"])){echo ($_SESSION["col_3"] == 'true' ? 'checked' : '');} ?> >
                                Certified Photocopy / Original / duplicate copy of the Contract of Lease, or <br> 
                            </p>
                            <p>
                                <input type="checkbox" id="ados" name="ados" disabled="true" readonly <?php if(!empty($_SESSION["col_4"])){echo ($_SESSION["col_4"] == 'true' ? 'checked' : '');} ?> >
                                Certified Photocopy / Original / duplicate copy of the Absolute Deed of Sale, or <br> 
                            </p>
                            <p>
                                <input type="checkbox" id="cdos" name="cdos" disabled="true" readonly <?php if(!empty($_SESSION["col_5"])){echo ($_SESSION["col_5"] == 'true' ? 'checked' : '');} ?> >
                                Certified Photocopy / Original / duplicate copy of Conditional Deed of Sale, or <br>  
                            </p>
                            <p>
                                <input type="checkbox" id="coa" name="coa" disabled="true" readonly <?php if(!empty($_SESSION["col_6"])){echo ($_SESSION["col_6"] == 'true' ? 'checked' : '');} ?> >
                                Original Copy of Authority to construct on the subject property <br> 
                            </p>

                        </div>

                        <p>
                            <input type="checkbox" id="tax" name="tax" disabled="true" readonly <?php if(!empty($_SESSION["col_7"])){echo ($_SESSION["col_7"] == 'true' ? 'checked' : '');} ?> >
                            Tax declaration from the City Assessor's Office with the Documentary Stamp
                        </p>
                        <p>
                            <input type="checkbox" id="rpt" name="rpt" disabled="true" readonly <?php if(!empty($_SESSION["col_8"])){echo ($_SESSION["col_8"] == 'true' ? 'checked' : '');} ?> >
                            Latest quarter of the real property tax receipt or certificate of non-tax delinquency with
                            Documentary Stamp from City Treasurer's Office
                        </p>
                        <p>
                            <input type="checkbox" id="form" name="form" disabled="true" readonly <?php if(!empty($_SESSION["col_9"])){echo ($_SESSION["col_9"] == 'true' ? 'checked' : '');} ?> >
                            Duly accomplished Building Permit forms
                        </p>
                        <p>
                            <input type="checkbox" id="plans" name="plans" disabled="true" readonly <?php if(!empty($_SESSION["col_10"])){echo ($_SESSION["col_10"] == 'true' ? 'checked' : '');} ?> >
                            Building Plans (to be signed by the Applicants/Owner)
                        </p>
                        <p>
                            <input type="checkbox" id="struc" name="struc" disabled="true" readonly <?php if(!empty($_SESSION["col_11"])){echo ($_SESSION["col_11"] == 'true' ? 'checked' : '');} ?> >
                            Structural Design and Analysis for buildings with floor area of 20 sq.m. or more
                        </p>
                        <p>
                            <input type="checkbox" id="specs" name="specs" disabled="true" readonly <?php if(!empty($_SESSION["col_12"])){echo ($_SESSION["col_12"] == 'true' ? 'checked' : '');} ?> >
                            Building Specifications
                        </p>
                        <p>
                            <input type="checkbox" id="bom" name="bom" disabled="true" readonly <?php if(!empty($_SESSION["col_13"])){echo ($_SESSION["col_13"] == 'true' ? 'checked' : '');} ?> >
                            Bill of Materials
                        </p>
                        <p>**Note: Items V-IX must be duly signed and sealed by licensed practitioners (Civil Engineer, Architect, Sanitary
                            Engineer/Master Plumber, Electrical Engineer, Mechanical Engineer as the case may be)</p>
                        <p>
                            <input type="checkbox" id="pic" name="pic" disabled="true" readonly <?php if(!empty($_SESSION["col_14"])){echo ($_SESSION["col_14"] == 'true' ? 'checked' : '');} ?> >
                            Clear latest picture of site/area (Taken at least a week before application)
                        </p>
                        <p>
                            <input type="checkbox" id="soil" name="soil" disabled="true" readonly <?php if(!empty($_SESSION["col_15"])){echo ($_SESSION["col_15"] == 'true' ? 'checked' : '');} ?> >
                            Soil analysis for concrete and commercial/residential buildings with 3 storeys or over
                        </p>

                        <p class="heading">Environmental Compliance Certificate for building as follows:</p>
                        <div class="contents">                            
                            <p>
                                <input type="checkbox" id="base" name="base" disabled="true" readonly <?php if(!empty($_SESSION["col_16"])){echo ($_SESSION["col_16"] == 'true' ? 'checked' : '');} ?> >
                                3 storeys with basement
                            </p>
                            <p>
                                <input type="checkbox" id="above" name="above" disabled="true" readonly <?php if(!empty($_SESSION["col_17"])){echo ($_SESSION["col_17"] == 'true' ? 'checked' : '');} ?> >
                                4 storeys and above 
                            </p>                                                           
                        </div>
                        
                        <p>
                            <input type="checkbox" id="prc" name="prc" disabled="true" readonly <?php if(!empty($_SESSION["col_18"])){echo ($_SESSION["col_18"] == 'true' ? 'checked' : '');} ?> >
                            Photocopy of updated professional tax receipt and Professional Requlations
                            Commision (PRC) identification of all professional signatories to the application forms 
                        </p>    
                        <p>
                            <input type="checkbox" id="zoning" name="zoning" disabled="true" readonly <?php if(!empty($_SESSION["col_19"])){echo ($_SESSION["col_19"] == 'true' ? 'checked' : '');} ?> >
                            Zoning Compliance Certificate from City Planning & Development Office
                        </p>
                        <p>
                            <input type="checkbox" id="fire" name="fire" disabled="true" readonly <?php if(!empty($_SESSION["col_20"])){echo ($_SESSION["col_20"] == 'true' ? 'checked' : '');} ?> >
                            Fire Safety Evaluation Clearance from Fire Department
                        </p>
                        <p>
                            <input type="checkbox" id="cepmo" name="cepmo" disabled="true" readonly <?php if(!empty($_SESSION["col_21"])){echo ($_SESSION["col_21"] == 'true' ? 'checked' : '');} ?>  >
                            WWMS BP Certificate from CEPMO (septic tank or sewerage)
                        </p>
                        <p>
                            <input type="checkbox" id="log" name="log" disabled="true" readonly <?php if(!empty($_SESSION["col_22"])){echo ($_SESSION["col_22"] == 'true' ? 'checked' : '');} ?> >
                            Construction Logbook
                        </p>
                        <p>
                            <input type="checkbox" id="tarp" name="tarp" disabled="true" readonly <?php if(!empty($_SESSION["col_23"])){echo ($_SESSION["col_23"] == 'true' ? 'checked' : '');} ?> >
                            Construction Tarpaulin
                        </p>

                        <p class="heading">Clearances from other government agencies, pursuant to no. 12 (B) of Section 302 of 
                            the IRR of the National Building Code (P.D. 1096), if applicable</p>
                        <div class="contents">                            
                            <p>
                                <input type="checkbox" id="dpwh" name="dpwh" disabled="true" readonly <?php if(!empty($_SESSION["col_24"])){echo ($_SESSION["col_24"] == 'true' ? 'checked' : '');} ?> >
                                DPWH-if property is located alongside national road
                            </p>
                            <p>
                                <input type="checkbox" id="ato" name="ato" disabled="true" readonly <?php if(!empty($_SESSION["col_25"])){echo ($_SESSION["col_25"] == 'true' ? 'checked' : '');} ?> >
                                Aviation Transportation Office (ATO)-if property is located alongside airport
                            </p> 
                            <p>
                                <input type="checkbox" id="psg" name="psg" disabled="true" readonly <?php if(!empty($_SESSION["col_26"])){echo ($_SESSION["col_26"] == 'true' ? 'checked' : '');} ?> >
                                Presidential Security Group (PSG)-if property is located near mansion house
                            </p>                            
                        </div>

                        <p>
                            <input type="checkbox" id="atty" name="atty" disabled="true" readonly <?php if(!empty($_SESSION["col_27"])){echo ($_SESSION["col_27"] == 'true' ? 'checked' : '');} ?> >
                            Duly notarized authorization to process and receive approved permit or special power 
                            of attorney (when applicable)
                        </p>

                    </div>
                </div>
            </div>										
        </div>	
        
        <div id="cancel_popup">
            <form class="form-signin" id="cancel_popup_btns">
                    <p>
                        You are about to cancel your application. Please be advised
                        to look at these links for our <a href="#">Terms of Agreement</a>
                        and <a href="#">Rules</a> when canceling an application.
                    </p>                                

                <input type="button" id="cancel_btn" value="Yes, Cancel my application"/>
                <input type="button" id="back_to_page" value="No, I do not want to cancel my application"/>
            </form>
        </div>
        
        <div id="accept_popup">
            <form class="form-signin" action="../client_validation/cancel.php" method="POST">
                    <p>
                        Your application was successfully canceled. Please visit
                        CBAO to acquire your documents and papers.
                    </p>    
                <input type="submit" id="accept_btn" value="Okay"/>                
            </form>
        </div>
        
        <?php include_once '../common/footer.php'; ?>
    </body>
</html>

