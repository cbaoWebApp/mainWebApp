<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include '../common/head.php'; ?>

        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

        <?php
        if (!empty($_SESSION['login_error_msg'])) {
            echo "
		<script>
                    $(function () {
                        $(\"#login-popup\").dialog({
                            autoOpen: true,
                            closeOnEscape: true,
                            open: function (event, ui){
                                $(\".ui-dialog-titlebar-close\", ui.dialog | ui).hide();
                            },                            
                            height: 'auto',
                            width: 'auto'                           
                        });
                    });
		</script>
            ";
        }
        ?>    
    </head>
    <body>
     <?php include '../common/header.php'; ?>

        <div class="container">
            <div class="content">
                <div class="main">

                    <h1 id = "heading">CBAO Section Personnel Log In</h1>
                    <p>Log-in for CBAO Section Personnel</p>
                    <br>

                    <div class = "buttons">
                        <input type ="button" id = "logIn" value = "Log-In" class ="btn1"/>
                        <br>
                        <br>
                    </div>

                    <!-- PC -->

                    <p><img class="img-responsive" src="../img/pc.png" alt=""></p>
                    <br>
                    <p>Quickly search from application to application</p>
                    <p>Save time and experience hassle free application monitoring</p>
                    <br>
                    <p><a href="#" id = "link">Get to know more</a></p>
                </div>
            </div>
        </div>

        <div id="login-popup">
            <div id="err_area">
                <?php
                if (!empty($_SESSION['login_error_msg'])) {
                    echo "<p>" . $_SESSION['login_error_msg'] . "</p>";
                    unset($_SESSION['login_error_msg']);
                }
                ?> 
            </div>            
            <br>
            <form class="form-signin" id="logInputForm" action="functions.php" method="POST">
                <input type="text" id="inputTinNo" class="form-control" placeholder="Username" name="tinNo" required autofocus="true">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <br>
                <input type="submit" id="admin-login-btn" class="btn1" onclick="login()" value="Log In">
                <input type="button" id="cancel" class="btn2" value="Cancel">
                <input type="hidden" name="action" value="login">
            </form>

        </div>

        <?php include '../common/footer.php'; ?>
        <script>                
                function redirect() {

                    window.location.assign('index.php');
                }

                //Code for personnel-login-btn
                function login() {
					
                    var tinNo = document.getElementById('inputTinNo').value;
                    var pw = document.getElementById('inputPassword').value;

                    var xml = new XMLHttpRequest();
                    xml.onreadystatechange = function () {
                        if (xml.readyState == 4 && xml.status == 200) {
                            window.location.href = "functions.php?action=login&tinNo=" + tinNo + "&password=" + pw;
                        }
                    };
                    xml.open("GET", "functions.php");
                    xml.send();
                }

                $(function () {
                    $("#login-popup").dialog({
                        autoOpen: false,
                        closeOnEscape: true,
                        open: function (event, ui) {
                            $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
                        },
                        height: 'auto',
                        width: 'auto'
                    });

                    $("#logIn").click(function () {
                        $("#err_area").html("");
                        $("#login-popup").dialog("open");
                    });

                    $("#cancel").click(function () {
                        $("#inputEmail").val("");
                        $("#inputPassword").val("");
                        $("#login-popup").dialog("close");
                        $("#err_area").html("");
                    });
                });
        </script>

    </body>
</html>

