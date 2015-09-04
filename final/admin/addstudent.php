<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="../background1.png">

</body>
</html>
<?php
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
<form name="myForm" action="addstudent_execution.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
Name <br />
<input name="name" type="text" class="ed" id="brnu" />
<br>
Username <br />
<input name="username" type="text" class="ed" id="brnu" />

<br>
Semester<br />
<select name="semester" class="ed">
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
Department<br />
<select name="department" class="ed">
<option>cse</option>
<option>ee</option>
<option>me</option>
<option>civil</option>
</select>
<br>
Password<br />
<input name="password" type="password" class="ed" id="brnu" />
<br>
Confirm Password<br />
<input name="confirmpassword" type="password" class="ed" id="brnu" /><br>

<input type="submit" name="Submit" value="save" id="button1" />
</form>
