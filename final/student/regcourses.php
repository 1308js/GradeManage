<?php
	require_once('../auth.php');
?>
<?php
include('../connect.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM student where id='$id'");

while($row = mysql_fetch_array($result))
  {
	$username=$row['username'];
	$password=$row['password'];
	$name=$row['name'];
	$semester=$row['semester'];
	$year=$row['current_year'];
	//$course=$row['course'];
  }
 /*$option='';
  $get=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
while($row1 = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['coursecode'].'">'.$row['coursecode'].'</option>';
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="../background1.png">

</body>
</html>
<style type="text/css"  >
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form name="myForm" action="regcourses_execution.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()" background="../background1.png">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
Username <br />
<input name="username" type="text" class="ed" id="brnu" value="<?php echo $username?>" />

<p>Select courses</p>
<p>Choose none if you don't want this course</p>


<br>course 1

<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course1" class="ed">';
   // printing the list box select command
   echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>

course 2

<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course2" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
course 3


<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course3" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>

course 4

<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course4" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
course 5

<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course5" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
   <br>course 6

<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course6" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
 course 7


<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course7" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
  course 8

<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course8" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
   course 9


<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course9" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
 course 10

<?php $results=mysql_query("SELECT *FROM course WHERE (semester='$semester' OR semester2='$semester') AND semesteryear='$year'");
   echo '<select name="course10" class="ed">';
   // printing the list box select command
echo '<option value="none">None</option>';
   while($nt=mysql_fetch_array($results)){//Array or records stored in $nt
   echo "<option value=".$nt['coursecode'].">".$nt['coursecode']."</option>";
   /* Option values are added by looping through the array */
   }
   echo "</select>"; ?>
<br>
Password <br />
<input name="password" type="password" class="ed" id="brnu" value="<?php echo $password?>" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
