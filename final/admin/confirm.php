<?php
function clean($str)
    {
        $str = @trim($str);
        if(get_magic_quotes_gpc())
            {
            $str = stripslashes($str);
            }
        return mysql_real_escape_string($str);
    }
$id=clean($_POST['id']);
include('../connect.php');
$result = mysql_query("SELECT * FROM preregistration WHERE id='$id'");
	echo 'yes2';
   // $n=mysql_fetch_array($result);
    //$p=mysql_num_rows($n);
    //echo $p;
    while($row = mysql_fetch_array($result))
		{
		$username=$row['username'];
		$status=$row['status'];
		$c1=$row['course1'];
        $c2=$row['course2'];
        $c3=$row['course3'];
        $c4=$row['course4'];
        $c5=$row['course5'];
        $c6=$row['course6'];
        $c7=$row['course7'];
        $c8=$row['course8'];
        $c9=$row['course9'];
        $c10=$row['course10'];
      //  echo 'yes';
		}
        //echo $id;
     //echo $username;
     //echo $status;
       // if($c1=='none'){
         //   echo 'yes';
        //}
        if($c1!='none'){
            $r=mysql_query("SELECT *FROM $c1 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            echo $n;
            if($n==0){
            mysql_query("INSERT INTO $c1(enrollment) VALUES('$username')");
            }
        }
        if($c2!='none'){
            $r=mysql_query("SELECT *FROM $c2 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c2(enrollment) VALUES('$username')");
            }
        }
        if($c3!='none'){
            $r=mysql_query("SELECT *FROM $c3 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c3(enrollment) VALUES('$username')");
            }
        }
        if($c4!='none'){
            $r=mysql_query("SELECT *FROM $c4 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c4(enrollment) VALUES('$username')");
            }
        }
        if($c5!='none'){
            $r=mysql_query("SELECT *FROM $c5 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c5(enrollment) VALUES('$username')");
            }
        }
        if($c6!='none'){
            $r=mysql_query("SELECT *FROM $c6 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c6(enrollment) VALUES('$username')");
            }
        }
        if($c7!='none'){
            $r=mysql_query("SELECT *FROM $c7 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c7(enrollment) VALUES('$username')");
            }
        }
        if($c8!='none'){
            $r=mysql_query("SELECT *FROM $c8 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c8(enrollment) VALUES('$username')");
            }
        }
        if($c9!='none'){
            $r=mysql_query("SELECT *FROM $c9 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c9(enrollment) VALUES('$username')");
            }
        }
        if($c10!='none'){
            $r=mysql_query("SELECT *FROM $c10 WHERE enrollment='$username'");
            $rows=mysql_fetch_array($r);
            $n=mysql_num_rows($rows);
            if($n==0){
            mysql_query("INSERT INTO $c10(enrollment) VALUES('$username')");
            }
        }
        mysql_query("UPDATE notification SET message='your registration request has been accepted check your courses!' WHERE position='$username' AND message='your registration status is pending'");
        
        mysql_query("UPDATE preregistration SET status ='accepted' WHERE username='$username'");
        header("location:registrationrequest.php");
?>
