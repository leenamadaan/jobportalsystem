<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$name = $_POST['txtname'];
$a2 = $_POST['txthidden'];
$a3 = $_POST['pwd'];
$a4 = $_POST['txtname'];
$a5 = $_POST['txtlname'];
$a6 = $_POST['cmbgender'];
$a7 = $_POST['txtdb'];
$a8 = $_POST['number'];
$a9 = $_POST['txtemail'];
$a10 = $_POST['txtaddress'];
$a11 = $_POST['cmbcity'];
$a12 = $_POST['txtpin'];
$a13 = $_POST['txtstate'];
$a14= $_POST['cmbcountry'];



$query = "insert into enquiry(name,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14) values('$name','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14')";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {

    
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:enquiry.php");
?>
