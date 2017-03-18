<?php

error_reporting(0);
require("includes/constants.php");
header("Content-Type:application/json");
// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));



$uid = isset($_REQUEST['uid']) ? $_REQUEST['uid'] : "";
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
$location = isset($_REQUEST['location']) ? $_REQUEST['location'] : "";
$contact = isset($_REQUEST['contact']) ? $_REQUEST['contact'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
$propname = isset($_REQUEST['propname']) ? $_REQUEST['propname'] : "";
$tin = isset($_REQUEST['tin']) ? $_REQUEST['tin'] : "";
$cst = isset($_REQUEST['cst']) ? $_REQUEST['cst'] : "";
$pan = isset($_REQUEST['pan']) ? $_REQUEST['pan'] : "";
$bname = isset($_REQUEST['bname']) ? $_REQUEST['bname'] : "";
$bacount = isset($_REQUEST['bacount']) ? $_REQUEST['bacount'] : "";
$bifsc = isset($_REQUEST['bifsc']) ? $_REQUEST['bifsc'] : "";
$aheldc = isset($_REQUEST['aheldc']) ? $_REQUEST['aheldc'] : "";
$holiday = isset($_REQUEST['holiday']) ? $_REQUEST['holiday'] : "";
$aheldp = isset($_REQUEST['aheldp']) ? $_REQUEST['aheldp'] : "";
$exparea = isset($_REQUEST['exparea']) ? $_REQUEST['exparea'] : "";
$obusi = isset($_REQUEST['obusi']) ? $_REQUEST['obusi'] : "";
$distmode = isset($_REQUEST['distmode']) ? $_REQUEST['distmode'] : "";
$tranport = isset($_REQUEST['tranport']) ? $_REQUEST['tranport'] : "";


$query = "INSERT INTO dist_appoint(fr_name,fr_address,fr_contact,fr_email,fr_propname,fr_tin,fr_cst,fr_pan,fr_bank,fr_baccont,fr_bifsc,fr_transport,fr_holiday,fr_agencurnt,fr_agenprev,fr_obusiness,fr_mdistrb,fr_exparea)"
        . "values("
        . "'$name','$location','$contact','$email','$propname','$tin','$cst','$pan','$bname','$bacount','$bifsc','$tranport','$holiday','$aheldc','$aheldp','$obusi','$distmode','$exparea')";

$rs = mysqli_query($con, $query);

echo(json_encode('OK'));



