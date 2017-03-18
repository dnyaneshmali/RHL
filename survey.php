<?php

require("includes/constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));

$s_name = $_POST['name'];
$s_address = $_POST['address'];
$s_state = $_POST['state'];
$s_retno = $_POST['retno'];
$s_empwk = $_POST['empwk'];
$s_scheme = $_POST['scheme'];
$s_advrt = $_POST['adv'];
$s_hbp = $_POST['hbrp'];
$s_hlp = $_POST['hlrp'];
$s_sbp = $_POST['sbrp'];
$s_slp = $_POST['slrp'];
$s_bpsale = $_POST['brsale'];
$s_lpsale = $_POST['lcsale'];


$sche = "";
$advrt = "";
foreach ($s_scheme as $sche1) {
    $sche .= $sche1 . ",";
}
foreach ($s_advrt as $adv1) {
    $advrt .= $adv1 . ",";
}

$query = "insert Into sur_user(name,address,state,retail_no,employe_no,scheme,advert)VALUES('$s_name','$s_address','$s_state','$s_retno','$s_empwk','$sche','$advrt') ";

if (mysqli_query($con, $query)) {
$last_id = mysqli_insert_id($con);
}
$hbp = "";
$hlp = "";
$sbp = "";
$slp = "";
foreach ($s_hbp as $hbp1) {
    $hbp .= $hbp1 . ",";
}
foreach ($s_hlp as $hlp1) {
    $hlp .= $hlp1 . ",";
}
foreach ($s_sbp as $sbp1) {
    $sbp .= $sbp1 . ",";
}
foreach ($s_slp as $slp1) {
    $slp .= $slp1 . ",";
}

$query1 = "insert into sur_product (br_hrproduct,lo_hrproduct,br_skproduct,lo_skproduct,br_pordpercnt,lo_pordpercnt,suser_id) values"
        . "('$hbp','$hlp','$sbp','$slp','$s_bpsale','$s_lpsale','$last_id')"
        . "";
$rs1 = mysqli_query($con, $query1);
if ($rs1 == 1) {

    echo "OK";
} else {
    echo "somthing went wrong";
}


 