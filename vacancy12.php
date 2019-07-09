<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection


$a10 = $_POST['txtn'];
$a11 = $_POST['txtdate'];
$a12 = $_POST['txtexer'];
$a13 = $_POST['txtqu'];
$a14 = $_POST['txtphonee'];
$a15 = $_POST['txtema'];


if(!empty($a10) && !empty($a11) && !empty($a12) && !empty($a13) && !empty($a14) && !empty($a15))
	{
$query = "update vacancy1 set a10='" . $a10 . "',a11='" . $a11 . "', a12='" . $a12 . "', a13='" . $a13 . "',a14='" . $a14 . "' where a15 = '$a15' ";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} }else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:JobList2.php");
?>
