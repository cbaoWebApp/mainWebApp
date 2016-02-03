<?php

session_start();

$page_loc = \filter_input(INPUT_POST, "page_location");
$sanitized_email = \filter_input(INPUT_POST, "email", \FILTER_SANITIZE_EMAIL);
$sanitized_pw = \filter_input(INPUT_POST, "pw", \FILTER_SANITIZE_STRING);

if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) === FALSE) {
    $_SESSION['login_error_msg'] = "Invalid Email";
    header("Location: /Thesis/Client/web/index.php");
} else {
    require_once 'credentials.php';

    $conn = open_db_conn();

    if ($conn->connect_error) {
        show_error_msg($conn->connect_error);
    }

    if (isset($sanitized_email) &&
            isset($sanitized_pw)) {

        $query = "SELECT email_address, password
				 FROM $database.$track_account
				 WHERE email_address = \"$sanitized_email\" AND
				 password = \"$sanitized_pw\"";

        $result = $conn->query($query);

        if (!$result) {
            show_error_msg($conn->error);
        }

        $size = $result->num_rows;

        if ($size == 1) {
            echo "Successful log in!";
            //allow client to track his own records
        } else {
            $_SESSION['login_error_msg'] = "Incorrect Credentials";
            switch($page_loc){
                case 'index':
                    header("Location: /Thesis/Client/web/index.php");
                    break;
                case 'home_req':
                    header("Location: /Thesis/Client/read_req/homerequirements.php");
                    break;
                default:
					//place default error page
                    break;
            }
        }
    }

    close_db_conn($conn);
}
?>