<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once '../../common/head.php'; ?>
        
        <link rel="stylesheet" href="../../css/app_info.css">
        <link rel="stylesheet" href="../../btstrp/css/bootstrap.css">
        
        
    </head>
    <body>	

        <?php include_once '../../common/personnel_header.php'; ?>

        <div class="content">
            <div class="main">
                <h1 id = "heading">Process Application</h1>	
            </div>
        </div>
        <div class="container">	
            <div class = "col-md-3">
                <div id="sidebar">
                    <div id="nav-anchor"></div>
                    <nav>
                        <ul>
                            <li><a href="sanitary_app_info.php"><div>Application Information</div></a></li>
                            <li><a href="#"><div>Routing Slip</div></a></li>
                            <li><a href="sanitary_fees_assessment.php"><div>Fees Assessment</div></a></li>
                            <li><a href="sanitary_breakdown.php"><div>Summary</div></a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class = "col-md-9">
                <div class = "scroll">
                    <div class = "info">                       
                        <h5>Applicant Name:
                            
                        </h5>
                        <h5>Date of Application:
                            
                        </h5>
                        <h5>Location of Construction:
                            
                        </h5>	
                        <h5>Scope of Work:
                            
                        </h5>
                        <h5>Use or Type of Occupancy:
                            
                        </h5>
                    </div>
                    <hr>

                    <!-- other info here. If ever, show the print form or something -->
                </div>										
            </div>
        </div>
                     
        <?php include_once '../../common/footer.php'; ?>

    </body>

</html>

