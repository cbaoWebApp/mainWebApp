<?php
require_once '../client_validation/select_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once '../common/head.php'; ?>

        <link rel="stylesheet" href="../css/appRecord.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
        
        <script src="../jquery/jquery-1.10.2.min.js"></script>
        <script src="../jquery/jquery-ui.min.js"></script>
        <script src="../js/cancel.js"></script>
    </head>
    <body>

        <?php include_once '../common/track_header.php'; ?>

        <div class="content">
            <div class="main">
                <h1 id = "heading">Application Record</h1>	
            </div>
        </div>
        <div class="container">	
            <div class = "col-md-3">
                <div id="sidebar">
                    <div id="nav-anchor"></div>
                    <nav>
                        <ul>
                            <li><a href="trackAppHome.php"><div>Track Application</div></a></li>
                            <li><a href="appReq.php"><div>Application Requirements</div></a></li>
                            <li><a href="appRecord.php"><div>View Application Record</div></a></li>
                        </ul>
                    </nav>
                    <input type="button" id="cancel" value="Cancel Application"/>
                </div>
            </div>
            <div class = "col-md-9">
                <div class = "scroll">

                    <div class = "sections">
                        <div id="lineandgrade">
                            <h4>Line and Grade Section</h4>
                            <form class="form-horizontal">
                                <?php lg_create($lg_row_count, $lg_row_count_e, $lg_select)?>
                            </form>
                        </div>                      

                        <div id="architectural">
                            <h4>Architectural Section</h4>
                            <form class="form-horizontal">
                                <?php a_create($a_row_count, $a_row_count_e, $a_select)?>
                            </form>
                        </div>


                        <div id="structural">
                            <h4>Structural Section</h4>
                            <form class="form-horizontal">
                                <?php struc_create($struc_row_count, $struc_row_count_e, $struc_select)?>
                            </form>
                        </div>

                        <div id="sanitary">
                            <h4>Sanitary Section</h4>
                            <form class="form-horizontal">
                                <?php san_create($san_row_count, $san_row_count_e, $san_select)?>
                            </form>
                        </div>

                        <div id="electrical">
                            <h4>Electrical Section</h4>
                            <form class="form-horizontal">
                                <?php e_create($e_row_count, $e_row_count_e, $e_select)?>
                            </form>
                        </div>

                        <div id="mechanical">
                            <h4>Mechanical Section</h4>
                            <form class="form-horizontal">
                                <?php m_create($m_row_count, $m_row_count_e, $m_select)?>
                            </form>
                        </div>

                        <div id="cpo">
                            <h4>Chief Processing Officer (CPO)</h4>
                            <form class="form-horizontal">
                                <?php cpo_create($cpo_row_count, $cpo_row_count_e, $cpo_select)?>
                            </form>
                        </div>

                        <div id="abo">
                            <h4>Assistant Building Official</h4>
                            <form class="form-horizontal">
                                <?php cpo_create($abo_row_count, $abo_row_count_e, $abo_select)?>
                            </form>
                        </div>

                        <div id="bo">
                            <h4>Building Official (BO)</h4>
                            <form class="form-horizontal">
                                <?php cpo_create($bo_row_count, $bo_row_count_e, $bo_select)?>
                            </form>
                        </div>


                        <hr>
                        <h4>Total Application Fees:</h4>
                    </div>
                </div>										
            </div>
        </div>
        
        <div id="cancel_popup">
            <form class="form-signin" id="cancel_popup_btns">
                    <p>
                        You are about to cancel your application. Please be advised
                        to look at these links for our <a href="#">Terms of Agreement</a>
                        and <a href="#">Rules</a> when canceling an application.
                    </p>                                

                <input type="button" id="cancel_btn" value="Yes, Cancel my application"/>
                <input type="button" id="back_to_page" value="No, I do not want to cancel my application"/>
            </form>
        </div>
        
        <div id="accept_popup">
            <form class="form-signin" action="../client_validation/cancel.php" method="POST">
                    <p>
                        Your application was successfully canceled. Please visit
                        CBAO to acquire your documents and papers.
                    </p>    
                <input type="submit" id="accept_btn" value="Okay"/>                
            </form>
        </div>
        
        <?php include_once '../common/footer.php'; ?>
    </body>
</html>

