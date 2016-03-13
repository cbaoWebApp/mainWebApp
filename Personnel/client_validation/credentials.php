<?php

/*
 * The credentials are separated so that 
 * when an admin wants to change or add to
 * it, it will just be in one place and not
 * mix with the connection code
 */

//set character set

global $database;

//tables within the database are represented
$applicant = "applicant";
$bpform = "bpform";
$routing_slip = "routing_slip";
$comments = "comments";
$personnel = "personnel";
$documents = "documents";
$checklist = "checklist";
$schedule_of_fees = "schedule_of_fees";

//common functions 
function open_db_conn() {
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "baguio_cbao";

    $conn = new mysqli($hostname, $user, $password, $database);

    return $conn;
}

function close_db_conn($conn) {
    $conn->close();
}

function show_error_msg($err) {
    echo "
			<p>We're sorry for the inconvenience.
			The error found was:</p>
			<p>$err</p>
			<p>Please press the back button or click
			<a href=\"../web/index.php\">here</a> to get back to the 
			home page. Thank you.
			</p>
		";
}

?>