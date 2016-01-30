<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../Client/common/head.php'; ?>

        <link rel="stylesheet" href="../../Client/css/homeReq.css">
        <link rel="stylesheet" href="../../Client/btstrp/css/bootstrap.css">
    </head>

    <body>
        <?php include '../../Client/common/header.php'; ?>

        <div class = "container">
            <div class="content">
                <div class="main">
                    <h1 id = "heading">Building Permit Requirements</h1>
                    <p id = "subheading">To apply for a building permit, you will need the following:</p>
                    <br>
                    <br>
                    <div class="collapsible">
                        <p class="heading"><img class="rotate" src="../../Client/img/green-triangle.png"/>&nbsp; Applicant is the registered owner</p>
                        <div class="contents">
                            <ul>
                                <li> Certified true copy of the title (updated for more than 3 mos.), or <br> 
                                    Copy of Award </li>
                                <li> Survey plan prepared by a Geodetic Engineer </li>
                            </ul>
                        </div>

                        <img class="rotate" src="../../Client/img/green-triangle.png"/><p class="heading">&nbsp; Applicant is not the registered owner</p>
                        <div class="contents">
                            <ul>
                                <li>Certified Photocopy / Original / duplicate copy of the Contract of Lease, or </li>
                                <li>Certified Photocopy / Original / duplicate copy of the Absolute Deed of Sale, or </li>
                                <li>Certified Photocopy / Original / duplicate copy of Conditional Deed of Sale, or </li>
                                <li>Original Copy of Authority to construct on the subject property </li>
                            </ul>
                        </div>

                        <p>Tax declaration from the City Assessor's Office with the Documentary Stamp</p>
                        <p>Latest quarter of the real property tax receipt or certificate of non-tax delinquency with <br>
                            Documentary Stamp from City Treasurer's Office</p>
                        <p>Duly accomplished Building Permit forms</p>
                        <p>Building Plans (to be signed by the Applicants/Owner)</p>
                        <p>Structural Design and Analysis for buildings with floor area of 20 sq.m. or more</p>
                        <p>Building Specifications</p>
                        <p>Bill of Materials</p>
                        <p>**Note: Items V-IX must be duly signed and sealed by licensed practitioners (Civil Engineer, Architect, Sanitary <br>
                            Engineer/Master Plumber, Electrical Engineer, Mechanical Engineer as the case may be)</p>
                        <p>Clear latest picture of site/area (Taken at least a week before application)</p>
                        <p>Soil analysis for concrete and commercial/residential buildings with 3 storeys or over</p>

                        <img class="rotate" src="../../Client/img/green-triangle.png"/><p class="heading">&nbsp; Environmental Compliance Certificate for building as follows:</p>
                        <div class="contents">
                            <ul>
                                <li> 3 storeys with basement</li>
                                <li> 4 storeys and above</li>
                            </ul>
                        </div>
                        <p>Photocopy of updated professional tax receipt and Professional Requlations <br>
                            Commission (PRC) identification of all professional signatories to the application forms <br>
                            and plans.</p>
                        <p>Zoning Compliance Certificate from City Planning & Development Office</p>
                        <p>Fire Safety Evaluation Clearance from Fire Department</p>
                        <p>WWMS BP Certificate from CEPMO (septic tank or sewerage)</p>
                        <p >Construction Logbook</p>
                        <p>Construction Tarpaulin</p>

                        <img class="rotate" src="../../Client/img/green-triangle.png"/><p class="heading">&nbsp; Clearances from other government agencies, pursuant to no. 12 (B) of Section 302 of <br>
                            the IRR of the National Building Code (P.D. 1096), if applicable</p>
                        <div class="contents">
                            <ul>
                                <li>DPWH-if property is located alongside national road</li>
                                <li>Aviation Transportation Office (ATO)-if property is located alongside airport </li>
                                <li>Presidential Security Group (PSG)-if property is located near mansion house</li>
                            </ul>
                        </div>

                        <p>Duly notarized authorization to process and receive approved permit or special power <br>
                            of attorney (when applicable)</p>

                    </div>
                    <br>
                    <br>
                    <!-- Buttons -->
                    <div class = "buttons">
                        <p><a href="../../Client/registration/bpForm.php" class="btn1">Apply</a></p>
                        <p class="btn2">Track Application</p>
                        <div class = "logFields">
                            <br>
                            <form class="form-signin" action="../client_validation/log_input.php" method="POST" id="logInputForm">                                                                
                                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                                <input type="password" id="inputPassword" class="form-control" name="pw" placeholder="Password" required>
                                <input type="submit" class="btn1" value="Search">
                            </form>                             
                                <a href="homerequirements.html" class="btn2">Cancel</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <?php include '../../Client/common/footer.php'; ?>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".collapsible .contents").hide();
                $(".collapsible .heading").click(function () {
                    $(this).next().toggle();
                });
            });
        </script>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".buttons .logFields").hide();
                $(".buttons .btn2").click(function () {
                    $(this).next().toggle();
                });
            });
        </script>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".collapsible .contents").hide();
                $(".collapsible .rotate").click(function () {
                    if ($(this).css("transform") == 'none') {
                        $(this).css("transform", "rotate(90deg)");
                        $(this).next().next().toggle();
                    } else {
                        $(this).css("transform", "");
                        $(this).next().next().toggle();
                    }
                });
            });
        </script>

    </body>
</html>


