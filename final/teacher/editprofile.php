<?php
include('../connect.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM teacher where id='$id'");

while($row = mysql_fetch_array($result))
  {
	$username=$row['username'];
	$password=$row['password'];
	$name=$row['name'];
	$position=$row['position'];
  }
?>
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
<input name="username" type="text" class="ed" id="brnu" value="<?php echo $username?>" />
<br>
Password <br />
<input name="password" type="password" class="ed" id="brnu" value="<?php echo $password?>" />
<br>
Name <br />
<input name="name" type="text" class="ed" id="brnu" value="<?php echo $name?>" />
<br>
Position <br />
<select name="position" class="ed">
<option><?php echo $position?></option>
<option>Director</option>
<option>Professor</option>
<option>Asst. Professor</option>
</select>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
