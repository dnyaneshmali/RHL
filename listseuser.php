<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("includes/constants.php");
// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));
$query = "SELECT * FROM sales_user";
$rs = mysqli_query($con, $query);

while ($s_info = mysqli_fetch_array($rs)) {
    $s_id = $s_info['s_id'];
    $s_email = $s_info['s_email'];
    $s_name = $s_info['s_name'];
    $s_contact = $s_info['s_contact'];
    $s_username = $s_info['s_username'];
     $s_password = $s_info['s_password'];


    $e_detail[] = array('s_id' => $s_id, 's_email' => $s_email, 's_name' => $s_name, 's_contact' => $s_contact,'s_username' => $s_username,'s_password'=>$s_password);
}
$senddata = json_encode($e_detail);
echo $senddata;
