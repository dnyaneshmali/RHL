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
$ename = isset($_REQUEST['ename']) ? $_REQUEST['ename'] : "";
$edesign = isset($_REQUEST['edesign']) ? $_REQUEST['edesign'] : "";
$eterit = isset($_REQUEST['eterit']) ? $_REQUEST['eterit'] : "";
$eheadq = isset($_REQUEST['eheadq']) ? $_REQUEST['eheadq'] : "";
$estate = isset($_REQUEST['estate']) ? $_REQUEST['estate'] : "";
$edate = isset($_REQUEST['edate']) ? $_REQUEST['edate'] : "";
$eworkw = isset($_REQUEST['eworkw']) ? $_REQUEST['eworkw'] : "";
$etrdnm = isset($_REQUEST['etrdnm']) ? $_REQUEST['etrdnm'] : "";
$etrdcon = isset($_REQUEST['etrdcon']) ? $_REQUEST['etrdcon'] : "";
$etrdadd = isset($_REQUEST['etrdadd']) ? $_REQUEST['etrdadd'] : "";
$etrdvist= isset($_REQUEST['etrdvist']) ? $_REQUEST['etrdvist'] : "";
$etrdord = isset($_REQUEST['etrdord']) ? $_REQUEST['etrdord'] : "";
$etrdordamt = isset($_REQUEST['etrdordamt']) ? $_REQUEST['etrdordamt'] : "";
$etrdrmk = isset($_REQUEST['etrdrmk']) ? $_REQUEST['etrdrmk'] : "";



$query = "INSERT INTO emp_dsr(emp_name,emp_design,emp_terit,emp_headqtr,emp_state,date,emp_workwith,emp_tradename,emp_trdcon,emp_trdadd,emp_purvisit,emp_orderb,emp_ordamt,emp_trdrmk)"
        . "values("
        . "'$ename','$edesign','$eterit','$eheadq','$estate','$edate','$eworkw','$etrdnm','$etrdcon','$etrdadd','$etrdvist','$etrdord','$etrdordamt','$etrdrmk')";

$rs = mysqli_query($con, $query);

echo(json_encode('OK'));



