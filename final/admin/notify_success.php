<?php
	require_once('../auth.php');
?>
<html>
<head>
<title>IIT Mandi</title>
<link rel="stylesheet" href="../css/main.css" type="text/css" media="screen" />
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
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
			<li><a href="addcourse.php">Add Course</a></li>
			<li><a href="course.php">Course</a></li>
			<li><a href="student.php">Students</a></li>
			<li><a href="teacher.php">Teachers</a></li>
			<li><a href="notify.php">Notify</a></li>
			<li><a href="registrationrequest.php">Registration Request</a></li>
			<li><a href="../loginform.php">Logout</a></li>
        </ul>
        <br style="clear: left">
    </div>
    <h2>Notification successfully posted</h2>
	<div id="content">
		<form action="notify_execution.php" method="post">
		Position<br>
		<select name="position" class="ed">
			<option value="student">Student</option>
			<option value="teacher">Teacher</option>
		</select><br>
		Message<br>
		<textarea name="message" class="ed">
		</textarea><br>
		<input type="submit" value="Post" id="button1">
		</form>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
