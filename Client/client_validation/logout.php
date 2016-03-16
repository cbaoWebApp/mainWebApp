<?php
session_start();

$stat = \filter_input(INPUT_POST, "logout_btn");

$_SESSION['logout_stat'] = $stat;

header("Location: ../web/index.php");
?>

