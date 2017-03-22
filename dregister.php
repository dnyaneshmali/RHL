<?php
require("includes/constants.php");
header('content-type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
// 1. Create a database connection
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or 
        die(json_encode(array(
            'msg'=>'Server is not responding, try later'
        )));


 $name =  isset($_REQUEST['name'])?$_REQUEST['name']:"";
 $location =  isset($_REQUEST['location'])?$_REQUEST['location']:"";
 $contact =  isset($_REQUEST['contact'])?$_REQUEST['contact']:"";
 $email =  isset($_REQUEST['email'])?$_REQUEST['email']:"";
 $lat =  isset($_REQUEST['lat'])?$_REQUEST['lat']:"";
 $lang =  isset($_REQUEST['lang'])?$_REQUEST['lang']:"";
 $ddate =  isset($_REQUEST['date'])?$_REQUEST['date']:"";
 $dtime =  isset($_REQUEST['time'])?$_REQUEST['time']:"";
  $uname =  isset($_REQUEST['username'])?$_REQUEST['username']:"";
//$lat="18.33";
//$lang ="73.333";      
$geolocation = $lat.','.$lang;
$request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
$file_contents = file_get_contents($request);
$json_decode = json_decode($file_contents);
//print_r($json_decode);
if(isset($json_decode->results[0])) {
    $response = array();
    $response1 = array();
    foreach($json_decode->results[0]->address_components as $addressComponet) {
        if(in_array('political', $addressComponet->types)) {
                $response[] = $addressComponet->long_name; 
        }
        if(in_array('postal_code', $addressComponet->types)) {
                $response1[] = $addressComponet->long_name; 
        }
    }
    
    $GLOBALS['seloca'] = $response[0];
    $GLOBALS['city'] = $response[1];
    $GLOBALS['postcode'] = $response1[0];
   $address = $GLOBALS['seloca'].'/'.$GLOBALS['postcode'].'/'.$GLOBALS['city'];

}
 $query="INSERT INTO distributer_user(d_name,d_location,d_contact,d_email,selocation,ddate,dtime,username)values('$name','$location','$contact','$email','$address','$ddate','$dtime','$uname')";
 
  $rs=  mysqli_query($con, $query);
 
echo(json_encode('OK'));
