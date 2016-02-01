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

        <link rel="stylesheet" href="css/styles.css"> 
        <link rel="stylesheet" href="btstrp/css/bootstrap.css">

        <style>
            .logFields{
                <?php
                session_start();
                if (!empty($_SESSION['login_error_msg'])) {
                    echo "display:block !important;";
                }
                ?>
            }
        </style>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    </head>
    <body>
        <div class="header">
			<div class = "row">
				<div class = "col-md-4">
					<img id = "seal"  src="../../Client/img/seal.png" alt="">
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

                    <h1 id = "heading">Building Permit Application</h1>
                    <p>Apply for a building permit now!</p>
                    <br>

                    <div class = "buttons">
                        <input type ="button" id = "apply" value = "Apply"
                               onclick="apply_redirect()"/>

                        <input type ="button" id = "trackApplication" class="btn2" 
                               value = "Track Application"/>
                        <br>
                        <div class = "logFields">
                            <br>

                            <?php
                            if (!empty($_SESSION['login_error_msg'])) {
                                //display the message however you want
                                echo "<p>" . $_SESSION['login_error_msg'] . "</p>";
                                unset($_SESSION['login_error_msg']);
                            }
                            ?>
                            <div id="error_area"></div>

                        </div>
                    </div>

                    <br>
                    <h4><a href="homerequirements.html" id = "link">View Application Requirements</a></h4>
                    <!-- PC -->

                    <p><img class="img-responsive" src="../../Client/img/pc.png" alt=""></p>
                    <br>
                    <p>Get realtime updates on your application</p>
                    <p>Save time and experience hassle free application procedures</p>
                    <br>
                    <h4><a href="#" id = "link">Get to know more</a></h4>
                </div>
            </div>
        </div>

        <div id="login-popup" title="Track Application">
            <form class="form-signin" action="../client_validation/log_input.php" method="POST" id="logInputForm">                                  
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                <input type="password" id="inputPassword" class="form-control" name="pw" placeholder="Password" required>                
                <br>
                <input type="submit" id = "search" class="btn1" value="Search">
                <button id = "cancel">Cancel</button>                
            </form>
        </div>

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<footer>
			<div class="footer" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
							<h3> Contact Us </h3>
							<ul>
								<li> <a href="#"> (074)-998-7654 </a> </li>
								<li> <a href="#"> cbao_baguio@gmail.com </a> </li>
								<li> <a href="#"> http:www.baguio.gov.ph </a> </li>
							</ul>
						</div>
					</div>
					<!--/.row--> 
				</div>
				<!--/.container--> 
			</div>
			<!--/.footer-->
			
			<div class="footer-bottom">
				<div class="container">
					<p class="pull-left"> Copyright © City Building and Architecture Office 2016. All right reserved. </p>
				</div>
			</div>
			<!--/.footer-bottom--> 
		</footer>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
                                   function apply_redirect() {
                                       window.location.assign('../../Client/registration/bpForm.php');
                                   }

                                   $(function () {
                                       $("#login-popup").dialog({
                                           autoOpen: false,
                                           closeOnEscape: false,
                                           open: function (event, ui) {
                                               $("ui-dialog-titlebar-close", ui.dialog | ui).hide();
                                           },
                                           buttons: [
                                               {
                                                   text: "Search",
                                                   "class": 'btn1',
                                                   click: function () {
                                                       alert("log in!");
                                                   }
                                               },
                                               {
                                                   text: "Cancel",
                                                   click: function () {
                                                       $(this).dialog("close");
                                                   }
                                               }
                                           ],
                                           title: "Track Application",
                                           position: "center"
                                       });

                                       $("#trackApplication").click(function () {
                                           $("login-popup").dialog("open");
                                       });

                                   });
        </script>

    </body>
</html>


