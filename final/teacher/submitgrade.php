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
<script type="text/javascript">
function validateForm()
{
var con = confirm("Are You Sure? you want to proceed?");
if (con ==false)
{
return false;
}
}
</script>
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
	
		<form id="form1" method="post" action="savegrade.php" name="form1" onsubmit="return validateForm()">
			 
			<select name="term">
			<option>quiz1</option>
			<option>quiz2</option>
			<option>assignment</option>
			<option>project</option>
			<option>endsem</option>
			</select><br>
			<td style="border-left: 1px solid #C1DAD7">Percentage<br><input type="text" name="percentage"/><td>
			<br>
			<td style="border-left: 1px solid #C1DAD7">Maximum Marks<br><input type="text" name="maximum"/><td>
			
			<br>
			<input type="hidden" name="coursecode" value="<?php echo $_GET['coursecode']?>">
			<table cellpadding="1" cellspacing="1" id="resultTable">
			  <tr>
				<th style="border-left: 1px solid #C1DAD7">Enrollment</th>
				<th>Marks</th>
			  </tr>
			  <?php 
				include('../connect.php');
				$coursecode=$_GET['coursecode'];
				$course_name=$_GET['course_name'];
				$results = mysql_query("SELECT * FROM $coursecode");
						while($rows = mysql_fetch_array($results))
							{	
//								$n=mysql_num_rows($rows);
				?>
			  <tr>
				<td style="border-left: 1px solid #C1DAD7"><?php echo $rows['enrollment'] ?><input type="hidden" name="studnumber[]" value="<?php echo $rows['enrollment'] ?>"></td>
				<td>
					<input type="text" name="marks[]"/>
				</td>
				
			  </tr>
			  <?php
			  }
			  ?>
			  <td style="border-left: 1px solid #C1DAD7">Minimum Passing Marks<br><input type="text" name="passingmarks"/><td>
			</table>
			<input type="submit" value="Submit">
		</form>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>