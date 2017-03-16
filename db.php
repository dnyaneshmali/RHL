<?php
require("constants.php");

// 1. Create a database connection
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or 
        die(json_encode(array(
            'msg'=>'Server is not responding, try later'
        )));
$dviceid=  isset($_REQUEST['uid'])?$_REQUEST['uid']:"";
 $name=  isset($_REQUEST['name'])?$_REQUEST['name']:"";
 $contact=  isset($_REQUEST['contact'])?$_REQUEST['contact']:"";
 $subject=  isset($_REQUEST['subject'])?$_REQUEST['subject']:"";
 $edesc=  isset($_REQUEST['edesc'])?$_REQUEST['edesc']:"";

 $query="INSERT INTO enquiry(dviceid,NAME,contact,SUBJECT,details)values('$dviceid','$name','$contact','$subject','$edesc')";
 $rs=  mysqli_query($con, $query);
 
 $out=  json_encode(array(
     'msg'=>'Your complain register successfully'
 ));
 
die($out);
 
 