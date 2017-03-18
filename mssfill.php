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
$proptin = isset($_REQUEST['proptin']) ? $_REQUEST['proptin'] : "";
$propcst = isset($_REQUEST['propcst']) ? $_REQUEST['propcst'] : "";
$proppan = isset($_REQUEST['proppan']) ? $_REQUEST['proppan'] : "";
$propbak = isset($_REQUEST['propbak']) ? $_REQUEST['propbak'] : "";
$propacct = isset($_REQUEST['propacct']) ? $_REQUEST['propacct'] : "";
$propifsc = isset($_REQUEST['propifsc']) ? $_REQUEST['propifsc'] : "";
$propagnc = isset($_REQUEST['propagnc']) ? $_REQUEST['propagnc'] : "";
$prophold = isset($_REQUEST['prophold']) ? $_REQUEST['prophold'] : "";
$propagnp = isset($_REQUEST['propagnp']) ? $_REQUEST['propagnp'] : "";
$propearea = isset($_REQUEST['propearea']) ? $_REQUEST['propearea'] : "";
$propobus = isset($_REQUEST['propobus']) ? $_REQUEST['propobus'] : "";
$propmode = isset($_REQUEST['propmode']) ? $_REQUEST['propmode'] : "";
$proptrans = isset($_REQUEST['proptrans']) ? $_REQUEST['proptrans'] : "";


$query = "INSERT INTO ms_stock(fr_name,fr_address,fr_contact,fr_email,fr_propname,fr_tin,fr_cst,fr_pan,fr_bank,fr_baccont,fr_bifsc,fr_transport,fr_holiday,fr_agencurnt,fr_agenprev,fr_obusiness,fr_mdistrb,fr_exparea)"
        . "values("
        . "'$name','$location','$contact','$email','$propname','$proptin','$propcst','$proppan','$propbak','$propacct','$propifsc','$proptrans','$prophold','$propagnc','$propagnp','$propobus','$propmode','$propearea')";

$rs = mysqli_query($con, $query);

echo(json_encode('OK'));



