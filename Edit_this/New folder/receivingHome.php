<?php
session_start();
//include 'save.php';

if (!isset($_SESSION['section'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['searchIcon'])) {

    $valueToSearch = $_POST['valueToSearch'];

    // search in all table columns
    // using concat mysql function
    function clean($string) {
        $string = str_replace('%', ' ', $string); // Replaces all spaces with hyphens.

        return $result = preg_replace("/[^a-zA-Z0-9]+/", "", $string); // Removes special chars. // Removes special chars.
    }

    clean($valueToSearch);
    $select = $_POST['drop'];
    if ($select == 0) {
        $_SESSION['query'] = "SELECT * FROM checklist WHERE controlNum LIKE '%" . $valueToSearch . "%'";
        $search_result = filterTable($_SESSION['query']);

        if (!empty($filter_Result)) {
            $error = "Record Not Found";
        }
    } else if ($select == 1) {
        $_SESSION['query'] = "SELECT * FROM checklist WHERE permitNum LIKE '%" . $valueToSearch . "%'";
        $search_result = filterTable($_SESSION['query']);
    } else if ($select == 2) {
        $_SESSION['query'] = "SELECT * FROM checklist WHERE appNum LIKE '%" . $valueToSearch . "%'";
        $search_result = filterTable($_SESSION['query']);
    } else if ($select == 3) {
        $_SESSION['query'] = "SELECT * FROM checklist WHERE dateOfApp LIKE '%" . $valueToSearch . "%'";
        $search_result = filterTable($_SESSION['query']);
    } else if ($select == 4) {
        $_SESSION['query'] = "SELECT * FROM checklist WHERE status LIKE '%" . $valueToSearch . "%'";
        $search_result = filterTable($_SESSION['query']);
    }
} else {
    $_SESSION['query'] = "SELECT * FROM checklist";
    $search_result = filterTable($_SESSION['query']);
}

function filterTable($query) {
    $connect = mysqli_connect("localhost", "root", "", "baguio_cbao");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
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
		
		<script type="text/javascript" src="wew/jquery.min.js"></script>
		
        <script type="text/javascript" src="wew/bootstrap.min.js"></script>
		
        <script type="text/javascript" src="wew/jquery-1.12.0.min.js" ></script>
   
	
		
        <link rel="stylesheet" href="../css/receivingHome.css">
		
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
		
        <script type="text/javascript" src="tablesorter-master/jquery-latest.js"></script>         
        <script type="text/javascript" src="tablesorter-master/jquery.tablesorter.js"></script> 
        <script type="text/javascript" src="tablesorter-master/jquery.tablesorter.pager.js"></script>
        
		
		<link rel="stylesheet" href="wew/jquery-ui.css">
	<script type="text/javascript" src="wew/jquery-ui.min.js" ></script>
	
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
                    <a class="navbar-brand" href="receivingHome.html">Receiving Section</a>
                </div>
                <ul class="nav navbar-nav">

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp; Applications</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; Notifications</a></li>
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
                                        <form action="receivingHome.php" method="post">
                                            <input type="text" id="searched" class="form-control" name="valueToSearch" onkeyup="key()" value="<?= (isset($valueToSearch) ? $valueToSearch : "") ?>" placeholder="Search" />
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
                                                                <option value="4">Status</option>
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
if (mysqli_num_rows($search_result) == 0) {

    $error = "n/a";
    echo "<tr>";

    echo "<td>" . $error . "</td>";
    echo "<td>" . $error . "</td>";
    echo "<td>" . $error . "</td>";
    echo "<td>" . $error . "</td>";
    echo "<td>" . $error . "</td>";

  
    echo "</tr>";
} else {
    while ($row = mysqli_fetch_array($search_result)) {
        $controlNum = $row['bpform_id'];
        $permitNum = $row['permitNum'];
        $appNum = $row['appNum'];
        $dateOfApp = $row['dateOfApp'];
       

        //display in table
        echo "<tr>";
        echo "<td>" . $controlNum . "</td>";
        echo "<td>" . $permitNum . "</td>";
        echo "<td>" . $appNum . "</td>";

        echo "<td>" . $dateOfApp . " </td>";
        //echo "<td><button id = '$controlNum' class='viewMe' onclick='enter()' name='viewReq'>View Requirements</button>";
        echo "<td><input type='button' id = '$controlNum' class='viewMe' name='viewReq' value='View Requirements'></input>";
       
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
                            <div id="promptDiv">
                                <p>This certain application has no assigned permit and application number yet. Please input both information in order to proceed.</p>
                                <form role="form" id="prompt-form">
                                    <div class="form-group">
                                        <label for="tinNo">Enter permit number (xxxx-xxx-xxx): </label>
                                        <input type="text" class="form-control" id="permitNo">
                                    </div>
                                    <div class="form-group">
                                        <label for="tinNo">Enter application number(xxxx-xxxxxx): </label>
                                        <input type="text" class="form-control" id="appNo">
                                    </div>
                                </form>
                            </div>
                            </body>
                            </html>


                            <script type="text/javascript">
                                var rowIndex;
                                var indexPermitNum;
                                var indexAppNum;
                                var id;
                                var permitNum;
                                var appNum;

                                $(function () {
                                    $("#promptDiv").dialog({
                                        autoOpen: false,
                                        closeOnEscape: false,
                                        height: 370,
                                        width: 400,
                                        buttons: [
                                            {
                                                text: "Submit",
                                                click: function () {
                                                    var permitInput = document.getElementById("permitNo").value;
                                                    var appInput = document.getElementById("appNo").value;

                                                    if(permitInput == ""){
                                                        alert("Please input a permit number.");
                                                    }else if(appInput == ""){
                                                        alert("Please input an application number.");
                                                    }else if(!checkPermit(permitInput)){
                                                        alert("Invalid permit number.");
                                                    }else if(!checkApp(appInput)){
                                                        alert("Invalid application number.");
                                                    }else{
                                                        var xml = new XMLHttpRequest();

                                                        xml.onreadystatechange = function () {
                                                            if (xml.readyState == 4 && xml.status == 200) {
                                                                window.location.href = "functions.php?action=appPermitNumbers&permit=" + permitInput + "&app=" + appInput + "&control=" + id;
                                                            }
                                                        };

                                                        xml.open("GET", "functions.php", true);
                                                        xml.send();
                                                    }
                                                
                                                    /*if (permitInput == indexPermitNum && appInput == indexAppNum) {
                                                        var xml = new XMLHttpRequest();

                                                        xml.onreadystatechange = function () {
                                                            if (xml.readyState == 4 && xml.status == 200) {
                                                                window.location.href = "checkStatus.php?id=" + id;
                                                            }
                                                        };

                                                        xml.open("GET", "receivingRequirements.php", true);
                                                        xml.send();
                                                    } else {
                                                        alert("Incorrect");
                                                    }*/
                                                }

                                            },
                                            {
                                                text: "Cancel",
                                                click: function () {
                                                    $(this).dialog("close");
                                                }
                                            }
                                        ],
                                        title: "Confimation",
                                        position: {
                                            my: "center center",
                                            at: "center center",
                                            of: window,
                                            collision: "none"
                                        },
                                        modal: true,
                                        create: function (event, ui) {
                                            $(event.target).parent().css('position', 'fixed');
                                        },
                                        open: function (event, ui) {
                                            $('body').addClass('stop-scroll');
                                            $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
                                            $('html, body').animate({scrollTop: '0px'}, 300);
                                        },
                                        beforeClose: function () {
                                            $('body').removeClass('stop-scroll');
                                        }
                                    });
                                    $(".viewMe").click(function (event) {
                                        id = event.target.id;

                                        permitNum = "<?php echo $permitNum; ?>";
                                        if(permitNum == ""){
                                            $("#promptDiv").dialog("open");
                                        }else{
                                            var xml = new XMLHttpRequest();

                                            xml.onreadystatechange = function () {
                                                if (xml.readyState == 4 && xml.status == 200) {
                                                    window.location.href = "checkStatus.php?id=" + id;
                                                }
                                            };

                                            xml.open("GET", "checkStatus.php", true);
                                            xml.send();
                                        }
                                    });
                                });

                                function checkPermit(num){
                                    if(num.length != 12){
                                      return false;
                                    }

                                    if(num.charAt(4) != '-' || num.charAt(8) != '-'){
                                        return false;
                                    }

                                    for(var i = 0; i <= 3; i++){
                                        var c = num.charAt(i);
                                        if(!(c >= '0' && c <= '9')){
                                            return false;
                                        }
                                    }
                                    for(var i = 5; i <= 7; i++){
                                        var c = num.charAt(i);
                                        if(!(c >= '0' && c <= '9')){
                                            return false;
                                        }
                                    }
                                    for(var i = 9; i <= 11; i++){
                                        var c = num.charAt(i);
                                        if(!(c >= '0' && c <= '9')){
                                            return false;
                                        }
                                    }

                                    return true;
                                }

                                function checkApp(num){
                                    if(num.length != 11){
                                      return false;
                                    }

                                    if(num.charAt(4) != '-'){
                                        return false;
                                    }     
                                                    
                                    for(var i = 0; i <= 3; i++){
                                        var c = num.charAt(i);
                                        if(!(c >= '0' && c <= '9')){
                                            return false;
                                        }
                                    }

                                    for(var i = 5; i <= 10; i++){
                                        var c = num.charAt(i);
                                        if(!(c >= '0' && c <= '9')){
                                            return false;
                                        }
                                    }

                                    return true;

                                }

                                $("#tables").find("tr").click(function () {
                                    rowIndex = $(this).index();
                                    indexPermitNum = document.getElementById("tables").rows[rowIndex].cells[1].innerHTML;
                                    indexAppNum = document.getElementById("tables").rows[rowIndex].cells[2].innerHTML;
                                });


                                $("#logOut").click(function () {
                                    var xml = new XMLHttpRequest();
                                    xml.onreadystatechange = function () {
                                        if (xml.readyState == 4 && xml.status == 200) {
                                            window.location.href = "functions.php?action=logout";
                                        }
                                    };

                                    xml.open("GET", "functions.php", true);
                                    xml.send();
                                });

                            </script>