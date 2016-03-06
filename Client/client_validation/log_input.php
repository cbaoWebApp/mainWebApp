<?php

session_start();

$page_loc = \filter_input(INPUT_POST, "page_location");
$sanitized_email = \filter_input(INPUT_POST, "email", \FILTER_SANITIZE_EMAIL);
$sanitized_pw = \filter_input(INPUT_POST, "pw", \FILTER_SANITIZE_STRING);

if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) === FALSE) {
    $_SESSION['login_error_msg'] = "Invalid Email";
    header("Location: ../web/index.php");
} else {
    require_once 'credentials.php';

    $conn = open_db_conn();

    if ($conn->connect_error) {
        show_error_msg($conn->connect_error);
    }

    if (isset($sanitized_email) &&
            isset($sanitized_pw)) {

        $query = "SELECT applicant_id, status
		FROM $database.$applicant INNER JOIN
                $database.$bpform USING (applicant_id)
		WHERE email = \"$sanitized_email\" AND
		password = \"$sanitized_pw\"";

        $result = $conn->query($query);

        if (!$result) {
            show_error_msg($conn->error);
        }

        $size = $result->num_rows;
        $app = $result->fetch_row();

        if ($app[1] === "true") {
            if ($size == 1) {
                $_SESSION['app_id'] = $app[0];
                header("Location: ../track/trackAppHome.php");
            } else {
                $_SESSION['login_error_msg'] = "Incorrect Credentials";
                switch ($page_loc) {
                    case 'index':
                        header("Location: ../web/index.php");
                        break;
                    case 'home_req':
                        header("Location: ../read_req/homerequirements.php");
                        break;
                    default:
                        //place default error page
                        break;
                }
            }
        } else {
            $_SESSION['login_error_msg'] = "Cancelled Application";
            header("Location: ../web/index.php");
        }
    }

    close_db_conn($conn);
}
?>