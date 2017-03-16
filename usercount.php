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

$query = "SELECT COUNT(*) FROM jobinfo WHERE j_date = subdate(CURDATE(), 1)";
$result = mysqli_query($con,$query);
$enquiry = mysqli_fetch_array($result);
echo $enquiry[0];