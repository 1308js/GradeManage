<?php
	require_once('../auth.php');
?>
<html>
<head>
<title>IIT Mandi </title>
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
            <li><a href="listsubject.php">Submit Grade</a></li>
            <li><a href="notification.php">Notification</a></li>
			<li><a rel="facebox" href="editgrades.php">Edit Grades</a></li>
			<li><a href="../loginform.php">Logout</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
	<?php 
	include('../connect.php');
	$id=$_SESSION['SESS_MEMBER_ID'];
	$results = mysql_query("SELECT * FROM teacher WHERE id='$id'");
			$rows = mysql_fetch_array($results);
				
				$result2=$rows['username'];
				
	?>
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Course</th>
				<th>Coursecode</th>
				<th colspan="2" ><div align="center">Action</div></th>
			</tr>
			<?php
			
			
			$result = mysql_query("SELECT * FROM course WHERE instructor='$result2'");
			while($row = mysql_fetch_array($result))
				{
					echo '<tr>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$row['course_name'].'</div></td>';
					echo '<td><div align="left">'.$row['coursecode'].'</div></td>';
					echo '<td><div align="center"><a href="viewmarks.php?course_name='.$row['course_name'].'&coursecode='.$row['coursecode'].'" title="Click To view">View Records</a></div></td>';
					echo '<td><div align="center"><a href="submitgrade.php?course_name='.$row['course_name'].'&coursecode='.$row['coursecode'].'" title="Click To Edit">submit Grade</a></div></td>';
					echo '</tr>';
				}
			?>
		</table>
		<h1>Marks successfully submitted!</h1>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
