<?php
	require_once('../auth.php');
$user=$_SESSION['userlogin'];
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
<form name="myForm" action="editgrades_execution.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">

<!--<br>
Course<br>
<select name="course" class="ed">
/*<?php
//include('../connect.php');
//$results = mysql_query("SELECT * FROM course where instructor='$username'");
//while($rows = mysql_fetch_array($results))
	{
//	echo '<option>'.$rows['coursecode'].'</option>';
	}
?>-->

<input name="username" type="hidden" class="ed" id="brnu" value="<?php echo $username?>" />
<br>
Course <br />
<input name="course" type="text" class="ed" id="brnu" />

<br>
Term</br>
<select name="term">
			<option>quiz1</option>
			<option>quiz2</option>
			<option>assignment</option>
			<option>project</option>
			<option>endsem</option>
			</select><br>
<br>
Enrollment <br />
<input name="enrollment" type="text" class="ed" id="brnu" />
<br>
Marks <br />
<input name="marks" type="text" class="ed" id="brnu"/>
<br>
Maximum Marks <br />
<input name="maxmarks" type="text" class="ed" id="brnu"/>
<br>
Percentage <br />
<input name="percentage" type="text" class="ed" id="brnu"/>
<br>
Passing Marks <br />
<input name="pm" type="text" class="ed" id="brnu"/>
<br>
Grades out ? </br>
<select name="question">
			<option>Yes</option>
			<option>No</option>
			</select><br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>