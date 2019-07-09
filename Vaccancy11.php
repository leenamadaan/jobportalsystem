<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$a1 = $_POST['txtid'];
$a2 = $_POST['txtapp'];
$a3 = $_POST['txt_name'];
$a4 = $_POST['txt_dob'];
$a5 = $_POST['txt_gndr'];
$a6 = $_POST['txtaqu'];
$a7 = $_POST['txt_phone'];
$a8 = $_POST['txt_eml'];
$a9 = $_POST['txtstate'];
$a10 = $_POST['txtn'];
$a11 = $_POST['txtdate'];
$a12 = $_POST['txtexer'];
$a13 = $_POST['txtqu'];
$a14 = $_POST['txtphonee'];
$a15 = $_POST['txtema'];



$query = "insert into vacancy1(a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15) values('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15')";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:JobList2.php");
?>
