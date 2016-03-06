<?php
    session_unset();
    session_destroy();    
    header("Location: ../web/index.php");
?>

