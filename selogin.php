<?php
require("includes/constants.php");
header('content-type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
// 1. Create a database connection
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or 
        die(json_encode(array(
            'msg'=>'Server is not responding, try later'
        )));
$uid =  isset($_REQUEST['uid'])?$_REQUEST['uid']:"";
 $name =  isset($_REQUEST['name'])?$_REQUEST['name']:"";
 $password =  isset($_REQUEST['password'])?$_REQUEST['password']:"";


 $query="SELECT s_id FROM sales_user where s_username = '$name' and s_password = "."'$password'"." ";

 $rs=  mysqli_query($con, $query);
 
 $count = mysqli_num_rows($rs);

if($count == 1) {

	echo(json_encode('OK'));
}
else{
	echo(json_encode('NOTOK'));
 }
