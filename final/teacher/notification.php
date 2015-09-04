<?php
	require_once('../auth.php');
?>
<html>
<head>
<title>IIT Mandi</title>
<link rel="stylesheet" href="../css/main.css" type="text/css" media="screen" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" />
</head>
<body background="../background1.png">
<div id="main">
	<div id="header"><img src=../main.jpg height ="200" width="797"></div>
	<div class="menu">
	<table cellpadding="1" cellspacing="1" id="resultTable">
		<tr>
			<td align="center" color="transparent"><h1 style="italic">Grade Management System<h1></td>
		</tr>
	</table>

        <ul>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="listsubject.php">Submit Grade</a></li>
            <li><a href="notification.php">Notification</a></li>
			<li><a rel="facebox" href="editgrades.php">Edit Grades</a></li>
			<li><a href="../loginform.php">Logout</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
	<ul>
	<?php
	include('../connect.php');
	$id=$_SESSION['SESS_MEMBER_ID'];
$results = mysql_query("SELECT * FROM teacher WHERE id='$id'");
		while($rows = mysql_fetch_array($results))
			{
				//$course=$row['course'];
				//$semester=$row['semester'];
				//$section=$row['section'];
				$username=$rows['username'];
				$name=$rows['name'];
			}
	$result = mysql_query("SELECT * FROM notification WHERE position='teacher'");
			while($row = mysql_fetch_array($result))
				{	echo 'For Teachers';
					echo '<br>';
					echo '<br>';
					echo '<li>'.$row['message'].'</li>';
						}
	$result2 = mysql_query("SELECT * FROM notification WHERE position='$username'");
			while($row2 = mysql_fetch_array($result2))
				{
					echo '<br>';
					echo '<br>';
					echo 'Notification for ';
					echo $name;
					echo '<br>';
					echo '<br>';
					echo '<li>'.$row2['message'].'</li>';
				}
	
	?>
	<div class="clearfix"></div>
	</ul>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>