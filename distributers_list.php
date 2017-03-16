<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
require("includes/constants.php");
header("Content-Type:application/json");

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));

$id_list = isset($_POST['idlist'])?$_POST['idlist']:"-1";

$query = "SELECT * FROM distributer_user WHERE d_id NOT IN($id_list)";
$rs = mysqli_query($con, $query);
$id=array();
$name=array();
$location=array();
$contact=array();
$email=array();
$seloc=array();
$i=0;
while ($row = mysqli_fetch_array($rs))
{
    $id[$i]=$row['d_id'];
    $name[$i]=$row['d_name'];
    $location[$i]=$row['d_location'];
    $contact[$i]=$row['d_contact'];
    $email[$i]=$row['d_email'];
    $seloc[$i]=$row['selocation'];
    $date[$i]=$row['ddate'];
    $time[$i]=$row['dtime'];
    $i++;
}

$out=  json_encode(array(
    'id'=>$id,
    'name'=>$name,
    'location'=>$location,
    'contact'=>$contact,
    'email'=>$email,
    'selocation'=>$seloc,
    'date'=>$date,
    'time'=>$time
    
));

die($out);

