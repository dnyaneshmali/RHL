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


 $duser_id=  isset($_REQUEST['duser_id'])?$_REQUEST['duser_id']:"";
//$role = 'RSM';
 
if(isset($user_id)){
	//echo $status_id;
$query = "delete from tbl_users wher user_id = '".$user_id."'";

$rs =  mysqli_query($con, $query);
 
 if(!$rs)
    {

        die('Error :'.mysqli_error());  
    }
    else{
      
        while($row = mysqli_fetch_assoc($rs))
            //print_r($row);
           // array_push($data, $row['user_id']);
$data[] = $row;

    }
echo json_encode($data);
 //print_r($data);

}

