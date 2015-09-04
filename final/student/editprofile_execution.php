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
$semester = clean($_POST['semester']);
$cy = clean($_POST['cy']);

$result=mysql_query("SELECT *FROM student where id = '$id' ");
$row=mysql_fetch_array($result);
if($row['username']==$username){
mysql_query("UPDATE student SET password='$password', name='$name', semester='$semester', current_year='$cy' WHERE id='$id'");
mysql_query("UPDATE login SET password='$password' WHERE username='$username'");
header("location: profile.php");
}
else {
	header("location: profile_error.php");
}

?>