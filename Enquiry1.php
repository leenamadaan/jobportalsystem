<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$name = $_POST['txtname'];
$email = $_POST['txtemail'];
$contact = $_POST['txtcontactno'];
$enquirytype = $_POST['cmbfeedback'];
$remarks = $_POST['txtarearemarks'];

$query = "insert into enquiry(name,email,contact,enquirytype,remarks) values('$name','$email','$contact','$enquirytype','$remarks')";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:Enquiry.php");
?>
