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
 //echo $duser_id;
 
if(isset($duser_id)){
	echo $duser_id;
$query = "delete from tbl_users where user_id = '".$duser_id."'";

$rs =  mysqli_query($con, $query);
 
 if(!$rs)
    {

        die('Error :'.mysqli_error()); 
        echo"0"; 
    }
    else{
      
        echo"1";

    }
//echo json_encode($data);
 //print_r($data);

}


 $dauser_id=  isset($_REQUEST['dauser_id'])?$_REQUEST['dauser_id']:"";
//$role = 'RSM';
 //echo $dauser_id;
 
if(isset($dauser_id)){
	//echo $dauser_id;
$query = "update tbl_users set user_status = '0' where user_id = '".$dauser_id."'";

$rs =  mysqli_query($con, $query);
 
 if(!$rs)
    {

        die('Error :'.mysqli_error()); 
        echo"0"; 
    }
    else{
      
        echo"1";

    }
//echo json_encode($data);
 //print_r($data);

}


$asuser_id=  isset($_REQUEST['asuser_id'])?$_REQUEST['asuser_id']:"";
//$role = 'RSM';
 //echo $dauser_id;
 
if(isset($asuser_id)){
	//echo $dauser_id;
$query = "update tbl_users set user_status = '1' where user_id = '".$asuser_id."'";

$rs =  mysqli_query($con, $query);
 
 if(!$rs)
    {

        die('Error :'.mysqli_error()); 
        echo"0"; 
    }
    else{
      
        echo"1";

    }
//echo json_encode($data);
 //print_r($data);

}



$product_id=  isset($_REQUEST['pid'])?$_REQUEST['pid']:"";
//$role = 'RSM';
 //echo $dauser_id;
 
if(isset($product_id)){
    //echo $dauser_id;
$query = "delete from tbl_products where product_id = '".$product_id."'";

$rs =  mysqli_query($con, $query);
 
 if(!$rs)
    {

        die('Error :'.mysqli_error()); 
        echo"0"; 
    }
    else{
      
        echo"1";

    }
//echo json_encode($data);
 //print_r($data);

}



