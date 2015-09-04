<?php
$id=$_GET['id'];
include('../connect.php');
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
<form action="confirm.php" method="post">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id; ?>" />
<h2><div align="center"> Are You Sure?</div></h2>
<div align="center"><input type="submit" name="Submit" value="Yes!" id="button1" /></div>
</form>