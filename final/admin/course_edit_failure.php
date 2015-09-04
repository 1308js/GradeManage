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
    <h2>Course not edited: Teacher doesn't exist</h2>
    <br>
    

  <a rel="facebox" href="addcourse.php" id="addq"><h2>Add course</h2></a>
    <table cellpadding="1" cellspacing="1" id="resultTable">
      <thead>
        <tr>
          <th  style="border-left: 1px solid #C1DAD7"> Course Code </th>
          <th>Description</th>
          <th> Coursetype </th>
          <th> Credit</th>
          <th> Instructor </th>
          <th colspan="2"> Offered to </th>
          <th >Offered during</th>
          <th colspan="2"> Action </th>
        </tr>
      </thead>
      <tbody>
      <?php
        include('../connect.php');
        $result = mysql_query("SELECT * FROM course");
        while($row = mysql_fetch_array($result))
          {
            echo '<tr class="record">';
            echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['coursecode'].'</td>';
            echo '<td><div align="left">'.$row['course_name'].'</div></td>';
            echo '<td><div align="left">'.$row['coursetype'].'</div></td>';
            echo '<td><div align="left">'.$row['credit'].'</div></td>';
            echo '<td><div align="left">'.$row['instructor'].'</div></td>';
            echo '<td><div align="left">'.$row['semester'].'</div></td>';
            echo '<td><div align="left">'.$row['semester2'].'</div></td>';
            echo '<td><div align="left">'.$row['semesteryear'].' '.$row['semestertype'].' semester</div></td>';
             echo '<td><div align="center"><a title="Click To Edit" rel="facebox" href="viewcoursedata.php?coursecode='.$row['coursecode'].'">view course data</a>';
            echo '<td><div align="center"><a title="Click To Edit" rel="facebox" href="editcourse.php?id='.$row['id'].'">Edit</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
            echo '</tr>';
          }
        ?> 
      </tbody>
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
   url: "deletecourse.php",
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
