<?php

require("includes/constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or
        die(json_encode(array(
            'msg' => 'Server is not responding, try later'
        )));

$dbname = $_POST['dbname'];
$location = $_POST['location'];
$contact = $_POST['contact'];
$tsoname = $_POST['tsoname'];
$paymethod = $_POST['paymethod'];
$prodname = $_POST['prodname'];
$pgrams = $_POST['pgrams'];
$pquntca = $_POST['pquntca'];
$pcasval = $_POST['pcasval'];
$tcase = $_POST['tcase'];
$ptamt = $_POST['ptamt'];

$query1="insert into orders(dis_name,dis_town,tso_name,contact,pay_method) values('$dbname','$location','$tsoname','$contact','$paymethod')";
if (mysqli_query($con, $query1)) {
$order_id = mysqli_insert_id($con);
}
 for($i=0 ;$i < count($_POST['prodname']); $i++) {
     $query = "insert into order_product(product,grams,qunt_case,percval,tocase,toamt,order_id) values('$prodname[$i]','$pgrams[$i]','$pquntca[$i]','$pcasval[$i]','$tcase[$i]','$ptamt[$i]','$order_id')";

     mysqli_query($con, $query);
     }
 



    echo "OK";


 