<?php
    require_once 'credentials.php';
    
    //session_start();        
    
    $id = $_SESSION['bpform_id'];
    
    $conn = open_db_conn();
    
    $query = "select section, count(comment)
                from $database.$bpform inner join $database.$routing_slip 
                using (bpform_id) 
                inner join $database.$comments using (comments_id)
                inner join $database.$personnel using (personnel_id)
                where bpform_id = \"$id\"
                group by personnel_id ";
    
    $result = $conn->query($query);
    
    if (!$result) {
        show_error_msg($conn->error);
    }
    
    $len = $result->num_rows;
    $row = mysqli_fetch_all($result); 
    
    //initialize all row counters
    $lg_row_count = 0;
    $a_row_count = 0;
    $struc_row_count = 0;        
    $san_row_count = 0;
    $e_row_count = 0;        
    $m_row_count = 0;
    $cpo_row_count = 0;        
    $abo_row_count = 0;
    $bo_row_count = 0;
    
    //initialize all empty row counters
    $lg_row_count_e = 0;
    $a_row_count_e = 0;
    $struc_row_count_e = 0;        
    $san_row_count_e = 0;
    $e_row_count_e = 0;        
    $m_row_count_e = 0;
    $cpo_row_count_e = 0;        
    $abo_row_count_e = 0;
    $bo_row_count_e = 0;
            
    for($r = 0; $r < $len; $r++){        
        switch($row[$r][0]){
            case 'LINEANDGRADE':       
                    $lg_row_count = $row[$r][1];
                    break;
                case 'ARCHITECTURAL': 
                    $a_row_count = $row[$r][1];
                    break;
                case 'STRUCTURAL': 
                    $struc_row_count = $row[$r][1];
                    break;
                case 'SANITARY': 
                    $san_row_count = $row[$r][1];
                    break;
                case 'ELECTRICAL': 
                    $e_row_count = $row[$r][1];
                    break;
                case 'MECHANICAL': 
                    $m_row_count = $row[$r][1];
                    break;
                case 'CPO': 
                    $cpo_row_count = $row[$r][1];
                    break;
                case 'ABO': 
                    $abo_row_count = $row[$r][1];
                    break;
                case 'BO': 
                    $bo_row_count =  $row[$r][1];
                    break;
                default: break;
        }
    }
    
    if($lg_row_count == 0){
        $lg_row_count_e = 1;
    }
    
    if($a_row_count == 0){
        $a_row_count_e = 1;
    }
    
    if($struc_row_count == 0){
        $struc_row_count_e = 1;
    }
    
    if($san_row_count == 0){
        $san_row_count_e = 1;
    }
    
    if($e_row_count == 0){
        $e_row_count_e = 1;
    }
    
    if($m_row_count == 0){
        $m_row_count_e = 1;
    }
    
    if($cpo_row_count == 0){
        $cpo_row_count_e = 1;
    }
    
    if($abo_row_count == 0){
        $abo_row_count_e = 1;
    }
    
    if($bo_row_count == 0){
        $bo_row_count_e = 1;
    }        
    
    close_db_conn($conn);
?>
