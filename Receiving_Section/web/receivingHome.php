<?php
session_start();

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

        return preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $string); // Removes special chars.
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
        <?php include '../common/head.php'; ?>

        <link rel="stylesheet" href="../css/receivingHome.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">

        <script src="../jquery/jquery.min.js"></script>
        <script src="../jquery/bootstrap.min.js"></script>

        <script type="text/javascript" src="tablesorter-master/jquery-latest.js"></script> 
        <script type="text/javascript" src="tablesorter-master/jquery.tablesorter.js"></script> 
        <script type="text/javascript" src="tablesorter-master/jquery.tablesorter.pager.js"></script>

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
                $(".table table-radius table-hover").tablesorter({sortList: [[0, 0], [1, 0]]});
                update();

                $("table")
                        .tablesorter({widthFixed: true, widgets: ['zebra']})
                        .tablesorterPager({container: $("#pager")});
            });
        </script>


    </head>
    <body>
        <?php include '../common/header.php'; ?>

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
                    <li><a href="" id="logOut" ><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
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
                                                    echo "<td><button id = '$controlNum' class='viewMe' name='viewReq'>View Requirements</button>";
                                                    echo "<td>" . $status . "</td>";
                                                    echo "</tr>";
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



                            <?php include '../common/footer.php'; ?>
                            </body>
                            </html>


                            <script type="text/javascript">
                                $(".viewMe").click(function (event) {
                                    id = event.target.id;
                                    //alert(id);
                                    var xml = new XMLHttpRequest();
                                    xml.onreadystatechange = function () {
                                        if (xml.readyState == 4 && xml.status == 200) {
                                            window.location.href = "checkStatus.php?id=" + id;
                                        }
                                    };
                                    xml.open("GET", "receivingRequirements.php", true);
                                    xml.send();
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
                                })

                            </script>