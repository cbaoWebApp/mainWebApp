<?php

$conn = open_db_conn();

$query = "select date_received, time_in, time_out, comment 
            from $database.$routing_slip inner join 
            $database.$comments using (comments_id)
            inner join $database.$personnel using (personnel_id)
            where bpform_id = \"$id\" AND personnel_id = \"6\" ";

$result = $conn->query($query);

if (!$result) {
    show_error_msg($conn->error);
}

$san_select = mysqli_fetch_all($result);

function san_create($san_row_count, $san_row_count_e, $san_select) {
    if (empty($san_select)) {
        show_temp_record();
    } else if ($san_row_count_e === 1) {
        sanCreateRecord($san_select, $san_row_count_e);
    } else {
        sanCreateRecord($san_select, $san_row_count);
    }
}

function sanCreateRecord($san_select, $size) {
    for ($r = 0; $r < $size; $r++) {
        sanRecord($san_select, $r);
    }
    return;
}

function sanRecord($san_select, $r) {
    echo ("<div class=\"form-group\">
                    <label for=\"date_received\" class=\"control-label col-xs-3\">Date Received:</label>
                    <h5>" . check_value($san_select[$r][0]) . "</h5>
                    <br>
                    <label for=\"time_in\" class=\"control-label col-xs-3\">Timestamp In:</label>
                    <h5>" . check_value($san_select[$r][1]) . "</h5>
                    <br>
                    <label for=\"time_out\" class=\"control-label col-xs-3\">Timestamp Out:</label>
                    <h5>" . check_value($san_select[$r][2]) . "</h5>
                    <br>            
                    <label for=\"comments\" class=\"control-label col-xs-3\">Comments:</label>
                    <h5>" . check_value($san_select[$r][3]) . "</h5>
                    <br>
                    <label for=\"appName\" class=\"control-label col-xs-3\">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>       
            ");
    return;
}

close_db_conn($conn);
?>

