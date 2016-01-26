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

                    <div class = "buttons">
                        <p><a href="bpForm.html" class="btn1">Apply</a></p>
                        <p class="btn2">Track Application</p>
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
                                <input type="submit" class="btn1" value="Search">
                            </form>                            
                            <a href="index.html" class="btn2">Cancel</a>
                        </div>
                        <br>
                        <br>
                        <p><a href="homerequirements.html" id = "link">View Application Requirements</a></p>
                    </div>

                    <!-- PC -->

                    <p><img class="img-responsive" src="../../Client/img/pc.png" alt=""></p>
                    <br>
                    <p>Get realtime updates on your application</p>
                    <p>Save time and experience hassle free application procedures</p>
                    <br>
                    <p><a href="#" id = "link">Get to know more</a></p>
                </div>
            </div>
        </div>

        <?php include '../../Client/common/footer.php'; ?>

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


