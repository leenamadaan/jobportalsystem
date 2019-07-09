<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$name = $_POST['txtcls'];
$phone = $_POST['txtr'];
$abc = $_POST['txtc'];
$def = $_POST['txtj'];


$query = "insert into reply(a15,company,jobfor,reply) values('$name','$abc','$def','$phone')";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:CompanyApplyJObList.php");
?>
