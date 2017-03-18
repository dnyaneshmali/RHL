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

$id_list = isset($_POST['idlist']) ? $_POST['idlist'] : "-1";

$query = "SELECT * FROM ms_stock WHERE id NOT IN($id_list)";
$rs = mysqli_query($con, $query);
$id = array();
$fr_name = array();
$fr_address = array();
$fr_contact = array();
$fr_propname = array();
$fr_email = array();
$fr_tin = array();
$fr_cst = array();
$fr_pan = array();
$fr_bank = array();
$fr_baccont = array();
$fr_bifsc = array();
$fr_transport = array();
$fr_holiday = array();
$fr_agencurnt = array();
$fr_agenprev = array();
$fr_obusiness = array();
$fr_mdistrb = array();
$fr_exparea = array();

$i = 0;
while ($row = mysqli_fetch_array($rs)) {

    $id[$i] = $row['id'];
    $fr_name[$i] = $row['fr_name'];
    $fr_address[$i] = $row['fr_address'];
    $fr_contact[$i] = $row['fr_contact'];
    $fr_propname[$i] = $row['fr_propname'];
    $fr_email[$i] = $row['fr_email'];
    $fr_tin[$i] = $row['fr_tin'];
    $fr_cst[$i] = $row['fr_cst'];
    $fr_pan[$i] = $row['fr_pan'];
    $fr_bank[$i] = $row['fr_bank'];
    $fr_baccont[$i] = $row['fr_baccont'];
    $fr_bifsc[$i] = $row['fr_bifsc'];
    $fr_transport[$i] = $row['fr_transport'];
    $fr_holiday[$i] = $row['fr_holiday'];
    $fr_agencurnt[$i] = $row['fr_agencurnt'];
    $fr_agenprev[$i] = $row['fr_agenprev'];
    $fr_obusiness[$i] = $row['fr_obusiness'];
    $fr_mdistrb[$i] = $row['fr_mdistrb'];
    $fr_exparea[$i] = $row['fr_exparea'];
    $i++;
}

$out = json_encode(array(
    'id' => $id,
    'name' => $fr_name,
    'address' => $fr_address,
    'contact' => $fr_contact,
    'propname' => $fr_propname,
    'email' => $fr_email,
    'tin' => $fr_tin,
    'cst' => $fr_cst,
    'pan' => $fr_pan,
    'bank' => $fr_bank,
    'baccont' => $fr_baccont,
    'bifsc' => $fr_bifsc,
    'transport' => $fr_transport,
    'holiday' => $fr_holiday,
    'agencurnt' => $fr_agencurnt,
    'agenprev' => $fr_agenprev,
    'obusiness' => $fr_obusiness,
    'mdistrb' => $fr_mdistrb,
    'exparea' => $fr_exparea
        ));

die($out);

