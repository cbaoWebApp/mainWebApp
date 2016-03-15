<?php

$app_status = \filter_input(\INPUT_POST, "app_status");

if( !empty($app_status) && $app_status === "finished" ){
    $_SESSION['app_status'] = "1";
    header("Location: ../web/index.php");
}

?>

