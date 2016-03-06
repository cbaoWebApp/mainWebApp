<?php

$conn = open_db_conn();

$query = "select date_received, time_in, time_out, comment 
            from $database.$routing_slip inner join 
            $database.$comments using (comments_id)
            inner join $database.$personnel using (personnel_id)
            where bpform_id = \"$id\" AND personnel_id = \"9\" ";

$result = $conn->query($query);

if (!$result) {
    show_error_msg($conn->error);
}

$abo_select = mysqli_fetch_all($result);

function abo_create($abo_row_count, $abo_row_count_e, $abo_select) {
    if (empty($abo_select)) {
        show_temp_record();
    }else if($abo_row_count_e === 1) {
        aboCreateRecord($abo_select, $abo_row_count_e);
    } else if($abo_row_count > 0){
        aboCreateRecord($abo_select, $abo_row_count);
    }
}

function aboCreateRecord($abo_select, $size) {
    for ($r = 0; $r < $size; $r++) {
        aboRecord($abo_select, $r);
    }
    return;
}

function aboRecord($abo_select, $r) {
    echo ("<div class=\"form-group\">
                    <label for=\"date_received\" class=\"control-label col-xs-3\">Date Received:</label>
                    <h5>" . check_value($abo_select[$r][0]) . "</h5>
                    <br>
                    <label for=\"time_in\" class=\"control-label col-xs-3\">Timestamp In:</label>
                    <h5>" . check_value($abo_select[$r][1]) . "</h5>
                    <br>
                    <label for=\"time_out\" class=\"control-label col-xs-3\">Timestamp Out:</label>
                    <h5>" . check_value($abo_select[$r][2]) . "</h5>
                    <br>            
                    <label for=\"comments\" class=\"control-label col-xs-3\">Comments:</label>
                    <h5>" . check_value($abo_select[$r][3]) . "</h5>
                    <br>
                    <label for=\"appName\" class=\"control-label col-xs-3\">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>       
            ");
    return;
}

close_db_conn($conn);
?>

