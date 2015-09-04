
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
<form name="myForm" action="addcourse_execution.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
Course code <br />
<input name="coursecode" type="text" class="ed" id="brnu" />
<br>
Course Name <br />
<input name="description" type="text" class="ed" id="brnu" />
<br>
Coursetype <br />
<select name="coursetype">
			<option>core</option>
			<option>elective</option><br>
			</select>
			<br>
Credit <br />
<select name="credit">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			</select><br>
Offered To Semester  <br />
<select name="semester">
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
Offered To Another Semester(0 if not ) <br />
<select name="semester1">
			<option>0</option>>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			</select>
<br>Semester Type</br>
<select name="semestertype">
			<option>even</option>
			<option>odd</option>
			</select>
<br>
</br>Semester Year<br>
<select name="semesteryear">
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			<option>2023</option>
			<option>2024</option>
			<option>2025</option>
			<option>2026</option>
			<option>2027</option>
			</select>
<br>
</br>

<input type="submit" name="Submit" value="save" id="button1" />
</form>
