<?php

session_start();
$logout_stat = $_SESSION['logout_stat'];

if ($logout_stat === "false") {
    require_once 'count.php';
    require_once 'select/check.php';
    require_once 'select/lg_select.php';
    require_once 'select/a_select.php';
    require_once 'select/struc_select.php';
    require_once 'select/san_select.php';
    require_once 'select/e_select.php';
    require_once 'select/m_select.php';
    require_once 'select/cpo_select.php';
    require_once 'select/abo_select.php';
    require_once 'select/bo_select.php';
} else {
    header("Location: ../web/index.php");
}
?>

