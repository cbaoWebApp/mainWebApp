<?php
	require_once 'log_input_credentials.php';
	
	$conn = new mysqli($hostname, $user, $password, $database);
	
	if ($conn->connect_error){
		show_error_msg($conn->connect_error);
	}

	if(isset($_POST['email']) &&
	   isset($_POST['pw']) ){
	   $u = htmlentities($_POST['email']);
	   $p = htmlentities($_POST['pw']);
	   
	   $query = "SELECT email_address, password
				 FROM $database.tracking_accounts
				 WHERE email_address = \"$u\" AND
				 password = \"$p\"";
				 
	   $result = $conn->query($query);
	   
	   if(!$result){
			show_error_msg($conn->error);
	   }
	   
	   $size = $result->num_rows;
	   
	   if( $size == 1){
		   echo "Successful log in!";
	   }else{
	   session_start(); 
		   $_SESSION['login_error_msg'] = "Incorrect credentials.";
		   header("Location: /Client3/index.php"); //the value of "Location" should be the path where the index.php is located.
	   }
	}
	
	
	$conn->close();
	
	//not a pretty way of showing the error message
	function show_error_msg($err){
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
