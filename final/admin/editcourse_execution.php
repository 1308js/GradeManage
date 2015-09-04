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
$i = clean($_POST['instructor']);
$d = clean($_POST['description']);
$id = clean($_POST['id']);
$ct = clean($_POST['coursetype']);
$c = clean($_POST['credit']);
$j=0;
$result=mysql_query("SELECT *FROM teacher ");
while($row=mysql_fetch_array($result)){
	if($i==$row['username'])
		$j++;
}

if($j!=0){
mysql_query("UPDATE course SET instructor='$i', course_name='$d', coursetype='$ct',credit='$c' WHERE id='$id'");
header("location: course_edit_success.php");
}
else {
	header("location: course_edit_failure.php");
}?>