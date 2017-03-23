<?php

require("includes/constants.php");
header('content-type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));
$uid = isset($_REQUEST['uid']) ? $_REQUEST['uid'] : "";
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
$designation = isset($_REQUEST['designation']) ? $_REQUEST['designation'] : "";


$query = "SELECT user_name, user_role  FROM tbl_users where user_name = '$name' and user_show_pass = " . "'$password'" . " and user_role = '$designation' and user_status = 1 limit 1 ";

$rs = mysqli_query($con, $query);

$count = mysqli_num_rows($rs);
$row = mysqli_fetch_array($rs);

if ($count == 1) {
    $username = $row['user_name'];
    $usertype = $row['user_role'];
    $udata = array('status' => 'OK', 'username' => $username, 'usertype' => $usertype);

    echo(json_encode($udata));
} else {
    echo(json_encode('NOTOK'));
}
