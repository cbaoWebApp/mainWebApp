<?php

$sanitized_email = \filter_input(INPUT_POST, "email", \FILTER_SANITIZE_EMAIL);
$sanitized_pw = \filter_input(INPUT_POST, "pw", \FILTER_SANITIZE_STRING);

if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) === FALSE) {
    echo "end process";//error message?
} else {
    require_once 'log_input_credentials.php';

    $conn = new mysqli($hostname, $user, $password, $database);

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
        } else {
            echo "What's a good error message here?";
        }
    }
    
    $conn->close();
}

//not a pretty way of showing the error message
function show_error_msg($err) {
    echo "
			<p>We're sorry for the inconvenience.
			The error found was:</p>
			<p>$err</p>
			<p>Please press the back button or click
			<a href=\"\">here</a> to get back to the 
			home page. Thank you.
			</p>
		";
}

?>