<?php
require("includes/constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));


$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pqty = $_POST['pqty'];
$desc = $_POST['desc'];
$product_date = date("Y-m-d H:i:s");
$query = "insert into tbl_products(product_name,product_price,product_quantity,product_desc,product_date) values ('".$pname."','".$pprice."','".$pqty."','".$desc."','".$product_date."')";

	if(!mysqli_query($con,$query))
    {
        die('Error :'.mysqli_error());
        echo"0";
    }else{
      echo"1";
    }
 