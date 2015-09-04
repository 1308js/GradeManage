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
            <li><a href="viewgrades.php">View Record</a></li>
            <li><a href="notification.php">Notification</a></li>
            <li><a href="viewcourses.php">View courses for registration</a></li>
            <li><a href="regcourses.php">Register for courses</a></li>
			<li><a href="../loginform.php">Logout</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
	<ul>
	<?php
	include('../connect.php');
	$id=$_SESSION['SESS_MEMBER_ID'];
$results = mysql_query("SELECT * FROM student WHERE id='$id'");
		while($rows = mysql_fetch_array($results))
			{
				//$course=$row['course'];
				//$semester=$row['semester'];
				//$section=$row['section'];
				$username=$rows['username'];
				$name=$rows['name'];
			}
	$result = mysql_query("SELECT * FROM notification WHERE position='student'");
			echo '<div align="left"><h2>Notifications for Students<h2></div>';
					echo '<br>';
					
			while($row = mysql_fetch_array($result))
				{	echo '<br>';
					echo '<li>'.$row['message'].'</li>';
						}
	$result2 = mysql_query("SELECT * FROM notification WHERE position='$username'");
					echo '<br>';
					echo '<div align="left"><h2>Notifications for '.$name. '<h2></div>';
					//echo '<h2>'.$name.'<h2> ';
					echo '<br>';
			while($row2 = mysql_fetch_array($result2))
				{
					
					echo '<br>';
					echo '<li>'.$row2['message'].'<td><div align="center"><a href="#" id="'.$row2['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td></li>';
					
				}
	
	?>
	<div class="clearfix"></div>
	</ul>
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
   url: "deletenotification.php",
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
