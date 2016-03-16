<?php
session_start();
//include 'save.php';

if(!isset($_SESSION['section'])){
   header("Location: index.php"); 
   exit();
  }
  
if(isset($_POST['searchIcon']))
{
	
    $valueToSearch = $_POST['valueToSearch'];
	
    // search in all table columns
    // using concat mysql function
		function clean($string) {
	   $string = str_replace('%', ' ', $string); // Replaces all spaces with hyphens.

		return preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $string); // Removes special chars.
	}
	 clean($valueToSearch);
$select=$_POST['drop'];
	 if($select == 0){
		 $_SESSION['query'] = "SELECT * FROM bo WHERE controlNum LIKE '%".$valueToSearch."%'";
		 $search_result = filterTable($_SESSION['query']);
			 
		  if(!empty($filter_Result)){
			  $error = "Record Not Found";
		  }
	 } else if($select == 1){
		 $_SESSION['query'] = "SELECT * FROM bo WHERE permitNum LIKE '%".$valueToSearch."%'";
		 $search_result  = filterTable($_SESSION['query']);
	 } else if($select == 2){
		 $_SESSION['query'] = "SELECT * FROM bo WHERE appNum LIKE '%".$valueToSearch."%'";
		  $search_result  = filterTable($_SESSION['query']);
	 } else if($select == 3){
		 $_SESSION['query'] = "SELECT * FROM bo WHERE dateOfApp LIKE '%".$valueToSearch."%'";
		  $search_result  = filterTable($_SESSION['query']);
	 } 
    
}
 else {
    $_SESSION['query'] = "SELECT * FROM bo";
    $search_result = filterTable($_SESSION['query']);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "baguio_cbao");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}



	
// function to connect and execute the query
/*
<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['controlNum'];?></td>
                    <td><?php echo $row['permitNum'];?></td>
                    <td><?php echo $row['dateOfApp'];?></td>
                    <td><?php echo $row['status'];?></td>
					<td><?php echo $row['appNum'];?></td>
                </tr>
                <?php endwhile;?>
*/
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CBAO Web Application</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="en" content="CBAO Web Application">
        <meta name="author" content="SLUSCIS">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="../css/receivingHome.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="tablesorter-master/jquery-latest.js"></script> 
		<script type="text/javascript" src="tablesorter-master/jquery.tablesorter.js"></script> 
		<script type="text/javascript" src="tablesorter-master/jquery.tablesorter.pager.js"></script>
 
  <script type= "text/javascript" src="jquery-1.4.1.js"> </script>
    <script type= "text/javascript">
$(document).ready(function() {

    function update() {
      $.ajax({
       type: 'POST',
       url: 'timer.php',
       timeout: 999,
       success: function(data) {
          $("#timer").html(data); 
          window.setTimeout(update, 1000);
       }
      });
     }
	 

	 
	 //var table = $('#tables');
     // refresh every second
   //  var refresher = setInterval(function(){
    //   table.load("tableRef.php");
    // }, 1000);
	 
	
	 
	 $(".table table-radius table-hover").tablesorter({ sortList: [[0,0], [1,0]] });
	 update();

	$("table")
			.tablesorter({widthFixed: true, widgets: ['zebra']})
			.tablesorterPager({container: $("#pager")});
});
</script>

	
	</head>
    <body>
    <div class="header">
            <div class = "row">
                <div class = "col-md-4">
                    <p><img class = "img-responsive" src="../img/seal.png" alt=""></p>
                </div>
                <div class = "col-md-4">
                    <p>City Government of Baguio</p>
                </div>
                
            </div>
        </div>

        <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="buildingOfficial.php">Building Official</a>
            </div>
            <ul class="nav navbar-nav">
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp; Applications</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; View Report</a></li>
              <li><a id="logOut" ><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
            </ul>
          </div>
        </nav>

  <br>
          
        <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h4 >
			  
			  <?php echo date("l, F d ,Y"); ?>
			  
			  <h4>
		
          </div>
          <div class="col-md-6">
             

          </div> 
        </div>
        
        <div class="row">
        <div class="col-md-6">
		 
          <h4 id="timer">
		  <!--
		  		
		-->
			</h4>

        </div>
        <div class="col-md-6">
           <div class="input-group" id="adv-search">
		   <form action="buildingOfficial.php" method="post">
                <input type="text" id="searched" class="form-control" name="valueToSearch" onkeyup="key()" value="<?=(isset($valueToSearch) ? $valueToSearch : "")?>" placeholder="Search" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select id="drop" name="drop" class="form-control">
                                        <option value="0" selected>Control No.</option>
                                        <option value="1">Permit No.</option>
                                        <option value="2">Application No.</option>
                                        <option value="3">Date of Application</option>
                                    </select>
                                  </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary" id = "searchIcon" name = "searchIcon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

          <div class = "table">


      <div class="table-responsive">
	  
        <table  class="table table-radius table-hover">
		
          <thead>
            <tr>
              <th>Control Number</th>
              <th>Permit Number</th>
              <th>Application Number</th>
              <th>Date of Application</th>
              <th>Requirements</th>
            </tr>
          </thead>
          <tbody id="tables">
		  <?php
		  if(mysqli_num_rows($search_result) == 0){
				
						$error= "n/a";
						echo "<tr>";
						
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						echo "<td>".$error."</td>";
						echo "</tr>";
						} else {
			while($row = mysqli_fetch_array($search_result)){
                  $controlNum = $row['controlNum'];
                  $permitNum = $row['permitNum'];
                  $appNum = $row['appNum'];
                  $dateOfApp = $row['dateOfApp'];
				  
                  //display in table
                  echo "<tr>";
                  echo "<td>" . $controlNum . "</td>";
                  echo "<td>".$permitNum."</td>";
                  echo "<td>".$appNum."</td>";

                  echo "<td>". $dateOfApp." </td>";
				  echo "<td><button id = '$controlNum' class='viewMe' name='viewReq'>View Summary</button>";
                  echo "</tr>";
                
                //mysqli_close($conn);
              
            } 
	}
			?>
             
         
		
		  </tbody>
        </table>
			</form>
		</form>
		<div id="pager" class="pager">
			<form>
					<input type="button" value="<" class="prev"/>
					<input type="text" class="pagedisplay"/>
					<input type="button" value=">" class="next"/>
			
					<select class="pagesize">
						<option selected="selected"  value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option  value="40">40</option>
					</select>
				</form>
			</div>
	
		
				
      </div>
    </div>
  </div>


  
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
  
			
<script type="text/javascript">
$( ".viewMe" ).click(function(event) {
        id = event.target.id; 
        //alert(id);
		var xml = new XMLHttpRequest();
		xml.onreadystatechange = function(){
		  if(xml.readyState == 4 && xml.status ==200){
			window.location.href = "karla.php?id=" + id;
		   }
		};
		xml.open("GET", "karla.php", true);
		xml.send();
		});
		
		$("#logOut").click(function(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
      if(xml.readyState == 4 && xml.status == 200){
        window.location.href = "functions.php?action=logout";
       }
    };

    xml.open("GET", "functions.php", true);
    xml.send();  
  })
  
  
  /*
		function key(){
 
 
	    var x = document.getElementById("searched").value;
		
		if(x == ''){
			alert("asd");
			var call = document.write('<?php' filterTable($_SESSION['query']);'?>');
		}
    
	}*/

</script>