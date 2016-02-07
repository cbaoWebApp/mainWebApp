<!DOCTYPE HTML>
<?php
  session_start();
  if(!isset($_SESSION['section'])){
   header("Location: index.php"); 
   exit();
  }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CBAO Web Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="en" content="CBAO Web Application">
        <meta name="author" content="SLUSCIS">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="css/adminHome.css">
        <link rel="stylesheet" href="btstrp/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="jquery-1.12.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="tablesorter-master/jquery.tablesorter.js"></script> 
        <!--<script src="jquery-ui.js"></script>-->

    </head>
    <body>
    <div class="header">
            <div class = "row">
                <div class = "col-md-4">
                    <p><img class = "img-responsive" src="img/seal.png" alt=""></p>
                </div>
                <div class = "col-md-4">
                    <p>City Government of Baguio</p>
                </div>
                <div class = "col-md-4">
                    <p id = "cbao">CBAO</p>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="receivingHome.html">System Administration</a>
            </div>
            <ul class="nav navbar-nav">
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp; Accounts</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; Log History</a></li>
              <li><button id="admin-logout"><span class="glyphicon glyphicon-log-out"></span> Log out</button></li>
            </ul>
          </div>
        </nav>

  <br>
         
        <div class="container">
			<div class="row">
			  <div class="col-md-12">
				  <h4>
					<?php
					  $monthNum = date("m");
					  $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
					  echo $monthName." ".date("d").", ".date("Y");
					?>
				  </h4>

			  </div>
			  
			</div>
        
        <div class="row">
			<div class="col-md-6">
			  <h4 id="time-display">
			  
			  </h4>
			</div>
			<div class="col-md-6">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search" id="search-val"/>
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control" id="filter-options">
                                        <option value="tinNo" selected>Tin No.</option>
                                        <option value="name">Name</option>
                                        <option value="position">Position</option>
                                        <option value="section">Section</option>
                                    </select>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" id = "searchIcon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>

          </div> 
		</div>
        <br>
       
          
    <div class = "table" id="main-table">
      <div class="table-responsive">
        <table id="admin-home-table" class="table table-radius table-hover">
          <thead>
            <tr>
              <th>Tin Number</th>
              <th>Account Name</th>
              <th>Position</th>
              <th>Section</th>
              <th>Edit Account</th>
              <th>Delete Account</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $conn = new mysqli('localhost', 'root', '', 'trial_system_admin');

              if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
              }else{
                $sql = "SELECT * FROM admin";
                $result = $conn->query($sql);

                while($row = mysqli_fetch_array($result)){
                  $tinNo = $row['tinNo'];
                  $name = $row['name'];
                  $position = $row['position'];
                  $section = $row['section'];

                  //display in table
                  echo "<tr>";
                  echo "<td>".$tinNo."</td>";
                  echo "<td>".$name."</td>";
                  echo "<td>".$position."</td>";
                  echo "<td>".$section."</td>";
                  echo "<td><button id = '$tinNo' class='editAcc' name='editAcc'>Edit</button>";
                  echo "<td><button id = '$tinNo' class='delAcc' name='delAcc'>Delete</button>";
                  echo "</tr>";
                }
                //mysqli_close($conn);
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10">
      </div>
        <div class="col-sm-2">
          <button id="addAccount" name="addAccount">Add Account</button>
        </div> 
    </div>
    <br>
  </div>

<!--HTML for Add Account popup window-->
<div id="add-account-popup-div" title="Add Account">
  <form role="form">
    <div class="form-group">
      <label for="tinNo">Tin #: </label>
      <input type="text" class="form-control" id="tinNo">
    </div>
    <div class="form-group">
      <label for="name">Name: </label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="section">Section: </label>
      <input type="text" class="form-control" id="section">
    </div>
    <div class="form-group">
      <label for="position">Position: </label>
      <input type="text" class="form-control" id="position">
    </div>
    <div class="form-group">
      <label for="password">Password: </label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm Password: </label>
      <input type="password" class="form-control" id="confirm-password">
    </div>
  </form>  
</div> 
<!--end of HTML for Add Account popup window-->

<!--HTML for edit button popup window-->
<div id="edit-account-popup-div">
  <form role="form">
    <div class="form-group">
      <label for="tinNo">Tin #: </label>
      <input type="text" class="form-control" id="tinNo-e">
    </div>
    <div class="form-group">
      <label for="name">Name: </label>
      <input type="text" class="form-control" id="name-e">
    </div>
    <div class="form-group">
      <label for="section">Section: </label>
      <input type="text" class="form-control" id="section-e">
    </div>
    <div class="form-group">
      <label for="position">Position: </label>
      <input type="text" class="form-control" id="position-e">
    </div>
    <div class="form-group">
      <label for="password">Password: </label>
      <input type="password" class="form-control" id="password-e">
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm Password: </label>
      <input type="password" class="form-control" id="confirm-password-e">
    </div>
  </form>  
</div>
<!--end of HTML for edit button popup window-->

<!--HTML for delete button popup window-->
<div id="delete-account-popup-div">
  <p>Are you sure you want to permanently delete this account?</p>
</div>
<!--end of HTML for delete button popup window-->

 <div class="footer">
            <div class = "row">
                <div class = "col-xs-8">
                    <div class="contact">
                        <p>Contact Us</p>
                        <p>(074)-998-7654<br>
                            cbao_baguio@gmail.com<br>
                            http:www.baguio.gov.ph<br>
                        </p>
                    </div>
                </div>

                <div class = "col-xs-3">
                    <div class="contact2">
                        <p>&copy; Copyright 2016</p>
                    </div>
                </div>
            </div>
  </div>
</body>
</html>

<!--Javascript-->
<script>
  var tinNo;
  var name;
  var section;
  var position;
  var password;
  var confirm_password;
  var originalTin;

  //for Add Account popup window
  $(function() {
    $( "#add-account-popup-div" ).dialog({
        autoOpen: false,
        closeOnEscape: false,
        open: function(event, ui) {
          $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
        },
        buttons: [
          {
            text: "Add",
            "class": 'dialog-add-account',
            click: function() {
              tinNo = $("#tinNo").val();
              name = document.getElementById("name").value;
              section = document.getElementById("section").value;
              position = document.getElementById("position").value;
              password = document.getElementById("password").value;
              confirm_password = document.getElementById("confirm-password").value;
              if(password != confirm_password){
                alert("Passwords did not match.");
              }else if(tinNo=="" || name=="" || section=="" || position=="" || password=="" || confirm_password==""){
                alert("Fields cannot be blank.");
              }else if(!checkTinNo(tinNo)){
                alert("Invalid Tin Number.");
              }else if(!checkSection(section)){
                alert("Invalid Section.");
              }else if(!checkPosition(position)){
                alert("Invalid Position.")
              }else{
                performAddAccount();
              }
            }
          },
          {
            text: "Cancel",
            "class": 'dialog-cancel',
            click: function() {$(this).dialog("close");}
          }
        ], 
        title: "Add Account",
        position: {
          my: "center center",
          at: "center center",
          of: window,
          collision: "none"
        },
        modal: true,
        create: function (event, ui){
          $(event.target).parent().css('position', 'fixed');
        }
    });
    $( "#addAccount" ).click(function() {
        $( "#add-account-popup-div" ).dialog( "open" );
    });
  });

  
  //to perform add account
  function performAddAccount(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
      if(xml.readyState == 4 && xml.status ==200){
        window.location.href = "functions.php?action=addAccount&tinNo=" + tinNo + "&name=" + name + "&section=" + section + "&position=" + position + "&password=" + password;
      }
    };
    xml.open("GET", "functions.php", true);
    xml.send();
  }

  //for Edit button
  $(function() {
    $( "#edit-account-popup-div" ).dialog({
        autoOpen: false,
        closeOnEscape: false,
        open: function(event, ui) {
          $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
        },
        buttons: [
          {
            text: "Save",
            "class": 'dialog-buttons',
            click: function() {
              tinNo = document.getElementById("tinNo-e").value;
              name = document.getElementById("name-e").value;
              section = document.getElementById("section-e").value;
              position = document.getElementById("position-e").value;
              password = document.getElementById("password-e").value;
              confirm_password = document.getElementById("confirm-password-e").value;
              if(password != confirm_password){
                alert("Passwords did not match.");
              }else if(tinNo=="" || name=="" || section=="" || position=="" || password=="" || confirm_password==""){
                alert("Fields cannot be blank.");
              }else if(!checkTinNo(tinNo)){
                alert("Invalid Tin Number.");
              }else{
                performEditAccount();
              }
            }
          },
          {
            text: "Cancel",
            "class": 'dialog-button',
            click: function() {$(this).dialog("close");}
          }
        ], 
        title: "Edit Account",
        position: {
          my: "center center",
          at: "center center",
          of: window,
          collision: "none"
        },
        modal: true,
        create: function (event, ui){
          $(event.target).parent().css('position', 'fixed');
        }
    });
    $( ".editAcc" ).click(function(event) {
        originalTin = event.target.id; 
        $( "#edit-account-popup-div" ).dialog( "open" );
    });
  });

//to perform add account
function performEditAccount(){
  var xml = new XMLHttpRequest();
  xml.onreadystatechange = function(){
    if(xml.readyState == 4 && xml.status ==200){
      window.location.href = "functions.php?action=editAccount&tinNo=" + tinNo + "&name=" + name + "&section=" + section + "&position=" + position + "&password=" + password + "&originalTin=" + originalTin;
     }
  };
  xml.open("GET", "functions.php", true);
  xml.send();
}

//for delete button click
$(function() {
    $( "#delete-account-popup-div" ).dialog({
        autoOpen: false,
        closeOnEscape: false,
        open: function(event, ui) {
          $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
        },
        buttons: [
          {
            text: "Yes",
            "class": 'dialog-buttons',
            click: function() {
              performDeleteAccount();
            }
          },
          {
            text: "Cancel",
            "class": 'dialog-button',
            click: function() {$(this).dialog("close");}
          }
        ], 
        title: "Delete Account",
        position: {
          my: "center center",
          at: "center center",
          of: window,
          collision: "none"
        },
        modal: true,
        create: function (event, ui){
          $(event.target).parent().css('position', 'fixed');
        }
    });
    $( ".delAcc" ).click(function(event) {
        tinNo = event.target.id; 
        $( "#delete-account-popup-div" ).dialog( "open" );
    });
  });

  function performDeleteAccount(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
      if(xml.readyState == 4 && xml.status == 200){
        window.location.href = "functions.php?action=deleteAccount&tinNo=" + tinNo;
       }
    };
    xml.open("GET", "functions.php", true);
    xml.send();
  }
  
  //for displaying the time realtime
	window.onload = updateClock();
  function updateClock(){	
		function pad(n) {
      return (n < 10) ? '0' + n : n;
    }

    var now = new Date();
    var hour = pad(now.getUTCHours()+8);
    var min = pad(now.getUTCMinutes());
    var newHour = hour;
    var ampm = "AM";

    if(hour >= 12){
      newHour = hour-12;
      ampm = "PM";
    }
    if(newHour == 0){
      newhour = 12;
    }

    var s = newHour + ":" + min + " " + ampm;

    document.getElementById('time-display').innerHTML = s;

    var delay = 1000 - (now % 1000);
    setTimeout(updateClock, delay);
	};

  //for validation of tin number input by user
  function checkTinNo(tinNo){
    //check if valid length
    if(tinNo.length != 11){
      return false;
    }

    //check if digits are valid integers
    for(var i = 0; i <= 2; i++){
      var c = tinNo.charAt(i);
      if(!(c >= '0' && c <= '9')){
        return false;
      }
    }
    for(var i = 4; i <= 6; i++){
      var c = tinNo.charAt(i);
      if(!(c >= '0' && c <= '9')){
        return false;
      }
    }
    for(var i = 8; i <= 10; i++){
      var c = tinNo.charAt(i);
      if(!(c >= '0' && c <= '9')){
        return false;
      }
    }

    //check if valid format
    if(tinNo.charAt(3) != '-' || tinNo.charAt(7) != '-'){
      return false;
    }

    return true;
  }

  //for validation of section input by user
  function checkSection(section){
    switch(section){
      case "Line and Grade": return true; break;
      case "Structural": return true; break;
      case "Architectural": return true; break;
      case "Electrical": return true; break;
      case "Sanitary/Plumbing": return true; break;
      case "Mechanical": return true; break;
      case "Receiving": return true; break;
      case "Admin": return true; break;
      default: return false; break;
    }
  }

  //for validation of position input by user
  function checkPosition(position){
    switch(position){
      case "Head": return true; break;
      case "Substitute": return true; break;
      default: return false; break;
    }
  }

  //for search feature
  $("#searchIcon").click(function() {
    var options = document.getElementById("filter-options");
    var option = options.options[options.selectedIndex].value;
    var value = document.getElementById("search-val").value;
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
      if(xml.readyState == 4 && xml.status == 200){
        document.getElementById("main-table").innerHTML = xml.responseText;
       }
    };

    xml.open("GET", "functions.php?action=search&option=" + option + "&value=" + value, true);
    xml.send();    
  });

  //logout
  $("#admin-logout").click(function(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
      if(xml.readyState == 4 && xml.status == 200){
        window.location.href = "functions.php?action=logout";
       }
    };

    xml.open("GET", "functions.php", true);
    xml.send();  
  })

  //give table to tablesorter
  $(document).ready(function() {
    $("#admin-home-table").tablesorter();
  });
</script>

<!--End of JavaScript-->