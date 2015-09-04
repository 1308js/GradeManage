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
    <div id="content">
			<table cellpadding="1" cellspacing="1" id="resultTable">
			<?php 
				include('../connect.php');
				$instructor=$_GET['instructor'];
			?>
			<th style="border-left: 1px solid #C1DAD7" colspan="6"><div align="center"><?php echo 'courses taught by  ' ;echo $instructor;?></div></th>
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Course Code</th>
				<th>COurse Name</th>
				<th>Course Type</th>
				<th>Credit</th>
				<th>Semester</th>
				<th>Year</th>
				</tr>
			  <?php 
				
				$results = mysql_query("SELECT * FROM course where instructor='$instructor'");
						while($rows = mysql_fetch_array($results))
							{	
//								$n=mysql_num_rows($rows);
				?>
			  <tr>
				<td style="border-left: 1px solid #C1DAD7"><?php echo $rows['coursecode'] ?></td>
				<td><div align="center"><?php echo $rows['course_name'] ?></div></td>
				<td><div align="center"><?php echo $rows['coursetype'] ?></div></td>
				<td><div align="center"><?php echo $rows['credit'] ?></div></td>
				<td><div align="center"><?php echo $rows['semestertype'] ?></div></td>
				<td><div align="center"><?php echo $rows['semesteryear'] ?></div></td>
			
					
				</td>
				
			  </tr>
			  <?php
			  }
			  ?>
			</table>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
<!--<table border="1">
<tr>
<td>Cousecode</td>
<td>Course Name</td>
<td>Semester</td>
<td>Year</td>
</tr>
</table>-->