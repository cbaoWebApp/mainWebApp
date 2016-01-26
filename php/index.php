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
			if( ! empty($_SESSION['login_error_msg']))
			{
				echo "display:block !important;";
			}
		?>
		}
		</style>
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

                    <h1 id = "heading">Building Permit Application</h1>
                    <p>Apply for a building permit now!</p>

                    <div class = "buttons">
                        <p><a href="bpForm.html" class="btn1">Apply</a></p>
                        <p class="btn2">Track Application</p>
						
                        <div class = "logFields">
                            <br>
							<?php
									if( ! empty($_SESSION['login_error_msg']))
									{
										//display the message however you want
										echo "<p>".$_SESSION['login_error_msg']."</p>";
										unset( $_SESSION['login_error_msg']);
									}
							?>
                            <form class="form-signin" action="log_input.php" method="POST" id="logInputForm">
                                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                                <input type="password" id="inputPassword" class="form-control" name="pw" placeholder="Password" required>
								<input type="submit" class="btn1" value="Search">
                            </form>                            
                            <a href="index.html" class="btn2">Cancel</a></p>
                        </div>
                        <br>
                        <br>
                        <p><a href="homerequirements.html" id = "link">View Application Requirements</a></p>
                    </div>

                    <!-- PC -->

                    <p><img class="img-responsive" src="img/pc.png" alt=""></p>
                    <br>
                    <p>Get realtime updates on your application</p>
                    <p>Save time and experience hassle free application procedures</p>
                    <br>
                    <p><a href="#" id = "link">Get to know more</a></p>
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

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".buttons .logFields").hide();
                $(".buttons .btn2").click(function () {
                    $(this).next().toggle();
                });
            });
        </script>

    </body>
</html>
