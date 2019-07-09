<!Doctype html>
<html>
<head>
<title>Edit Profile</title>

</head>
<body>
<?php
	$dbc=mysqli_connect('localhost','root','','dbjobportal')
	or die('Unable to Connect');
	$output_form=false;
	$user=$_POST['UN'];
	$pass=$_POST['P'];
	$newpass=$_POST['np'];
	if(!empty($user) && !empty($pass) && !empty($newpass))
	{
		$query="Update login set Password='$newpass' where username='$user' and Password='$pass'";
		mysqli_query($dbc,$query) or die('Error in Connection');
		echo "<script type='text/javascript'>	
			alert('Password has been changed');
        		location.replace('welcome.php')
    			</script>";
}
else
{
echo "<script type='text/javascript'>	
 alert('Please fill the form completely')
  location.replace('change password.html')
   </script>";
	
}
?>
</body>
</html>