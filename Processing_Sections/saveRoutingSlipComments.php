<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','baguio_cbao');
	
	$personnel_id = 1;
	$routing_slip_id = 1;
	$bpform_id = 1;
	$dateReceived = date('Y-m-d');
	$time = date('Y-m-d H:i:s');
	
	function test_input($data) {
	   global $conn;
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   $data = mysqli_real_escape_string($conn,$data);
	   return $data;
	}
	
	if(!isset($_POST['status'])){
		$_SESSION['status_error'] = "Please select one.";
	}else if($_POST['status'] == 'deficient' && empty($_POST['commentsTextArea'])){
		$_SESSION['status_error'] = 'Please add a comment.';
	}else{
		$status = test_input($_POST['status']);
		$comment = test_input($_POST['commentsTextArea']);
	}
	
	if(isset($_SESSION['status_error'])){
		header("Location: /CBAO/Personnel/routingSlip.php");
	}else{
		$db = mysqli_select_db($conn,'baguio_cbao');
		
		$sql1 = "INSERT INTO comments(date_received, comment, time_in, time_out, personnel_id, routing_slip_id) VALUES ('$dateReceived', '$comment', '$time', '$time', '$personnel_id', '$routing_slip_id')";
		
		if(!mysqli_query($conn, $sql1)){		
			echo "sql1:".mysqli_error($conn)."<br>";
		}
		
		//header("Location: /CBAO/Personnel/routingSlip.php");
	}
	
?>
