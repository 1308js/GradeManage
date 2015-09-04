<?php
include('../connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$cc = clean($_POST['coursecode']);
$d = clean($_POST['description']);
$ct = clean($_POST['coursetype']);
$c = clean($_POST['credit']);
$s = clean($_POST['semester']);
$s1 = clean($_POST['semester1']);
$st = clean($_POST['semestertype']);
$sy = clean($_POST['semesteryear']);


$a=$s%2;
$a1=$s1%2;
$i=0;
$j=0;

$result=mysql_query("SELECT *FROM course");
while($row=mysql_fetch_array($result))
		{
			$ccode=$row['coursecode'];
			$stype=$row['semestertype'];
			$syear=$row['semesteryear'];
		if($ccode==$cc&&$stype==$st&&$syear==$sy)
			$i++;
		//echo $i;
	}
echo $i;

if($s1!=0)
	{

	if(($a==0 && $st=='odd')||($a1==0 && $st=='odd')||($a!=0 && $st=='even')||($a1!=0 && $st=='even'))
	$j++;
echo $j;
echo 'no';
	}
else
		{		
			if(($a==0 && $st=='odd')||($a!=0 && $st=='even'))
				{	
//					echo 'yes   ';	
//					echo $a;
//					echo '   n   ';
					$j++;
//					echo $j;
				}
		}
		

	
//		echo $j;

if($i==0&&$j==0){
	mysql_query("create table $cc(enrollment varchar(15),quiz1 decimal(6,2),quiz2 decimal(6,2),assignment decimal(6,2),project decimal(6,2), endsem decimal(6,2),totalmarks decimal(6,2), grade varchar(2))"); 
	if($s1==0)

mysql_query("INSERT INTO course(coursecode,course_name,semester,credit,semestertype,semesteryear,coursetype)
VALUES ('$cc','$d','$s','$c','$st','$sy','$ct')");
else
mysql_query("INSERT INTO course(coursecode,course_name,semester,semester2,credit,semestertype,semesteryear,coursetype)
VALUES ('$cc','$d','$s','$s1','$c','$st','$sy','$ct')");

header("location: course_success.php");
}
else{
	header("location: course_failure.php");
}
?>