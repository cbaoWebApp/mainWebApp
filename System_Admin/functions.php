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
      default:
        die('No such function!');
    }
  }else{
    echo "No action read";
  }

  function connectDb($sn, $un, $p, $d){
    $conn = new mysqli($sn, $un, $p, $d);
    if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }else{
      return $conn;
    }
  }

  function addAccount(){
    $tinNo = $_GET['tinNo'];
    $name = $_GET['name'];
    $section = $_GET['section'];
    $position = $_GET['position'];
    $password = $_GET['password'];

    $conn = connectDb("localhost", "root", "", "trial_system_admin");

    $sql = "INSERT INTO admin (tinNo, name, section, position, password)
      VALUES ('$tinNo','$name','$section','$position','$password')";

    if($conn->query($sql) === true){
          echo "<script type=\"text/javascript\">".
          "alert('Account Successfully Added.');".
          "window.location.href='adminHome.php'".
          "</script>";
    }else{
      echo "Error: " .$sql."<br>".$conn->error;
    }
  
    $conn->close();
  }

  function login(){
    $tinNo = $_GET['tinNo'];
    $password = $_GET['password'];

    $conn = connectDb("localhost", "root", "", "trial_system_admin");

    $sql = "SELECT * FROM admin WHERE tinNo =  '$tinNo'  && password =  '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
      //row not found
      echo "<script type=\"text/javascript\">".
          "alert('Tin Number and/or Password Not Found.');".
          "window.location.href='index.php'".
          "</script>";
    }else{
      //row found
      echo "found";
    }

    $conn->close();
  }

  function editAccount(){
    $originalTin = $_GET['originalTin'];
    $name = $_GET['name'];
    $section = $_GET['section'];
    $position = $_GET['position'];
    $password = $_GET['password'];
    $newTin = $_GET['tinNo'];

    $conn = connectDb("localhost", "root", "", "trial_system_admin");
    
    $sql = "UPDATE admin SET tinNo=?, name=?, section=?, position=?, password=? WHERE tinNo = '$originalTin'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('issss',$newTin, $name, $section, $position, $password);
    $stmt->execute();

    if($stmt->errno){
      echo "Error: " . $stmt->error;
    }else{
      echo "<script type=\"text/javascript\">".
          "alert('Account Successfully Edited.');".
          "window.location.href='adminHome.php'".
          "</script>";
    }

    $conn->close();
  }

  function deleteAccount(){
    $tinNo = $_GET['tinNo'];
    $conn = connectDb("localhost", "root", "", "trial_system_admin");

    $sql = "DELETE FROM admin WHERE tinNo = '$tinNo'";
    $result = mysqli_query($conn, $sql);

    if($conn->query($sql) === true){
          echo "<script type=\"text/javascript\">".
          "alert('Account Successfully Deleted.');".
          "window.location.href='adminHome.php'".
          "</script>";
    }else{
      echo "Error: " .$sql."<br>".$conn->error;
    }
  }
?>
<!--End of php collection-->