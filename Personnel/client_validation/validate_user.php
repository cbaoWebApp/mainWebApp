<?php

session_start();

require_once 'credentials.php';

$username = \filter_input(INPUT_POST, "tinNo", \FILTER_SANITIZE_STRING);
$password = \filter_input(INPUT_POST, "password", \FILTER_SANITIZE_STRING);

$conn = open_db_conn();

if ($conn->connect_error) {
    show_error_msg($conn->connect_error);
}

$query = "SELECT status, section
            FROM $database.$personnel
            where username = \"$username\" && password = \"$password\"";

$result = $conn->query($query);

if (!result) {
    echo "<script type=\"text/javascript\">" .
    "alert('Tin Number" . $tinNo . "and/or " . $password . "Password Not Found.');" .
    "window.location.href='index.php'" .
    "</script>";
}

$data = $result->fetch_row();
$status = strtoupper($data[0]);
$section = strtoupper($data[1]);

if ($status === "TRUE") {
    switch ($section) {
        case "RECEIVING":
            header("Location: ../process_app/receiving/receivingHome.php");

            break;
        case "LINEANDGRADE":


            break;
        case "ARCHITECTURAL":


            break;
        case "STRUCTURAL":


            break;
        case "ELECTRICAL":


            break;
        case "SANITARY":
            header("Location: ../process_app/app_info.php");

            break;
        case "MECHANICAL":


            break;
        case "CPO":


            break;
        case "ABO":


            break;
        case "BO":


            break;


        default:
            break;
    }
} else {
    $_SESSION['login_error_msg'] = "Incorrect Credentials";
    header("Location: ../web/index.php");
}

function logout() {
    session_start();
    //unset($_SESSION['section']);
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    header("location: ../web/index.php");
}

?>
