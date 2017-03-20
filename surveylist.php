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



$query = "SELECT sur.id AS sid,sur.name AS sname,sur.address AS saddress, sur.state AS state, sur.retail_no AS retailno, sur.employe_no AS empno,sur.scheme AS scheme,sur.advert AS advert, sp.br_hrproduct AS brhprod,sp.lo_hrproduct AS lohprod,sp.br_skproduct AS bskprod,sp.lo_skproduct AS lskprod ,sp.br_pordpercnt AS brpercnt,sp.lo_pordpercnt AS lopercnt FROM sur_user AS sur LEFT JOIN sur_product AS sp ON  sp.suser_id = sur.id ";
$rs = mysqli_query($con, $query);
$sid = array();
$sname = array();
$saddress = array();
$state = array();
$retailno = array();
$empno = array();
$scheme = array();
$advert = array();
$brhprod = array();
$lohprod = array();
$bskprod = array();
$lskprod = array();
$brpercnt = array();
$lopercnt = array();


$i = 0;
while ($row = mysqli_fetch_array($rs)) {

    $sid[$i] = $row['sid'];
    $sname[$i] = $row['sname'];
    $saddress[$i] = $row['saddress'];
    $state[$i] = $row['state'];
    $retailno[$i] = $row['retailno'];
    $empno[$i] = $row['empno'];
    $scheme[$i] = $row['scheme'];
    $advert[$i] = $row['advert'];
    $brhprod[$i] = $row['brhprod'];
    $lohprod[$i] = $row['lohprod'];
    $bskprod[$i] = $row['bskprod'];
    $lskprod[$i] = $row['lskprod'];
    $brpercnt[$i] = $row['brpercnt'];
    $lopercnt[$i] = $row['lopercnt'];

    $i++;
}

$out = json_encode(array(
    'sid' => $sid,
    'sname' => $sname,
    'saddress' => $saddress,
    'state' => $state,
    'retailno' => $retailno,
    'empno' => $empno,
    'scheme' => $scheme,
    'advert' => $advert,
    'brhprod' => $brhprod,
    'lohprod' => $lohprod,
    'bskprod' => $bskprod,
    'lskprod' => $lskprod,
    'brpercnt' => $brpercnt,
    'lopercnt' => $lopercnt

        ));


die($out);

