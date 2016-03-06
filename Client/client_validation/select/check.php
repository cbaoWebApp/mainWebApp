<?php

function check_value($data) {
    $filtered_str = \trim(\filter_var($data, \FILTER_SANITIZE_STRING));
    if ($filtered_str === "NULL" ||
            $filtered_str === "0000-00-00" ||
            $filtered_str === "0000-00-00 00:00:00" ||
            empty($data)) {
        $filtered_str = "None yet.";
    } else {
        $filtered_str = $filtered_str;
    }
    return $filtered_str;
}

function show_temp_record() {
    echo ("<div class=\"form-group\">
                    <label for=\"date_received\" class=\"control-label col-xs-3\">Date Received:</label>
                    <h5>None yet.</h5>
                    <br>
                    <label for=\"time_in\" class=\"control-label col-xs-3\">Timestamp In:</label>
                    <h5>None yet.</h5>
                    <br>
                    <label for=\"time_out\" class=\"control-label col-xs-3\">Timestamp Out:</label>
                    <h5>None yet.</h5>
                    <br>            
                    <label for=\"comments\" class=\"control-label col-xs-3\">Comments:</label>
                    <h5>None yet.</h5>
                    <br>
                    <label for=\"appName\" class=\"control-label col-xs-3\">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>       
            ");
}
?>

