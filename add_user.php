<?php
require("includes/constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));

$query1 = "select max(user_id) as max, user_code from tbl_users where user_role = '".$_POST['urole']."' and user_city = '".$_POST['city']."'";
    $result = mysqli_query($con,$query1);
    if($result){
        
        $row = mysqli_fetch_array($result);
        echo $maxid = $row['max']; 
        echo $ucode = $row['user_code'];   

    }

 $next_id = substr($ucode, strrpos($ucode, '/') + 1);
 echo 'nid'.$next_id;

 $next_one = $next_id +1;
echo 'none'.$next_one;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uemail = $_POST['email'];
$mnumber = $_POST['mnumber'];
$city = $_POST['city'];
$state = $_POST['state'];
$territory = $_POST['territory'];
$password = $_POST['password'];
$show_password = $password ;
$status = 0;
$pass = md5($password);
$cdate = date("Y-m-d H:i:s");
$urole = $_POST['urole'];
$user_code = $urole.'/'.strtoupper($city).'/'.$next_one;
$uname = strtolower($fname).strtolower($lname);

$query = "insert into tbl_users (first_name,last_name,user_name,user_email,user_password,user_show_pass,user_number,user_state,user_territory,user_city,user_role,user_status,user_code,user_date) values ('".$fname."','".$lname."','".$uname."','".$uemail."','".$pass."','".$show_password."','".$mnumber."','".$state."','".$territory."','".$city."','".$urole."','".$status."','".$user_code."','".$cdate."')";

	if(!mysqli_query($con,$query))
    {
        die('Error : '.mysqli_error());
        echo"0";
    }else{
      echo"1";
    }
 