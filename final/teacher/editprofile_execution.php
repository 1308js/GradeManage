<?php
include('../connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$id = clean($_POST['id']);
$username = clean($_POST['username']);
$password = clean($_POST['password']);
$name = clean($_POST['name']);
$position = clean($_POST['position']);

$result=mysql_query("SELECT *FROM teacher where id = '$id' ");
$row=mysql_fetch_array($result);
if($row['username']==$username){
mysql_query("UPDATE teacher SET password='$password', name='$name', position='$position' WHERE id='$id'");
mysql_query("UPDATE login SET password='$password' WHERE username='$username'");
header("location: profile.php");
}
else {
	header("location: profile_error.php");
}
?>