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
$n = clean($_POST['name']);
$u = clean($_POST['username']);
$p1 =clean($_POST['password']);
$p2 =clean($_POST['confirmpassword']);
$r=mysql_query("SELECT *FROM admin");
while($row=mysql_fetch_array($r)){
if($row['username']==$u)
	$j++;
}
if($p1==$p2&&$j==0){
mysql_query("INSERT INTO admin (name,username ,password)
VALUES ('$n','$u','$p1')");
mysql_query("INSERT INTO login (username, password, position)
VALUES ('$u','$p1','admin')");
header("location: profile_success.php");
}
else header("location:profile_failure.php");
?>