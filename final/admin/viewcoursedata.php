<?php
	require_once('../auth.php');
?>
<?php 
				include('../connect.php');
				$coursecode=$_GET['coursecode'];
				$results = mysql_query("SELECT * FROM course WHERE coursecode='$coursecode'");
				while($row=mysql_fetch_array($results)){
				$course_name=$row['course_name'];}
				//echo 'no'.$course_name.'yes';
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
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>  
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
            <<li><a href="profile.php">Profile</a></li>
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
			<th style="border-left: 1px solid #C1DAD7"  colspan="8"><div align="center"><?php echo ''.$coursecode.'('.$course_name.')'?><div><th>
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Enrollment</th>
				<th>quiz1</th>
				<th>quiz2</th>
				<th>assignment</th>
				<th>project</th>
				<th>endsem</th>
				<th>total</th>
				<th>grade</th>
			</tr>
			  <?php 
				include('../connect.php');
				//$coursecode=$_GET['coursecode'];
				//$course_name=$_GET['course_name'];
				$results = mysql_query("SELECT * FROM $coursecode");
						while($rows = mysql_fetch_array($results))
							{	
//								$n=mysql_num_rows($rows);
				?>
			  <tr>
				<td style="border-left: 1px solid #C1DAD7"><?php echo $rows['enrollment'] ?></td>
				<td><div align="center"><?php echo $rows['quiz1'] ?></div></td>
				<td><div align="center"><?php echo $rows['quiz2'] ?></div></td>
				<td><div align="center"><?php echo $rows['assignment'] ?></div></td>
				<td><div align="center"><?php echo $rows['project'] ?></div></td>
				<td><div align="center"><?php echo $rows['endsem'] ?></div></td>
				<td><div align="center"><?php echo $rows['totalmarks'] ?></div></td>
				<td><div align="center"><?php echo $rows['grade'] ?></div></td>
					
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