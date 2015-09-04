<?php
include('../connect.php');
$term=$_POST['term'];
$coursecode=$_POST['coursecode'];
$marks=$_POST['marks'];
$studnumber=$_POST['studnumber'];
$max=$_POST['maximum'];
$per=$_POST['percentage'];
$N = count($studnumber);
$y= count($marks);
$x=0;
$pm=$_POST['passingmarks'];
    for($i=0; $i < $N; $i++)
	   { 
		  if($marks[$i]>$max)
		      { 
                $x = $x + 1;
                }
		}
    if($x==0&&$N==$y)  
        {
	       for($i=0;$i< $N;$i++)
                {		
	               $m1=$marks[$i];
                   $mark=($per*$m1)/$max;

	               mysql_query("UPDATE $coursecode SET $term='$mark' WHERE enrollment='$studnumber[$i]'");	
                } header('location: listsubject_success.php');
	
            if($term=='endsem')
                {
	               $r=mysql_query("select *from $coursecode");
	               $i=0;

	               while($row=mysql_fetch_array($r))
	                   { 
		                  $total=$row['quiz1']+$row['quiz2']+$row['assignment']+$row['project']+$row['endsem'];
		                  mysql_query("UPDATE $coursecode SET totalmarks='$total' WHERE enrollment='$studnumber[$i]'");
		                  $i++;
		
                        }
                    $r1=mysql_query("SELECT *FROM $coursecode ");
                    $t=o;
                    while($row1=mysql_fetch_array($r1))
                        {
	                       $t +=$row1['totalmarks'];
                        }
                    $avg=$t/$N;
                    $r2=mysql_query("SELECT *FROM $coursecode ");
                    $p=0;
                    while($row2=mysql_fetch_array($r2))
                        {
                            $p =$p+(($row2['totalmarks'] - $avg)*($row2['totalmarks'] - $avg));
                  //          echo $p; echo '<br>';
                        }
                //        echo 'yes';echo $p; echo 'yes';
                    $sigma =sqrt($p/$N);
                    $m=0;
                    $r2=mysql_query("select *from $coursecode");
                    while($row2=mysql_fetch_array($r2)){


                    $total=$row2['quiz1']+$row2['quiz2']+$row2['assignment']+$row2['project']+$row2['endsem'];

                    if($total>=($avg+(1.65*$sigma))){

                        mysql_query("UPDATE $coursecode SET grade='O' WHERE enrollment='$studnumber[$m]'");
                    }
                    if($total>=($avg+(0.75*$sigma))&&$total<($avg+(1.65*$sigma))){
                        mysql_query("UPDATE $coursecode SET grade='A' WHERE enrollment='$studnumber[$m]'");
                    }
                    if($total>=($avg-(0.15*$sigma))&&$total<($avg+(0.75*$sigma))){
                        mysql_query("UPDATE $coursecode SET grade='B' WHERE enrollment='$studnumber[$m]'");
                    }
                    if($total>=($avg-(1.05*$sigma))&&$total<($avg-(0.15*$sigma))){
                        mysql_query("UPDATE $coursecode SET grade='C' WHERE enrollment='$studnumber[$m]'");
                    }
                    if($total>=($avg-(1.95*$sigma))&&$total<($avg-(1.05*$sigma))){
                        mysql_query("UPDATE $coursecode SET grade='D' WHERE enrollment='$studnumber[$m]'");
                    }
                    if($total>=$pm&&$total<($avg-(1.95*$sigma))){
                        mysql_query("UPDATE $coursecode SET grade='E' WHERE enrollment='$studnumber[$m]'");
                    }
                    if($total<$pm){
                        mysql_query("UPDATE $coursecode SET grade='F' WHERE enrollment='$studnumber[$m]'");
                    }
                    $m++;
                }
                    //echo $sigma;

                }
                


        }

	
else
header('location: listsubject_failure.php');
	?>