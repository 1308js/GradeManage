<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>IIT Mandi</title>
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
<link rel="stylesheet" href="teacher/febe/style.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
</head>
<body background="background1.png">
<div id="main">
	<div id="header"><img src=main.jpg height ="200" width="797"></div>
	<div class="menu">
	<table cellpadding="1" cellspacing="1" id="resultTable">
		<tr>
			<td align="center" color="transparent"><h1 style="italic">Grade Management System<h1></td>
		</tr>
	</table>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="loginform.php">Login</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
		<form action="login.php" method="post">
		Username<br>
		<input type="text" name="username" class="ed"><br>
		Password<br>
		<input type="password" name="password" class="ed"><br>
		<br> incorrect username or password<br />
		<input type="submit" value="Login" id="button1">
		</form>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
