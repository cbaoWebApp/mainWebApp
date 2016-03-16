<?php

session_start();

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

if (!empty($_SESSION['logout_stat'])) {
    unset($_SESSION['logout_stat']);
    //session_start();
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}

if (!empty($_SESSION['app_status']) &&
       $_SESSION['app_status'] === "1" ) {
    echo "
            <script>
                $(function () {
                    $(\"#finish-popup\").dialog({
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

