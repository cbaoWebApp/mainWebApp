<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CBAO Web Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="en" content="CBAO Web Application">
        <meta name="author" content="SLUSCIS">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="../css/receivingRequirements.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		  
		  <script language="javascript" type="text/javascript">
			function uncheck(obj){
						
						if ($('#owner').is(':checked')) {
							$('#notown :input').attr('disabled', true);
						} else {
							$('#notown :input').removeAttr('disabled');
						}   
			}
			
			function uncheck1(obj){
						
						if ($('#notowner').is(':checked')) {
							$('#own :input').attr('disabled', true);
						} else {
							$('#own :input').removeAttr('disabled');
						}   
			}
			
			function stor1(obj){
						
						if ($('#stor3').is(':checked')) {
							$('#stor4x :input').attr('disabled', true);
						} else {
							$('#stor4x :input').removeAttr('disabled');
						}   
			}
			
			function stor2(obj){
						
						if ($('#stor4').is(':checked')) {
							$('#stor3x :input').attr('disabled', true);
						} else {
							$('#stor3x :input').removeAttr('disabled');
						}   
			}
					
		
			
        
</script>

    </head>
    <body>
    <div class="header">
            <div class = "row">
                <div class = "col-md-5">
                    <p><img class = "img-responsive" src="../img/seal.png" alt=""></p>
                </div>
                <div class = "col-md-5">
                    <p>City Government of Baguio</p>
                </div>
                <div class = "col-md-1">
                    <p id = "logOut"><a href = "../index.html">Log Out</a></p>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="receivingHome.html">Receiving Office</a>
            </div>
            <ul class="nav navbar-nav">
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp; Applications</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; Notifications</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
            </ul>
          </div>
        </nav>

  <br>
		<form action="requirement.php" method="post">
  <div class = "container">
            <div class="content">
                <div class="main">
                    <div class="collapsible">
                       
                        <div id="own" class="contents">
						 <input type="checkbox" id="owner" name="owner" value="owner" onclick="javascript:uncheck(this);" <?php if(!empty($_SESSION["owner1"])){echo ($_SESSION["owner1"] == 'true' ? 'checked' : '');} ?> >Applicant is the registered owner</input>
                            <ul>
                                <input type="checkbox" id="trueTitle" name="trueTitle" value="trueTitle" <?php if(!empty($_SESSION["trueTitle1"])){echo ($_SESSION["trueTitle1"] == 'true' ? 'checked' : '');} ?> > Certified true copy of the title (updated for more than 3 mos.), or  
                                    Copy of Award </input><br>
                                <input type="checkbox" id="surveyPlan"  name="surveyPlan" value="surveyPlan" <?php if(!empty($_SESSION["surveyPlan1"])){echo ($_SESSION["surveyPlan1"] == 'true' ? 'checked' : ''); }?> >  Survey plan prepared by a Geodetic Engineer</input>
                            </ul>
                        </div>

                        
                        <div id="notown" class="contents">
						<input type="checkbox" id="notowner" name="notowner" value="notowner" onclick="javascript:uncheck1(this);" <?php if(!empty($_SESSION["notowner1"])){echo ($_SESSION["notowner1"] == 'true' ? 'checked' : ''); }?>>Applicant is not the registered owner</input>
                            <ul>
                                  <input type="checkbox" id="contractLease" name="contractLease" value="contractLease" <?php if(!empty($_SESSION["contractLease1"])){echo ($_SESSION["contractLease1"] == 'true' ? 'checked' : ''); }?>> Certified Photocopy / Original / duplicate copy of the Contract of Lease, or </input><br>
                                  <input type="checkbox" id="deedSale" name="deedSale" value="deedSale" <?php if(!empty($_SESSION["deedSale1"])){echo ($_SESSION["deedSale1"] == 'true' ? 'checked' : ''); }?>> Certified Photocopy / Original / duplicate copy of the Absolute Deed of Sale, or </input><br>
                                  <input type="checkbox" id="conDeedSale"  name="conDeedSale" value="conDeedSale" <?php if(!empty($_SESSION["conDeedSale1"])){echo ($_SESSION["conDeedSale1"] == 'true' ? 'checked' : ''); }?>> Certified Photocopy / Original / duplicate copy of Conditional Deed of Sale, or </input><br>
                                  <input type="checkbox" id="constAuth" name="constAuth" value="constAuth" <?php if(!empty($_SESSION["constAuth1"])){ echo ($_SESSION["constAuth1"] == 'true' ? 'checked' : ''); }?>> Original Copy of Authority to construct on the subject property </input><br>
                            </ul>
                        </div>

                          <input type="checkbox" id="taxDec"  name="taxDec" value="taxDec" <?php if(!empty($_SESSION["taxDec1"])){ echo ($_SESSION["taxDec1"] == 'true' ? 'checked' : ''); }?>> Tax declaration from the City Assessor's Office with the Documentary Stamp</input><br>
                          <input type="checkbox" id="realPropTax"  name="realPropTax" value="realPropTax" <?php if(!empty($_SESSION["realPropTax1"])){ echo ($_SESSION["realPropTax1"] == 'true' ? 'checked' : ''); }?>> Latest quarter of the real property tax receipt or certificate of non-tax delinquency with <br>
                            Documentary Stamp from City Treasurer's Office</input><br>
                          <input type="checkbox" id="bpForm"  name="bpForm" value="bpForm" <?php if(!empty($_SESSION["bpForm1"])){ echo ($_SESSION["bpForm1"] == 'true' ? 'checked' : ''); }?>> Duly accomplished Building Permit forms</input><br>
                          <input type="checkbox" id="BuilPlan" name="BuilPlan" value="BuilPlan" <?php if(!empty($_SESSION["BuilPlan1"])){ echo ($_SESSION["BuilPlan1"] == 'true' ? 'checked' : ''); }?>> Building Plans (to be signed by the Applicants/Owner)</input><br>
                          <input type="checkbox" id="StrucDesign"  name="StrucDesign" value="StrucDesign" <?php if(!empty($_SESSION["StrucDesign1"])){ echo ($_SESSION["StrucDesign1"] == 'true' ? 'checked' : ''); }?>> Structural Design and Analysis for buildings with floor area of 20 sq.m. or more</input><br>
                          <input type="checkbox" id="BuildSpec" name="BuildSpec" value="BuildSpec" <?php if(!empty($_SESSION["BuildSpec1"])){ echo ($_SESSION["BuildSpec1"] == 'true' ? 'checked' : ''); }?>> Building Specifications</p>
                         <input type="checkbox" id="billMat" name="billMat" value="billMat" <?php if(!empty($_SESSION["billMat1"])){ echo ($_SESSION["billMat1"] == 'true' ? 'checked' : ''); }?>>Bill of Materials</input><br>
                        <p>**Note: Items V-IX must be duly signed and sealed by licensed practitioners (Civil Engineer, Architect, Sanitary <br>
                            Engineer/Master Plumber, Electrical Engineer, Mechanical Engineer as the case may be)</p>
                        <input type="checkbox" id="picSite" name="picSite" value="picSite" <?php if(!empty($_SESSION["picSite1"])){ echo ($_SESSION["picSite1"] == 'true' ? 'checked' : ''); }?>>Clear latest picture of site/area (Taken at least a week before application)</input><br>
                        <input type="checkbox" id="soilAnal" name="soilAnal" value="soilAnal" <?php if(!empty($_SESSION["soilAnal1"])){ echo ($_SESSION["soilAnal1"] == 'true' ? 'checked' : ''); }?>>Soil analysis for concrete and commercial/residential buildings with 3 storeys or over</input><br>

                        <input type="checkbox" id="ecc" name="ecc" value="ecc"<?php if(!empty($_SESSION["ecc1"])){echo ($_SESSION["ecc1"] == 'true' ? 'checked' : ''); }?>>Environmental Compliance Certificate for building as follows:</p>
                        <div class="contents">
                            <ul>
							<div id="stor3x">
                                <input type="checkbox" id="stor3" name="stor3" value="stor3" onclick="javascript:stor1(this);" <?php if(!empty($_SESSION["stor31"])){echo ($_SESSION["stor31"] == 'true' ? 'checked' : '');} ?>> 3 storeys with basement</input><br>
                              </div>
							 <div id="stor4x"> 
								<input type="checkbox" id="stor4" name="stor4" value="stor4" onclick="javascript:stor2(this);"<?php if(!empty($_SESSION["stor41"])){echo ($_SESSION["stor41"] == 'true' ? 'checked' : '');} ?>> 4 storeys and above</input><br>
                            </div>
							</ul>
                        </div>
                        <input type="checkbox" id="taxReceipt" name="taxReceipt" value="taxReceipt"<?php if(!empty($_SESSION["taxReceipt1"])){echo ($_SESSION["taxReceipt1"] == 'true' ? 'checked' : ''); }?> >Photocopy of updated professional tax receipt and Professional Requlations </input><br>
                            <p>Commision (PRC) identification of all professional signatories to the application forms <br>
                            and plans.</p>
                        <input type="checkbox" id="zoningCert" name="zoningCert" value="zoningCert" <?php if(!empty($_SESSION["zoningCert1"])){echo ($_SESSION["zoningCert1"] == 'true' ? 'checked' : ''); }?>> Zoning Compliance Certificate from City Planning & Development Office</input><br>
                        <input type="checkbox" id="FireCert" name="FireCert" value="FireCert" <?php if(!empty($_SESSION["FireCert1"])){echo ($_SESSION["FireCert1"] == 'true' ? 'checked' : ''); }?>> Fire Safety Evaluation Clearance from Fire Department</input><br>
                        <input type="checkbox" id="wmsCert" name="wmsCert" value="wmsCert" <?php if(!empty($_SESSION["wmsCert1"])){echo ($_SESSION["wmsCert1"] == 'true' ? 'checked' : ''); }?>> WWMS BP Certificate from CEPMO (septic tank or sewerage)</input><br>
                        <input type="checkbox" id="logbook"  name="logbook" value="logbook" <?php if(!empty($_SESSION["logbook1"])){echo ($_SESSION["logbook1"] == 'true' ? 'checked' : ''); }?>> Construction Logbook</input><br>
                        <input type="checkbox" id="tarpaulin" name="tarpaulin" value="tarpaulin" <?php if(!empty($_SESSION["tarpaulin1"])){echo ($_SESSION["tarpaulin1"] == 'true' ? 'checked' : ''); }?>> Construction Tarpaulin</input><br>

                        <input type="checkbox" id="clearance" name="clearance" value="clearance" <?php if(!empty($_SESSION["clearance1"])){echo ($_SESSION["clearance1"] == 'true' ? 'checked' : ''); }?>>Clearances from other government agencies, pursuant to no. 12 (B) of Section 302 of <br>
                            the IRR of the National Building Code (P.D. 1096), if applicable</input><br>
                        <div class="contents">
                            <ul>
                                <input type="checkbox" id="dpwh" name="dpwh" value="dpwh" <?php if(!empty($_SESSION["dpwh1"])){echo ($_SESSION["dpwh1"] == 'true' ? 'checked' : ''); }?>> a. DPWH-if property is located alongside national road</input><br>
                                <input type="checkbox" id="aviation" name="aviation" value="aviation" <?php if(!empty($_SESSION["aviation1"])){echo ($_SESSION["aviation1"] == 'true' ? 'checked' : ''); }?>> b. Aviation Transportation Office (ATO)-if property is located alongside airport </input><br>
                                <input type="checkbox" id="psg" name="psg" value="psg" <?php if(!empty($_SESSION["psg1"])){echo ($_SESSION["psg1"] == 'true' ? 'checked' : ''); }?>> c. Presidential Security Group (PSG)-if property is located near mansion house</input><br>
                            </ul>
                        </div>

                        <input type="checkbox" id="notarized" name="notarized" value="notarized" <?php if(!empty($_SESSION["notarized1"])){echo ($_SESSION["notarized1"] == 'true' ? 'checked' : ''); }?>>Duly notarized authorization to process and receive approved permit or special power <br>
                            of attorney (when applicable)</input><br>

                    </div>
                </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-7">
               </div>
                <div class="col-md-3">
            <button id="viewReq" type="submit" name="viewReq" onclick="window.location='checkStatus.php'">Save</button> 
            <button id="viewReq" name="viewReq" onclick="window.location.href='receivingHome.php'">Back</button> 
            </form>
        </div>
        <div class="col-md-2">
          <button id="viewReq" name="viewReq" onclick="window.location.href='receivingRequirements.php'">Forward to CPO</button> 
          </div>
          </div>
          <br>
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