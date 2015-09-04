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
            <li><a href="viewgrades.php">View Grades</a></li>
            <li><a href="notification.php">Notification</a></li>
            <li><a href="viewcourses.php">View courses for registration</a></li>
			<li><a href="regcourses.php">Register for courses</a></li>
			<li><a href="../loginform.php">Logout</a></li>
        
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
		<table cellpadding="1" cellspacing="1" id="resultTable">
		<tr><td>You can't register already registration pending!!</td></tr>
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Name</th>
				<th>Enrollment</th>
				<th>Semester</th>
				<th>Current Year</th>
				<th>Department</th>
				<th>Action</th>
			</tr>
			<?php
			include('../connect.php');
			$id=$_SESSION['SESS_MEMBER_ID'];
			$result = mysql_query("SELECT * FROM student WHERE id='$id'");
					while($row = mysql_fetch_array($result))
						{
							echo '<tr>';
							echo '<td style="border-left: 1px solid #C1DAD7">'.$row['name'].'</td>';
							echo '<td><div align="left">'.$row['username'].'</div></td>';
							echo '<td><div align="left">'.$row['semester'].'</div></td>';
							echo '<td><div align="left">'.$row['current_year'].'</div></td>';
							echo '<td><div align="left">'.$row['department'].'</div></td>';
							
							echo '<td><div align="center"><a rel="facebox" href="editprofile.php?id='.$row['id'].'" title="Click To Edit">Edit Profile</a></div></td>';
							echo '</tr>';
						}
			?>
		</table>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
