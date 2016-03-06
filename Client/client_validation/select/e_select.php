<?php

$conn = open_db_conn();

$query = "select date_received, time_in, time_out, comment 
            from $database.$routing_slip inner join 
            $database.$comments using (comments_id)
            inner join $database.$personnel using (personnel_id)
            where bpform_id = \"$id\" AND personnel_id = \"5\" ";

$result = $conn->query($query);

if (!$result) {
    show_error_msg($conn->error);
}

$e_select = mysqli_fetch_all($result);

function e_create($e_row_count, $e_row_count_e, $e_select) {
    if (empty($e_select)) {
        show_temp_record();
    }else if($e_row_count_e === 1) {
        eCreateRecord($e_select, $e_row_count_e);
    } else if($e_row_count > 0){
        eCreateRecord($e_select, $e_row_count);
    }
}

function eCreateRecord($e_select, $size) {
    for ($r = 0; $r < $size; $r++) {
        eRecord($e_select, $r);
    }
    return;
}

function eRecord($e_select, $r) {
    echo ("<div class=\"form-group\">
                    <label for=\"date_received\" class=\"control-label col-xs-3\">Date Received:</label>
                    <h5>" . check_value($e_select[$r][0]) . "</h5>
                    <br>
                    <label for=\"time_in\" class=\"control-label col-xs-3\">Timestamp In:</label>
                    <h5>" . check_value($e_select[$r][1]) . "</h5>
                    <br>
                    <label for=\"time_out\" class=\"control-label col-xs-3\">Timestamp Out:</label>
                    <h5>" . check_value($e_select[$r][2]) . "</h5>
                    <br>            
                    <label for=\"comments\" class=\"control-label col-xs-3\">Comments:</label>
                    <h5>" . check_value($e_select[$r][3]) . "</h5>
                    <br>
                    <label for=\"appName\" class=\"control-label col-xs-3\">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>       
            ");
    return;
}

close_db_conn($conn);
?>

