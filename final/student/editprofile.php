<?php
include('../connect.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM student where id='$id'");

while($row = mysql_fetch_array($result))
  {
	$username=$row['username'];
	$password=$row['password'];
	$name=$row['name'];
	$semester=$row['semester'];
	//$course=$row['course'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="../background1.png">

</body>
</html>
<style type="text/css">
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
<form name="myForm" action="editprofile_execution.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
Username <br />
<input name="username" type="text" class="ed" id="brnu" value="<?php echo $idnum?>" />
<br>
Name <br />
<input name="name" type="text" class="ed" id="brnu" value="<?php echo $name?>" />
<br>
Password <br />
<input name="password" type="password" class="ed" id="brnu" value="<?php echo $password?>" />
<br>
Semester <br />
<select name="semester" class="ed">
<option><?php echo $semester?></option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
<br>
Current Year <br />
<select name="cy" class="ed">
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
</select>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
