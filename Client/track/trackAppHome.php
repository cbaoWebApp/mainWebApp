<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../Client/common/head.php'; ?>

        <link rel="stylesheet" href="css/trackAppHome.css">
        <link rel="stylesheet" href="btstrp/css/bootstrap.css">
    </head>
    <body>	
        
        <?php include '../../Client/common/track_header.php'; ?>
        
        <div class="content">
            <div class="main">
                <h1 id = "heading">Track Application</h1>	
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
                    <div class = "info">
                        <h5>Applicant Number:</h5>
                        <h5>Date of Application:</h5>
                        <h5>Applicant Name:</h5>	
                    </div>
                    <hr>

                    <div class = "sections">
                        <h4>Architectural Section</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="assessedTD" class="control-label col-xs-3">Time and Date Assessed:</label>
                                <h5>Your application is currently being assessed</h5>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="control-label col-xs-3">Comments:</label>
                            </div>
                            <div class="form-group">
                                <label for="appName" class="control-label col-xs-3">Fees:</label>
                            </div>
                        </form>
                        <div class = "buttons">
                            <button class="btn1">View Record</button>
                        </div>

                        <h4>Structural Section</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="assessedTD" class="control-label col-xs-3">Time and Date Assessed:</label>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="control-label col-xs-3">Comments:</label>
                            </div>
                            <div class="form-group">
                                <label for="appName" class="control-label col-xs-3">Fees:</label>
                            </div>
                        </form>
                        <div class = "buttons">
                            <button class="btn1">View Record</button>
                        </div>

                        <h4>Sanitary Section</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="assessedTD" class="control-label col-xs-3">Time and Date Assessed:</label>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="control-label col-xs-3">Comments:</label>
                            </div>
                            <div class="form-group">
                                <label for="appName" class="control-label col-xs-3">Fees:</label>
                            </div>
                        </form>
                        <div class = "buttons">
                            <button class="btn1">View Record</button>
                        </div>

                        <h4>Electrical Section</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="assessedTD" class="control-label col-xs-3">Time and Date Assessed:</label>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="control-label col-xs-3">Comments:</label>
                            </div>
                            <div class="form-group">
                                <label for="appName" class="control-label col-xs-3">Fees:</label>
                            </div>
                        </form>
                        <div class = "buttons">
                            <button class="btn1">View Record</button>
                        </div>


                        <h4>Mechanical Section</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="assessedTD" class="control-label col-xs-3">Time and Date Assessed:</label>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="control-label col-xs-3">Comments:</label>
                            </div>
                            <div class="form-group">
                                <label for="appName" class="control-label col-xs-3">Fees:</label>
                            </div>
                        </form>
                        <div class = "buttons">
                            <button class="btn1">View Record</button>
                        </div>

                        <hr>
                        <h4>Total Application Fees:</h4>
                    </div>
                </div>										
            </div>
        </div>

        <?php include '../../Client/common/footer.php'; ?>
        
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

