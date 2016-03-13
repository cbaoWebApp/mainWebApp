<?php

require_once '../../../client_validation/credentials.php';

require_once 'sanitary_total_quantity.php';
    
$conn = open_db_conn();

$query6b = "select i, ii, iii, iv, v, vi from $database.$schedule_of_fees
            where section = \"6\" and category = \"b\"";

$query6c = "select i, ii, iii, iv, v, vi, vii, viii, ix,
            x, xi, xii, xiii from $database.$schedule_of_fees
            where section = \"6\" and category = \"c\"";

$query6d = "select i, ii, iii from $database.$schedule_of_fees
            where section = \"6\" and category = \"d\"";

$query6e = "select i, ii from $database.$schedule_of_fees
            where section = \"6\" and category = \"e\"";

$result6b = $conn->query($query6b);
$result6c = $conn->query($query6c);
$result6d = $conn->query($query6d);
$result6e = $conn->query($query6e);

$data6b = $result6b->fetch_row();
$data6c = $result6c->fetch_row();
$data6d = $result6d->fetch_row();
$data6e = $result6e->fetch_row();

close_db_conn($conn);

$total_fee = array();

$total_fee[0] = $water_closet_q * $data6b[0];
$total_fee[1] = $floor_drain_q * $data6b[1];
$total_fee[2] = $sink_q * $data6b[2];
$total_fee[3] = $lavatory_q * $data6b[3];
$total_fee[4] = $faucet_q * $data6b[4];
$total_fee[5] = $shower_head_q * $data6b[5];

$total_fee[6] = $slop_sink_q * $data6c[0];
$total_fee[7] = $urinal_q * $data6c[1];
$total_fee[8] = $bath_tub_q * $data6c[2];
$total_fee[9] = $grease_trap_q * $data6c[3];
$total_fee[10] = $garage_trap_q * $data6c[4];
$total_fee[11] = $bidet_q * $data6c[5];
$total_fee[12] = $dental_cuspidor_q * $data6c[6];
$total_fee[13] = $water_heater_q * $data6c[7];
$total_fee[14] = $drinking_fountain_q * $data6c[8];
$total_fee[15] = $bar_fountain_q * $data6c[9];
$total_fee[16] = $soda_fountain_q * $data6c[9];
$total_fee[17] = $laundry_sink_q * $data6c[10];
$total_fee[18] = $laboratory_sink_q * $laboratory_sink_q * $data6c[11];
$total_fee[19] = $sterilizer_q * $data6c[12];

$total_fee[20] = $water_meter_q * $data6d[0];

if($water_meter_size >= 12 && $water_meter_size <= 25){
    $water_meter_size_tf = $data6d[1];
}else if ($water_meter_size > 25){
    $water_meter_size_tf = $data6d[2];
}else{
    $water_meter_size_tf = 0;
}

$total_fee[21] = $water_meter_q * $water_meter_size_tf;

$septic_tank_tf_i = 0.00;
$septic_tank_tf_ii = 0.00  ;

if($septic_tank_q === "true"){        
    if($septic_tank_constr >= 0.00 && $septic_tank_constr <= 5.00 ){
        $septic_tank_tf_i = $data6e[0];
    }else if($septic_tank_constr > 5.00){
        $excess = $septic_tank_constr - 5.00;
        $septic_tank_tf_ii = $excess * $data6e[1];
    }
}else{
    $total_fee[22] = 0.00;
}

$total_fee[22] = $septic_tank_tf_i + $septic_tank_tf_ii;

$total_fees = array_sum($total_fee);
?>

