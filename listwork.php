<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("constants.php");
// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));
$query = "SELECT * FROM workinfo";
$rs = mysqli_query($con, $query);

while ($w_info = mysqli_fetch_array($rs)) {
    $w_id = $w_info['w_id'];
    $w_date = $w_info['w_date'];
    $w_name = $w_info['w_name'];
    $w_image = $w_info['w_image'];
    $w_desc = $w_info['w_info'];


    $e_detail[] = array('w_id' => $w_id, 'w_date' => $w_date, 'w_name' => $w_name, 'w_image' => $w_image,'w_info' => $w_desc);
}
$senddata = json_encode($e_detail);
echo $senddata;
