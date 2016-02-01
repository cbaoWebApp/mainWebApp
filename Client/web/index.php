<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../Client/common/head.php'; ?>

        <link rel="stylesheet" href="../../Client/css/styles.css"> 
        <link rel="stylesheet" href="../../Client/btstrp/css/bootstrap.css">

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
    </head>
    <body>
        <?php include '../../Client/common/header.php'; ?>

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
                               value = "Track Application" onclick="hide_field()"/>
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
                            <form class="form-signin" action="../client_validation/log_input.php" method="POST" id="logInputForm">                                                                
                                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                                <input type="password" id="inputPassword" class="form-control" name="pw" placeholder="Password" required>
                                <br>
                                <input type="submit" id = "search" class="btn1" value="Search">
                                <button id = "cancel">Cancel</button>
                            </form>                            
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

        <?php include '../../Client/common/footer.php'; ?>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
                            function hide_field() {
                                $(".buttons .logFields").hide();
                                $(".buttons .btn2").click(function () {
                                    $(this).next().toggle();
                                });
                            }
                            ;
                            
                            function apply_redirect(){
                                window.location.assign('../../Client/registration/bpForm.php');
                            }
        </script>

    </body>
</html>


