<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once '../common/head.php'; ?>
        
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
        
        <script src="../jquery/jquery-1.12.0.min.js"></script>
        <script src="../jquery/jquery-ui.min.js"></script>
        <script src="../js/index.js"></script>

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
        <?php include_once '../common/header.php'; ?>

        <div class="container">
            <div class="content">
                <div class="main">

                    <h1 id = "heading">Personnel Log In</h1>
                    <p>Log-in for CBAO Personnel</p>
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
            <form class="form-signin" id="logInputForm" action="../client_validation/validate_user.php" method="POST">
                <input type="text" id="inputTinNo" class="form-control" placeholder="Tin Number" name="tinNo" required autofocus="true">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <br>
                <input type="submit" id="login-btn" class="btn1" value="Log In">
                <input type="button" id="cancel" class="btn2" value="Cancel">                
            </form>

        </div>

        <?php include_once '../common/footer.php'; ?>                

    </body>

</html>

