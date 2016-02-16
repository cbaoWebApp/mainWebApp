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
      case 'checkDuplicate';
        checkDuplicate();
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

  function addAccount(){
    $tinNo = strtoupper($_GET['tinNo']);
    $fName = strtoupper($_GET['fName']);
    $lName = strtoupper($_GET['lName']);
    $mInitial = strtoupper($_GET['mInitial']);
    $section = strtoupper($_GET['section']);
    $position = strtoupper($_GET['position']);
    $password = $_GET['password'];
    $status = 'TRUE';

    if($section == "ADMIN" || $section == "BUILDING OFFICIAL" || $section == "ASSISTANT BUILDING OFFICIAL" || $section == "CHIEF PROCESSING OFFICER"){
      $position = "NULL";
    }

    $conn = connectDb("localhost", "root", "", "baguio_cbao");

    $sql = "INSERT INTO personnel (username, first_name, last_name, middle_initial, section, access_level, password, status)
      VALUES ('$tinNo','$fName', '$lName', '$mInitial', '$section','$position','$password', '$status')";

    if($conn->query($sql) === true){
      echo ("<script type='text/javascript'>
              alert('Account Sucessfully Added.');
              window.location.href='adminHome.php';
              </script>");
    }else{
      //echo "Error: " .$sql."<br>".$conn->error;
      echo ("<script type='text/javascript'>
              alert('CRITICAL ERROR: Please do not use duplicate usernames in adding and editing an account. Action was aborted.');
              window.location.href='adminHome.php';
              </script>");
    }
    
    $conn->close();
  }

  function login(){
    $tinNo = $_GET['tinNo'];
    $password = $_GET['password'];

    $conn = connectDb("localhost", "root", "", "baguio_cbao");

    $sql = "SELECT * FROM personnel WHERE username =  '$tinNo'  && password =  '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
      //row not found
      echo "<script type=\"text/javascript\">".
          "alert('Tin Number and/or Password Not Found.');".
          "window.location.href='index.php'".
          "</script>";
    }else{
      //row found
      session_start();

      if($row = mysqli_fetch_array($result)){
        $section = $row["section"];
        $_SESSION['section'] = $section;

        switch($section){
          case 'RECEIVING': 
            header("location: receivingHome.php"); 
            break;
          case 'ADMIN' : 
            header("location: adminHome.php"); 
            break;
        }
      }
    }

    $conn->close();
  }

  function editAccount(){
    $originalTin = $_GET['originalTin'];
    $fName = strtoupper($_GET['fName']);
    $lName = strtoupper($_GET['lName']);
    $mInitial = strtoupper($_GET['mInitial']);
    $section = strtoupper($_GET['section']);
    $position = strtoupper($_GET['position']);
    $password = $_GET['password'];
    $newTin = strtoupper($_GET['tinNo']);
    $status = 'TRUE';

    $conn = connectDb("localhost", "root", "", "baguio_cbao");

    if($section == "ADMIN" || $section == "BUILDING OFFICIAL" || $section == "ASSISTANT BUILDING OFFICIAL" || $section == "CHIEF PROCESSING OFFICER"){
      $position = "NULL";
    }
    
    $sql = "UPDATE personnel SET username=?, first_name=?, last_name=?, middle_initial=?, section=?, access_level=?, password=?, status=? WHERE username = '$originalTin'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss',$newTin, $fName, $lName, $mInitial, $section, $position, $password, $status);
    $stmt->execute();

    if($stmt->errno){
      //echo "Error: " . $stmt->error;
      echo ("<script type='text/javascript'>
              alert('CRITICAL ERROR: Please do not use duplicate usernames in adding and editing an account. Action was aborted.');
              window.location.href='adminHome.php';
              </script>");
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
    $conn = connectDb("localhost", "root", "", "baguio_cbao");
    $status = 'FALSE';

    $sql = "UPDATE personnel SET status=? WHERE username = '$tinNo'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $status);
    $stmt->execute();

    if($stmt->errno){
      echo "Error: " . $stmt->error;
    }else{
          echo "<script type=\"text/javascript\">".
          "alert('Account Successfully Deleted.');".
          "window.location.href='adminHome.php'".
          "</script>";
    }
  }
  
  function search(){
    $option = $_GET['option'];
    $value = $_GET['value'];
    $conn = connectDb("localhost", "root", "", "baguio_cbao");

    $sql = "SELECT * FROM personnel WHERE $option = '$value' AND status != 'FALSE'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
      echo "<div class='table-responsive'><table class='table table-radius table-hover'><thead>
            <th>Username</th>
            <th>Name</th>
            <th>Position</th>
            <th>Section</th>
            <th>Edit Account</th>
            <th>Delete Account</th>
          </thead><tbody><tr><td>N/A</td><td>N/A</td><td>N/A</td><td>N/A</td><td>N/A</td><td>N/A</td><td>N/A</td><td>N/A</td></tbody></table></div>";

    }else{
      echo "<div class='table-responsive'><table class='table table-radius table-hover'>
          <thead>
            <th>Tin No.</th>
            <th>Name</th>
            <th>Position</th>
            <th>Section</th>
            <th>Edit Account</th>
            <th>Delete Account</th>
          </thead><tbody>";
      while($row = mysqli_fetch_array($result)){
         $tinNo = $row['username'];
                  $fName = $row['first_name'];
                  $lName = $row['last_name'];
                  $mInitial = $row['middle_initial'];
                  $position = $row['access_level'];
                  $section = $row['section'];
                  $name = $lName.", ".$fName." ".$mInitial.".";
        echo "<tr><td>".$tinNo."</td>";
        echo "<td>".$name."</td>";
        echo "<td>".$position."</td>";
        echo "<td>".$section."</td>";
        echo "<td><button id = '$tinNo' class='editAcc' name='editAcc'>Edit</button></td>";
        echo "<td><button id = '$tinNo' class='delAcc' name='delAcc'>Delete</button></td>";
      }
      echo "</tbody></table></div>";
    }
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

?>
<!--End of php collection-->