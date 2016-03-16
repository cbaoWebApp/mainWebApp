<?php
require_once '../client_validation/index_popup_control.php';
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once '../common/head.php'; ?>

        <link rel="stylesheet" href="../css/styles.css"> 
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">

        <script src="../jquery/jquery-1.10.2.js"></script>
        <script src="../jquery/jquery-ui.min.js"></script>
        <script src="../js/index.js"></script>
    </head>
    <body>
        <?php include_once '../common/header.php'; ?>

        <div class="container">
            <div class="content">
                <div class="main">

                    <h1 id = "heading">Building Permit Application</h1>
                    <p>Apply for a building permit now!</p>
                    <br>
                    <h4><a href="../read_req/homerequirements.php" id = "link">View Application Requirements</a></h4>
                    <br>
                    <br>
                    <div class = "buttons">
                        <input type ="button" id = "apply" value = "Apply"
                               onclick="apply_redirect()"/>

                        <input type ="button" id = "trackApplication" class="btn2" 
                               value = "Track Application"/>
                        <br>
                        <br>
                    </div>

                    <!-- PC -->

                    <p><img class="img-responsive" src="../img/pc.png" alt=""></p>
                    <br>
                    <p>Get realtime updates on your application</p>
                    <p>Save time and experience hassle free application procedures</p>
                    <br>
                    <h4><a href="#" id = "link">Get to know more</a></h4>
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
            <form class="form-signin" id="logInputForm" action="../client_validation/log_input.php" method="POST">                                  
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus="true">
                <input type="password" id="inputPassword" class="form-control" name="pw" placeholder="Password" required>                
                <br>
                <input type="submit" id = "search" value="Search">
                <input type="button" id="cancel" value="Cancel"> 
                <input type="hidden" name="page_location" value="index">
            </form>
        </div> 

        <div id="finish-popup">
            <div id="finish_area">
                <p>Thank you applying online. Please visit CBAO and submit your 
                    requirements there.</p>
            </div>    
            <div id="finish-btns">
                <input type="button" id="finish" value="Okay"> 
            </div>
        </div>

        <?php include_once '../common/footer.php'; ?>

    </body>
</html>