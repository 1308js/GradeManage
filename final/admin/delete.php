
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
if($_GET['id'])
{
	$id=$_GET['id'];
	$r=mysql_query("SELECT *FROM preregistration WHERE id='$id'");
	while($row=mysql_fetch_array($r)){
		$username=$row['username'];
	}
	echo $username;


 mysql_query("UPDATE preregistration SET status='deleted' WHERE id='$id'");
 mysql_query("UPDATE notification SET message='your request is not accepted contact dean office for reason' WHERE position='$username' AND message='your registration status is pending'");
}
//header("location: registrationrequest.php");

?>