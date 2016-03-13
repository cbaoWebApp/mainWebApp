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

        <link rel="stylesheet" href="../../css/receiving/receivingHome.css">
        <link rel="stylesheet" href="../../btstrp/css/bootstrap.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="tablesorter-master/jquery-latest.js"></script> 
        <script type="text/javascript" src="tablesorter-master/jquery.tablesorter.js"></script> 
        <script type="text/javascript" src="tablesorter-master/jquery.tablesorter.pager.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>

        <script type= "text/javascript">
            $(document).ready(function () {

                function update() {
                    $.ajax({
                        type: 'POST',
                        url: 'timer.php',
                        timeout: 999,
                        success: function (data) {
                            $("#timer").html(data);
                            window.setTimeout(update, 1000);
                        }
                    });
                }
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
                                                <th>Status</th>
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

    echo "<td>" . $error . "</td>";
    echo "</tr>";
} else {
    while ($row = mysqli_fetch_array($search_result)) {
        $controlNum = $row['controlNum'];
        $permitNum = $row['permitNum'];
        $appNum = $row['appNum'];
        $dateOfApp = $row['dateOfApp'];
        $status = $row['status'];

        //display in table
        echo "<tr>";
        echo "<td>" . $controlNum . "</td>";
        echo "<td>" . $permitNum . "</td>";
        echo "<td>" . $appNum . "</td>";

        echo "<td>" . $dateOfApp . " </td>";
        //echo "<td><button id = '$controlNum' class='viewMe' onclick='enter()' name='viewReq'>View Requirements</button>";
        echo "<td><input type='button' id = '$controlNum' class='viewMe' name='viewReq' value='View Requirements'></input>";
        echo "<td>" . $status . "</td>";
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
                                <form role="form" id="prompt-form">
                                    <div class="form-group">
                                        <label for="tinNo">Enter permit number: </label>
                                        <input type="text" class="form-control" id="permitNo">
                                    </div>
                                    <div class="form-group">
                                        <label for="tinNo">Enter application number: </label>
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

                                $(function () {
                                    $("#promptDiv").dialog({
                                        autoOpen: false,
                                        closeOnEscape: false,
                                        height: 340,
                                        width: 400,
                                        buttons: [
                                            {
                                                text: "Submit",
                                                click: function () {
                                                    var permitInput = document.getElementById("permitNo").value;
                                                    var appInput = document.getElementById("appNo").value;
                                                    if (permitInput == indexPermitNum && appInput == indexAppNum) {
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
                                                    }
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
                                        $("#promptDiv").dialog("open");
                                    });
                                });

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