<?php

session_start();

$logout_stat = $_SESSION['logout_stat'];

if ($logout_stat === "false") {
    require_once 'credentials.php';

    $id = $_SESSION['bpform_id'];

    $conn = open_db_conn();

    $query = "select trueTitle, award, surveyPlan, contractLease,
            deedSale, conDeedSale, constAuth, taxDec, realPropTax, bpForm, BuilPlan,
            StrucDesign, BuildSpec, billMat, picSite, soilAnal, 3stor,
            4stor, taxReceipt, zoningCert, FireCert, wmsCert, logbook,
            tarpaulin, dpwh, aviation, psg, notarized
            from $database.$documents inner join $database.$checklist 
            using (checklist_id)
            where bpform_id = \"$id\" ";

    $result = $conn->query($query);

    if (!$result) {
        show_error_msg($conn->error);
    }

    $record_size = $result->num_rows;
    $row = $result->fetch_row();
    $record_length = 28;
    $count = 0;

    if ($record_size == 1) {
        while ($count < $record_length) {
            $_SESSION['col_' . $count] = $row[$count];
            $count++;
        }
    }

    close_db_conn($conn);
}else{
    header("Location: ../web/index.php");
}
?>