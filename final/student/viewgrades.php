<?php
	require_once('../auth.php');
?>
<html>
<head>
<title>Student Profile</title>
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

	<div class="menu">
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
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('../connect.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM student WHERE id='$id'");
		while($row = mysql_fetch_array($result))
			{
				//$course=$row['course'];
				$semester=$row['semester'];
				//$section=$row['section'];
				$username=$row['username'];
			}
			
?>
<table cellpadding="1" cellspacing="1" id="resultTable">
			<th style="border-left: 1px solid #C1DAD7" colspan="8"><div align="center"><?php echo 'courses taken by  ' ;echo $username;?></div></th>
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Course Code</th>
				<th>Quiz1</th>
				<th>Quiz2</th>
				<th>Assignment</th>
				<th>Project</th>
				<th>Endsem</th>
				<th>Total Marks</th>
				<th>Grade</th>
				</tr>
			  <?php 
				
				$results = mysql_query("SELECT * FROM course");
						while($rows = mysql_fetch_array($results))
							{	$r= $rows['coursecode'];

								$result2=mysql_query("SELECT * FROM $r WHERE enrollment='$username'");
								//$result2=mysql_query("SELECT * FROM $rows['coursecode'] WHERE enrollment='$username'");
								$number=mysql_num_rows($result2);
								if($number>0)
								{
								$rows2=mysql_fetch_array($result2);
								 ?><tr>
				<td style="border-left: 1px solid #C1DAD7"><?php echo $r; ?></td>
				<td><div align="center"><?php echo $rows2['quiz1'] ?></div></td>
				<td><div align="center"><?php echo $rows2['quiz2'] ?></div></td>
				<td><div align="center"><?php echo $rows2['assignment'] ?></div></td>
				<td><div align="center"><?php echo $rows2['project'] ?></div></td>
				<td><div align="center"><?php echo $rows2['endsem'] ?></div></td>
				<td><div align="center"><?php echo $rows2['totalmarks'] ?></div></td>
				<td><div align="center"><?php echo $rows2['grade'] ?></div></td>
			
					
				</td>
				
			  </tr>
							<?php	}?>
								
			 
			  <?php
			  }
			  ?>
			</table>

  
    
    
    
	
    
    
    
    
    
    
    
	
    
    