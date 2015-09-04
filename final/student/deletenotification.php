
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $r=mysql_query("SELECT *FROM notification WHERE id='$id'");
 $row=mysql_fetch_array($r);
 $message=$row['message'];
 if($message!='your registration status is pending'){
 $sql = "delete from notification where id='$id'";
 mysql_query( $sql);
}
}
header("location: notification.php");

?>