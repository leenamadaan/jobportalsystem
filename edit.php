<html>
<head>
</head>
<body>
<?php
$s="Your profile has been editted";
$dbc = mysqli_connect("localhost", "root", "", "leena") or die("Unable to Connect");
$username=$_POST['username'];
$Fn=$_POST['Fn'];
$Ln=$_POST['Ln'];
$A=$_POST['A'];

$C=$_POST['C'];
$E=$_POST['E'];
$P=$_POST['p'];
if(!empty($username) && !empty($Fn) && !empty($Ln) &&  !empty($A)  && !empty($C) && !empty($E) && !empty($P))
	{
$query="Update login set First_name = '$Fn', Last_Name = '$Ln', Address = '$A',Contact='$C',E_mail='$E',Password='$P'where username = '$username'";
		mysqli_query($dbc,$query) or die('Error in Connection');
		echo "<SCRIPT type='text/javascript'>	
			alert('$s');
        		location.replace('a1111.html')
    			</SCRIPT>";}
else
{
	echo "Please fill the form completely";
}
?>
</body>
</html>