<?php
require("includes/constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));

$a_username = $_POST['username'];
$a_password = $_POST['password'];
$pass = md5($a_password);


 $query="SELECT user_id,user_name,user_role FROM tbl_users where user_name = '".$a_username."' and user_password = '".$pass."' limit 1 ";

 $rs=  mysqli_query($con, $query);

 $count = mysqli_num_rows($rs);

if($count == 1) {

	while ($row = mysqli_fetch_assoc($rs)){

          session_start();
         $_SESSION['username'] = $row['user_name'];
         $_SESSION['uid'] = $row['user_id'];
         $_SESSION['urole'] = $row['user_role'];
        echo 'OK';
    }    
}
else{
    echo 'Username or password wrong';
 }
 