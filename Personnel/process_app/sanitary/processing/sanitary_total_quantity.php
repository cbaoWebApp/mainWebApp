<?php
$quantity = array();

$quantity[0] = \filter_input(\INPUT_POST, "water_closet", \FILTER_SANITIZE_NUMBER_INT);
$quantity[1] = \filter_input(\INPUT_POST, "floor_drain", \FILTER_SANITIZE_NUMBER_INT);
$quantity[2] = \filter_input(\INPUT_POST, "sink", \FILTER_SANITIZE_NUMBER_INT);
$quantity[3] = \filter_input(\INPUT_POST, "lavatory", \FILTER_SANITIZE_NUMBER_INT);
$quantity[4] = \filter_input(\INPUT_POST, "faucet", \FILTER_SANITIZE_NUMBER_INT);
$quantity[5] = \filter_input(\INPUT_POST, "shower_head", \FILTER_SANITIZE_NUMBER_INT);
$quantity[6] = \filter_input(\INPUT_POST, "slop_sink", \FILTER_SANITIZE_NUMBER_INT);
$quantity[7] = \filter_input(\INPUT_POST, "urinal", \FILTER_SANITIZE_NUMBER_INT);
$quantity[8] = \filter_input(\INPUT_POST, "bath_tub", \FILTER_SANITIZE_NUMBER_INT);
$quantity[9] = \filter_input(\INPUT_POST, "grease_trap", \FILTER_SANITIZE_NUMBER_INT);
$quantity[10] = \filter_input(\INPUT_POST, "garage_trap", \FILTER_SANITIZE_NUMBER_INT);
$quantity[11] = \filter_input(\INPUT_POST, "bidet", \FILTER_SANITIZE_NUMBER_INT);
$quantity[12] = \filter_input(\INPUT_POST, "dental_cuspidor", \FILTER_SANITIZE_NUMBER_INT);
$quantity[13] = \filter_input(\INPUT_POST, "water_heater", \FILTER_SANITIZE_NUMBER_INT);
$quantity[14] = \filter_input(\INPUT_POST, "drinking_fountain", \FILTER_SANITIZE_NUMBER_INT);
$quantity[15] = \filter_input(\INPUT_POST, "bar_fountain", \FILTER_SANITIZE_NUMBER_INT);
$quantity[16] = \filter_input(\INPUT_POST, "soda_fountain", \FILTER_SANITIZE_NUMBER_INT);
$quantity[17] = \filter_input(\INPUT_POST, "laundry_sink", \FILTER_SANITIZE_NUMBER_INT);
$quantity[18] = \filter_input(\INPUT_POST, "laboratory_sink", \FILTER_SANITIZE_NUMBER_INT);
$quantity[19] = \filter_input(\INPUT_POST, "sterilizer", \FILTER_SANITIZE_NUMBER_INT);
$quantity[20] = \filter_input(\INPUT_POST, "water_meter", \FILTER_SANITIZE_NUMBER_INT);
$quantity[21] = \filter_input(\INPUT_POST, "septic_tank", \FILTER_SANITIZE_NUMBER_INT);

$water_meter_size = \filter_input(\INPUT_POST, "water_meter_size", \FILTER_SANITIZE_NUMBER_FLOAT);
$septic_tank_constr = \filter_input(\INPUT_POST, "septic_tank_constr", \FILTER_SANITIZE_NUMBER_FLOAT);

$quantity_size = count($quantity);

for($i = 0; $i < $quantity_size; $i++){
    $input = $quantity[$i];
    if( filter_var($input, FILTER_VALIDATE_INT) === FALSE ||
            filter_var($input, FILTER_VALIDATE_INT) === 0){
        $input = 0;
    }
    $quantity[$i] = $input;        
}

if(filter_var($water_meter_size, FILTER_VALIDATE_FLOAT) === FALSE ||
            filter_var($water_meter_size, FILTER_VALIDATE_FLOAT) < 0.00){
    $water_meter_size = 0.00;
}

if(filter_var($septic_tank_constr, FILTER_VALIDATE_FLOAT) === FALSE ||
            filter_var($septic_tank_constr, FILTER_VALIDATE_FLOAT) < 0.00){
    $septic_tank_constr = 0.00;
}

$water_closet_q = $quantity[0];
$floor_drain_q = $quantity[1];
$sink_q = $quantity[2];
$lavatory_q = $quantity[3];
$faucet_q = $quantity[4];
$shower_head_q = $quantity[5];
$slop_sink_q = $quantity[6];
$urinal_q = $quantity[7];
$bath_tub_q = $quantity[8];
$grease_trap_q = $quantity[9];
$garage_trap_q = $quantity[10];
$bidet_q = $quantity[11];
$dental_cuspidor_q = $quantity[12];
$water_heater_q = $quantity[13];
$drinking_fountain_q = $quantity[14];
$bar_fountain_q = $quantity[15];
$soda_fountain_q = $quantity[16];
$laundry_sink_q = $quantity[17];
$laboratory_sink_q = $quantity[18];
$sterilizer_q = $quantity[19];
$water_meter_q = $quantity[20];
$septic_tank_q = $quantity[21];

$total_quantity = array_sum($quantity);
?>