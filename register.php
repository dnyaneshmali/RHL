<?php
require("constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or 
        die(json_encode(array(
            'msg'=>'Server is not responding, try later'
        )));
$uid=  isset($_REQUEST['uid'])?$_REQUEST['uid']:"";
 $name=  isset($_REQUEST['name'])?$_REQUEST['name']:"";
 $phone=  isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
 $email=  isset($_REQUEST['email'])?$_REQUEST['email']:"";
 $city=  isset($_REQUEST['city'])?$_REQUEST['city']:"";

 $query="INSERT INTO register(u_id,u_name,u_email,u_phone,u_city)values('$uid','$name','$email','$phone','$city')";
 $rs=  mysqli_query($con, $query);
 
 $out=  json_encode(array(
     'msg'=>' register successfully'
 ));
 
die($out);
 
 