
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
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Enrollment</td>
				<th colspan="10"><div align="center">Courses</div></th>
				<th colspan="2"><div align="center">Action</div></th>
			</tr>
			<?php
				include('../connect.php');
				$result = mysql_query("SELECT * FROM preregistration WHERE status='pending' ORDER BY id ASC");
				while($row = mysql_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['username'].'</td>';
						echo '<td><div align="left">'.$row['course1'].'</div></td>';
						echo '<td><div align="left">'.$row['course2'].'</div></td>';
						echo '<td><div align="left">'.$row['course3'].'</div></td>';
						echo '<td><div align="left">'.$row['course4'].'</div></td>';
						echo '<td><div align="left">'.$row['course5'].'</div></td>';
						echo '<td><div align="left">'.$row['course6'].'</div></td>';
						echo '<td><div align="left">'.$row['course7'].'</div></td>';
						echo '<td><div align="left">'.$row['course8'].'</div></td>';
						echo '<td><div align="left">'.$row['course9'].'</div></td>';
						echo '<td><div align="left">'.$row['course10'].'</div></td>';
						echo '<td><div align="center"><a rel="facebox" href="accept.php?id='.$row['id'].'">Accept</a></div></td>';
						echo '<td><div align="center"><a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
						echo '</tr>';
					}
				?> 
		</table>
	</div>
	<div id="footer"></div>
</div>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
      {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
