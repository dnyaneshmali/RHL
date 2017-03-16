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

$w_name = $_POST['name'];
$w_email = $_POST['email'];
$w_contact = $_POST['contact'];
$w_username = $_POST['username'];
$w_password = $_POST['password'];



$query = "INSERT INTO sales_user (s_name, s_email, s_contact, s_username,s_password)
VALUES ('$w_name', '$w_email', '$w_contact','$w_username','$w_password')";

$rs = mysqli_query($con, $query);

$out = json_encode(array(
    'msg' => 'Your WorkDetail Added successfully'
        ));

die($out);
