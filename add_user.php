<?php
require("includes/constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uemail = $_POST['email'];
$mnumber = $_POST['mnumber'];
$city = $_POST['city'];
$state = $_POST['state'];
$password = $_POST['password'];
$pass = md5($password);
$cdate = date("Y-m-d H:i:s");
$urole = 'RSM';
$user_code = $urole.'/'.strtoupper($city).'/'.'001';
$uname = strtolower($fname).strtolower($lname);

$query = "insert into tbl_users (first_name,last_name,user_name,user_email,user_password,user_number,user_state,user_city,user_role,user_code,user_date) values ('".$fname."','".$lname."','".$uname."','".$uemail."','".$pass."','".$mnumber."','".$state."','".$city."','".$urole."','".$user_code."','".$cdate."')";

	if(!mysqli_query($con,$query))
    {
        die('Error : ' . mysqli_error());
        echo"0";
    }else{
      echo"1";
    }
 