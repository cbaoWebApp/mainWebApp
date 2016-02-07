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

        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
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

                    <h1 id = "heading">CBAO Section Personnel Log In</h1>
                    <p>Log-in for CBAO Section Personnels</p>
                    <br>
                    <div class = "buttons">
                        <p class="btn1">Log In</p>
                        <div class = "logFields">
                            <br>
                            <form class="form-signin">
                                <input type="text" id="inputTinNo" class="form-control" placeholder="Tin Number" required autofocus>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                              </form>
                            <p><button id="personnel-login-btn" class="btn1" onclick="login()">Log in</button>
                            <a href="index.html" class="btn2">Cancel</a></p>
                        </div>
                        <br>
                        <br>
                    </div>

                    <!-- PC -->

                    <p><img class="img-responsive" src="img/pc.png" alt=""></p>
                    <br>
                    <p>Quickly search from application to application</p>
                    <p>Save time and experience hassle free application monitoring</p>
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
                $(".buttons .btn1").click(function () {
                    $(this).next().toggle();
                });
            });

            //Code for personnel-login-btn
            function login(){
                var tinNo = document.getElementById('inputTinNo').value;
                var pw = document.getElementById('inputPassword').value;

                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                  if(xml.readyState == 4 && xml.status ==200){
                    window.location.href = "functions.php?action=login&tinNo=" + tinNo + "&password=" + pw;
                  }
                };
                xml.open("GET", "functions.php", true);
                xml.send();
            }
        </script>

    </body>
</html>

