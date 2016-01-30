<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../Client/common/head.php'; ?>

        <link rel="stylesheet" href="css/appReq.css">
        <link rel="stylesheet" href="btstrp/css/bootstrap.css">
    </head>
    <body>	
        
        <?php include '../../Client/common/track_header.php'; ?>
        
        <div class="content">
            <div class="main">
                <h1 id = "heading">Application Record</h1>	
            </div>
        </div>
        <div class="container">	
            <div class = "col-md-3">
                <div id="sidebar">
                    <div id="nav-anchor"></div>
                    <nav>
                        <ul>
                            <li><a href="trackAppHome.html"><div>Track Application</div></a></li>
                            <li><a href="appReq.html"><div>Application Requirements</div></a></li>
                            <li><a href="appRecord.html"><div>View Application Record</div></a></li>
                            <li><a href="../index.html"><div>Cancel Application</div></a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class = "col-md-9">
                <div class = "scroll">
                    <div class="collapsible">
                        <img class="rotate" src="../img/green-triangle.png"><p class="heading">&nbsp; Applicant is the registered owner</img></p>
                        <div class="contents">
                            <ul>
                                <li> Certified true copy of the title (updated for more than 3 mos.), or <br> 
                                    Copy of Award </li>
                                <li> Survey plan prepared by a Geodetic Engineer </li>
                            </ul>
                        </div>

                        <img class="rotate" src="../img/green-triangle.png"/><p class="heading">&nbsp; Applicant is not the registered owner</p>
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

                        <img class="rotate" src="../img/green-triangle.png"/><p class="heading">&nbsp; Environmental Compliance Certificate for building as follows:</p>
                        <div class="contents">
                            <ul>
                                <li> 3 storeys with basement</li>
                                <li> 4 storeys and above</li>
                            </ul>
                        </div>
                        <p>Photocopy of updated professional tax receipt and Professional Requlations <br>
                            Commision (PRC) identification of all professional signatories to the application forms <br>
                            and plans.</p>
                        <p>Zoning Compliance Certificate from City Planning & Development Office</p>
                        <p>Fire Safety Evaluation Clearance from Fire Department</p>
                        <p>WWMS BP Certificate from CEPMO (septic tank or sewerage)</p>
                        <p >Construction Logbook</p>
                        <p>Construction Tarpaulin</p>

                        <img class="rotate" src="../img/green-triangle.png"/><p class="heading">&nbsp; Clearances from other government agencies, pursuant to no. 12 (B) of Section 302 of <br>
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
            });
        </script>
    </body>

</html>

