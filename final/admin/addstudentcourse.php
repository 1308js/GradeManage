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
<form name="myForm" action="addstudentcourse_execution.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
Username <br />
<input name="username" type="text" class="ed" id="brnu" />
<br>
course<br />
<input name="course" type="text" class="ed" id="brnu" />
<br>

<input type="submit" name="Submit" value="save" id="button1" />
</form>
