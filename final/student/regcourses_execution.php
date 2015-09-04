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
	$id=clean($_POST['id']);
$username = clean($_POST['username']);
$c1 = clean($_POST['course1']);
$c2 = clean($_POST['course2']);
$c3 = clean($_POST['course3']);
$c4 = clean($_POST['course4']);
$c5 = clean($_POST['course5']);
$c6 = clean($_POST['course6']);
$c7 = clean($_POST['course7']);
$c8 = clean($_POST['course8']);
$c9 = clean($_POST['course9']);
$c10 = clean($_POST['course10']);
$status = 'pending';
$pass=clean($_POST['password']);

$r=mysql_query("SELECT *FROM student WHERE id='$id'");
$rows=mysql_fetch_array($r);
$u=$rows['username'];
$p=$rows['password'];
$r1=mysql_query("SELECT *FROM notification WHERE position ='$username' AND message='your registration status is pending'");
$row =mysql_fetch_array($r1);
$n=mysql_num_rows($r1);
if($n==0){
if($u==$username&&$p==$pass){
	mysql_query("INSERT INTO preregistration(username,course1,course2,course3,course4,course5,course6,course7,course8,course9,course10,status) VALUES('$username','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$status')");
	mysql_query("INSERT INTO notification(position,message) VALUES('$username','your registration status is pending')");
header("location: registration_success.php");
}
else header("location: registration_failure.php");
}
else header("location: registration_pending.php");
?>