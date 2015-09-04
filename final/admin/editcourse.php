
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
<?php
				include('../connect.php');
				$id=$_GET['id'];
				$result = mysql_query("SELECT * FROM course where id='$id'");
				while($row = mysql_fetch_array($result))
					{
						$coursecode=$row['coursecode'];
						$description=$row['course_name'];
						$s=$row['semester'];
						$s1=$row['semester2'];
						$st=$row['semestertype'];
						$sy=$row['semesteryear'];
					}
				?>
<form name="myForm" action="editcourse_execution.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
<?php echo 'Edit Details of '; echo $coursecode; /*echo ' Offered to '; echo $s; echo' ';echo $s1; echo 'in '; echo $st; echo ' of '; echo $sy; */?>
<br>Instructor <br />
<input name="instructor" type="text" class="ed" id="brnu" />
<br>
Course Name <br />
<input name="description" type="text" class="ed" id="brnu"  />
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
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
