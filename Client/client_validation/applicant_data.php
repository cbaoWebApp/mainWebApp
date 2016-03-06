<?php

session_start();

require_once 'credentials.php';

$id = $_SESSION['app_id'];

$conn = open_db_conn();

if ($conn->connect_error) {
    show_error_msg($conn->connect_error);
}

if (isset($id)) {

    $query1 = "SELECT applicant_id, date_of_application, last_name, 
                    first_name, middle_initial, bpform_id
                    FROM $database.$applicant INNER JOIN $database.$bpform "
            . "USING (applicant_id) WHERE applicant_id = \"$id\" ";

    $result = $conn->query($query1);

    if (!$result) {
        show_error_msg($conn->error);
    }
    
    close_db_conn($conn);
    
    $size = $result->num_rows;
    $data = $result->fetch_row();

    if ($size == 1) {
        $doa = $data[1];
        $lname = $data[2];
        $fname = $data[3];
        $mi = $data[4];
        $name = $lname . ", " . $fname . " " . $mi . ".";
        $bpform_id = $data[5];

        $_SESSION['bpform_id'] = $bpform_id;

        $conn = open_db_conn();
        
        $query2 = "SELECT date_received, time_in, time_out, 
                    MAX(comment) as 'comment', section 
                    FROM $database.$routing_slip inner join $database.$comments 
                    USING (comments_id)
                    INNER JOIN $database.$personnel USING (personnel_id)
                    WHERE bpform_id = \"$bpform_id\"
                    GROUP BY section
                    ;";

        $result2 = $conn->query($query2);

        if (!$result2) {
            show_error_msg($conn->error);
        }
        
        $len = $result2->num_rows;
                
        while($data2 = mysqli_fetch_assoc($result2) ){            
            switch ($data2['section']){                
                case 'LINEANDGRADE':       
                    $lg_date_received = check_value($data2['date_received']);
                    $lg_time_in = check_value($data2['time_in']);
                    $lg_time_out = check_value($data2['time_out']);
                    $lg_comment = check_value($data2['comment']);
                    break;
                case 'ARCHITECTURAL': 
                    $a_date_received = check_value($data2['date_received']);
                    $a_time_in = check_value($data2['time_in']);
                    $a_time_out = check_value($data2['time_out']);
                    $a_comment = check_value($data2['comment']);
                    break;
                case 'STRUCTURAL': 
                    $struc_date_received = check_value($data2['date_received']);
                    $struc_time_in = check_value($data2['time_in']);
                    $struc_time_out = check_value($data2['time_out']);
                    $struc_comment = check_value($data2['comment']);
                    break;
                case 'SANITARY': 
                    $san_date_received = check_value($data2['date_received']);
                    $san_time_in = check_value($data2['time_in']);
                    $san_time_out = check_value($data2['time_out']);
                    $san_comment = check_value($data2['comment']);
                    break;
                case 'ELECTRICAL': 
                    $e_date_received = check_value($data2['date_received']);
                    $e_time_in = check_value($data2['time_in']);
                    $e_time_out = check_value($data2['time_out']);
                    $e_comment = check_value($data2['comment']);
                    break;
                case 'MECHANICAL': 
                    $m_date_received = check_value($data2['date_received']);
                    $m_time_in = check_value($data2['time_in']);
                    $m_time_out = check_value($data2['time_out']);
                    $m_comment = check_value($data2['comment']);
                    break;
                case 'CPO': 
                    $cpo_date_received = check_value($data2['date_received']);
                    $cpo_time_in = check_value($data2['time_in']);
                    $cpo_time_out = check_value($data2['time_out']);
                    $cpo_comment = check_value($data2['comment']);
                    break;
                case 'ABO': 
                    $abo_date_received = check_value($data2['date_received']);
                    $abo_time_in = check_value($data2['time_in']);
                    $abo_time_out = check_value($data2['time_out']);
                    $abo_comment = check_value($data2['comment']);
                    break;
                case 'BO': 
                    $bo_date_received = check_value($data2['date_received']);
                    $bo_time_in = check_value($data2['time_in']);
                    $bo_time_out = check_value($data2['time_out']);
                    $bo_comment = check_value($data2['comment']); 
                    break;
                default: break;  
            }
        }
        close_db_conn($conn);
    } else {
        
    }
}

function check_value($data){
    $filtered_str = trim(\filter_var($data, \FILTER_SANITIZE_STRING));
    if($filtered_str === "NULL" || 
            $filtered_str === "0000-00-00" ||
            $filtered_str === "0000-00-00 00:00:00" ||
            empty($data)){
        $filtered_str = "None yet.";
    }else{
        $filtered_str = $filtered_str;
    }
    return $filtered_str;
}

?>

