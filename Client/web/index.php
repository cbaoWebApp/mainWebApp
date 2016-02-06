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

                    <h1 id = "heading">Building Permit Application</h1>
                    <p>Apply for a building permit now!</p>
                    <br>

                    <div class = "buttons">
                        <input type ="button" id = "apply" value = "Apply"
                               onclick="apply_redirect()"/>

                        <input type ="button" id = "trackApplication" class="btn2" 
                               value = "Track Application"/>
                        <br>
                        <br>
                    </div>

                    <br>
                    <h4><a href="../read_req/homerequirements.php" id = "link">View Application Requirements</a></h4>
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
                <input type="submit" id = "search" class="btn1" value="Search">
                <input type="button" id="cancel" value="Cancel"> 
                <input type="hidden" name="page_location" value="index">
            </form>
        </div>



        <?php include '../common/footer.php'; ?>

        <script>
            function apply_redirect() {
                window.location.assign('../registration/bpForm.php');
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

                $("#trackApplication").click(function () {
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
