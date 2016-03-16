<!--Collection of php functions for the server-side scripting for the System Admin Module-->
<?php
  if(isset($_GET['action']) && !empty($_GET['action'])) {
  
    $action = $_GET['action'];

    switch($action){
      case 'addAccount': 
        addAccount();
        break;
      case 'login':
        login();
        break;
      case 'editAccount':
        editAccount();
        break;
      case 'deleteAccount';
        deleteAccount();
        break;
      case 'search':
        search();
        break;
      case 'logout';
        logout();
        break;
      case 'appPermitNumbers':
        insertToDb();
        break;
      default:
        die('No such function!');
    }
  }else{
    if(!isset($_SESSION['section'])){
     header("Location: index.php"); 
     exit();
    }else{
      $section = $_SESSION['section'];
      switch($section){
          case 'Receiving': 
            header("location: receivingHome.php"); 
            break;
          case 'Admin' : 
            header("location: adminHome.php"); 
            break;
        }
    }
  }

  function connectDb($sn, $un, $p, $d){
    $conn = new mysqli($sn, $un, $p, $d);
    if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }else{
      return $conn;
    }
  }


  function login(){
    $tinNo = $_GET['tinNo'];
    $password = $_GET['password'];

    $conn = connectDb("localhost", "root", "", "baguio_cbao");
	
	function clean($string) {
	   

		return $result = preg_replace("/[^a-zA-Z0-9]+/", "", $string); // Removes special chars.
	}
	clean($tinNo);
	clean($password);
    $sql = "SELECT * FROM personnel WHERE username =  '$tinNo'  && password =  '$password'";
    $result = mysqli_query($conn, $sql);
$fff= "raxe";
    if(mysqli_num_rows($result) == 0){
      //row not found
      echo "<script type=\"text/javascript\">".
          "alert('Tin Number".$tinNo."and/or ".$password."Password Not Found.');".
          "window.location.href='index.php'".
          "</script>";
    }else{
      //row found
      session_start();

      if($row = mysqli_fetch_array($result)){
		$uss = $row["username"];
		$passs = $row["password"];
		if($password != $passs){
			echo "<script type=\"text/javascript\">".
          "alert('Tin Number".$fff." and/or".$passs." Password Not Found.');".
          "window.location.href='index.php'".
          "</script>";
		} if($uss != $tinNo){
			echo "<script type=\"text/javascript\">".
          "alert('Tin Number and/or Password Not Found.');".
          "window.location.href='index.php'".
          "</script>";
		}else{
			
        $section = $row["section"];
        $_SESSION['section'] = $section;
		}

        switch($section){
          case 'RECEIVING': 
            header("location: receivingHome.php"); 
            break;
          case 'ADMIN' : 
            header("location: adminHome.php"); 
            break;
		  case 'LINEANDGRADE' : 
            header("location: LineGradeHome.php"); 
            break;
		  case 'ARCHITECTURAL' : 
            header("location: architectural.php"); 
            break;	
		  case 'STRUCTURAL' : 
            header("location: structural.php"); 
            break;	
		  case 'ELECTRICAL' : 
            header("location: electrical.php"); 
            break;	
		  case 'MECHANICAL' : 
            header("location: mechanical.php"); 
            break;
		  case 'SANITARY' : 
            header("location: sanitary.php"); 
            break;	
		  case 'BO' : 
            header("location: buildingOfficial.php"); 
            break;	
		  case 'ABO' : 
            header("location: abo.php"); 
            break;	
		  case 'CPO' : 
            header("location: cpo.php"); 
            break;				
        }
      }
    }

    $conn->close();
  }


  function logout(){
    session_start();
    //unset($_SESSION['section']);
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
    }

    session_destroy();
  header("location: index.php");
  }

  function insertToDb(){
    $permit = $_GET['permit'];
    $app = $_GET['app'];
    $control = $_GET['control'];

    $conn = connectDb("localhost", "root", "", "baguio_cbao");

    $sql = "UPDATE checklist SET permitNum=?, appNum=? WHERE controlNum = '$control'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $permit, $app);
    $stmt->execute();

    if($stmt->errno){
      echo "Error: " .$sql."<br>".$conn->error;
    }else{
      echo ("<script type='text/javascript'>
              alert('Sucessfully Added.');
              window.location.href='receivingHome.php';
              </script>");
    }
    
    $conn->close();

  }
?>
<!--End of php collection-->