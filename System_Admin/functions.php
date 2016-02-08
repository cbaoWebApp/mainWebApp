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
    $tinNo = $_GET['tinNo'];
    $name = $_GET['name'];
    $section = $_GET['section'];
    $position = $_GET['position'];
    $password = $_GET['password'];

    $conn = connectDb("localhost", "root", "", "trial_system_admin");

    $sql = "INSERT INTO admin (tinNo, name, section, position, password)
      VALUES ('$tinNo','$name','$section','$position','$password')";

    if($conn->query($sql) === true){
      echo ("<script type='text/javascript'>
            alert('Account Sucessfully Added.');
            window.location.href='adminHome.php'
            </script>");
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
      session_start();

      if($row = mysqli_fetch_array($result)){
        $section = $row["section"];
        $_SESSION['section'] = $section;

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
    $stmt->bind_param('sssss',$newTin, $name, $section, $position, $password);
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
  
  function search(){
    $option = $_GET['option'];
    $value = $_GET['value'];
    $conn = connectDb("localhost", "root", "", "trial_system_admin");

    $sql = "SELECT * FROM admin WHERE $option = '$value'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
      echo "<p style='color:red;'>No Results Found.</p>";
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
        echo "<tr><td>".$row["tinNo"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["position"]."</td>";
        echo "<td>".$row["section"]."</td>";
        echo "<td>button</td>";
        echo "<td>button</td>";
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