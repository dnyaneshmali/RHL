<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("includes/constants.php");

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));


 //$role=  isset($_REQUEST['urole'])?$_REQUEST['urole']:"";
//$role = 'RSM';
 
$query = "SELECT * FROM dist_appoint";

$rs =  mysqli_query($con, $query);
 
 if(!$rs)
    {
        echo("NOTWORK");
        die('Error :'.mysqli_error());  
    }
    else{
      
        while($row = mysqli_fetch_assoc($rs))
            //print_r($row );
           // array_push($data, $row['user_id']);
$data[] = $row;

    }
echo json_encode($data);
 //print_r($data);
