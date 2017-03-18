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

$query = "SELECT * FROM emp_dsr WHERE id NOT IN($id_list)";
$rs = mysqli_query($con, $query);
$id=array();
$emp_name=array();
$emp_design=array();
$emp_terit=array();
$emp_headqtr=array();
$emp_state=array();
$date=array();
$emp_workwith=array();
$emp_tradename=array();
$emp_trdcon=array();
$emp_trdadd=array();
$emp_purvisit=array();
$emp_orderb=array();
$emp_ordamt=array();
$emp_trdrmk=array();
$i=0;
while ($row = mysqli_fetch_array($rs))
{
    $emp_id[$i]=$row['id'];
    $emp_name[$i]=$row['emp_name'];
    $emp_design[$i]=$row['emp_design'];
    $emp_terit[$i]=$row['emp_terit'];
    $emp_headqtr[$i]=$row['emp_headqtr'];
    $emp_state[$i]=$row['emp_state'];
    $date[$i]= $row['date'];
    $emp_workwith[$i]=$row['emp_workwith'];
    $emp_tradename[$i]=$row['emp_tradename'];
    $emp_trdcon[$i]=$row['emp_trdcon'];
    $emp_trdadd[$i]=$row['emp_trdadd'];
    $emp_purvisit[$i]=$row['emp_purvisit'];
    $emp_orderb[$i]=$row['emp_orderb'];
    $emp_ordamt[$i]=$row['emp_ordamt'];
    $emp_trdrmk[$i]=$row['emp_trdrmk'];
    $i++;
}

$out=  json_encode(array(
    'id'=>$emp_id,
    'name'=>$emp_name,
    'design'=>$emp_design,
    'terit'=>$emp_terit,
    'headqtr'=>$emp_headqtr,
    'state'=>$emp_state,
    'date'=>$date,
    'workwith'=>$emp_workwith,
    'tradename'=>$emp_tradename,
    'trdcon'=>$emp_trdcon,
    'trdadd'=>$emp_trdadd,
    'purvisit'=>$emp_purvisit,
    'orderb'=>$emp_orderb,
    'ordamt'=>$emp_ordamt,
    'trdrmk'=>$emp_trdrmk
    
    
));

die($out);

