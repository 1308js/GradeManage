<?php
include('../connect.php');

//echo 'no';
//Function to sanitize values received from the form. Prevents SQL injection
/*function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
*///Sanitize the POST values
$u = $_POST['username'];
$c = $_POST['course'];
echo $u;
echo $c;
//echo 'yes';
mysql_query("INSERT INTO $c(enrollment) values('$u')");
$n= mysql_affected_rows();
//echo $n;
if($n>0){
header("location: student_success.php");
}
else{
	header("location: student_failure.php");
}
?>