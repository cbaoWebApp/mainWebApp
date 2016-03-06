<?php

session_start();

$id = $_SESSION['bpform_id'];

require_once 'credentials.php';

$conn = open_db_conn();

if ($conn->connect_error) {
    show_error_msg($conn->connect_error);
}

$query = "UPDATE $database.$bpform SET status = \"false\" WHERE bpform_id = \"$id\"";

$result = $conn->query($query);

if (!$result) {
    show_error_msg($conn->error);
}

if ($conn->query($query) === TRUE) {
    header("Location: ../web/index.php");
} else {
    show_error_msg($conn->error);
}

close_db_conn($conn);
?>

