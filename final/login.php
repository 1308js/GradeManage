<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	include('connect.php');
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
	$result = mysql_query("SELECT * FROM login WHERE username='$login' AND password='$password'");
	if($result){

	while($row = mysql_fetch_array($result))
		{

		$position = $row['position'];
		}
		if(mysql_num_rows($result)==0){
			header("location: login_error.php");
		}
	if ($position=='admin')
	{
		//Create query
		$qry="SELECT * FROM admin WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		//while($row = mysql_fetch_array($result))
	//  {
	//  $level=$row['position'];
	//  }
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				$_SESSION['SESS_FIRST_NAME'] = $member['username'];
				session_write_close();
				//if ($level="admin"){
				header("location: admin/profile.php");
				exit();
			}else {
				//Login failed
				header("location: login_error.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	if ($position=='student')
	{
		//Create query
		$qry="SELECT * FROM student WHERE username='$login'AND password='$password'";
		$result=mysql_query($qry);
		//while($row = mysql_fetch_array($result))
	//  {
	//  $level=$row['position'];
	//  }
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				$_SESSION['SESS_FIRST_NAME'] = $member['username'];
				session_write_close();
				//if ($level="admin"){
				header("location: student/profile.php");
				exit();
			}else {
				//Login failed
				header("location: login_error.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	if ($position=='teacher')
	{
		//Create query
		$qry="SELECT * FROM teacher WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		//while($row = mysql_fetch_array($result))
	//  {
	//  $level=$row['position'];
	//  }
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				//$_SESSION['SESS_FIRST_NAME'] = $member['username'];
				 $_SESSION['userlogin'] = $mamber['username'];
				session_write_close();
				//if ($level="admin"){
				header("location: teacher/profile.php");
				exit();
			}else {
				//Login failed
				header("location: login_error.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
}
?>