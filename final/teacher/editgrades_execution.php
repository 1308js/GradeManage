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
//	$id = clean($_POST['id']);
$username = clean($_POST['username']);
$course = clean($_POST['course']);
$enrollment = clean($_POST['enrollment']);
$term = clean($_POST['term']);
$mark = clean($_POST['marks']);
$max = clean($_POST['maxmarks']);
$per = clean($_POST['percentage']);
$m=($per*$mark)/$max;
$pm=clean($_POST['pm']);
$q=clean($_POST['question']);
if($mark<=$max&&$per<=100)
		{
					mysql_query("UPDATE $course SET $term='$m' WHERE enrollment='$enrollment'");
					$r1=mysql_affected_rows();
					if($r1>0)

						{

            				if($q=='Yes')
                				{
	               					$r=mysql_query("select *from $course");
	        						while($row=mysql_fetch_array($r))
	               						{ 
	                   						$s1=$row['enrollment'];
		                 					 $total=$row['quiz1']+$row['quiz2']+$row['assignment']+$row['project']+$row['endsem'];
		                  					mysql_query("UPDATE $course SET totalmarks='$total' WHERE enrollment='$s1'");
		                				}
                    				$r1=mysql_query("SELECT *FROM $course ");
                    				$t=o;
                 					$N=mysql_num_rows($r1);
                				  	while($row1=mysql_fetch_array($r1))
                        				{
	                       					$t +=$row1['totalmarks'];
                        					echo $t; echo ' \t '; 
                        				}
									$avg=$t/$N;
                    				$r2=mysql_query("SELECT *FROM $course ");
									$p=0;
                    				while($row2=mysql_fetch_array($r2))
                       					{
                            				$p =$p+(($row2['totalmarks'] - $avg)*($row2['totalmarks'] - $avg));
                  					    }
                				    $sigma =sqrt($p/$N);
   				                    $r2=mysql_query("select *from $course");
                    				while($row2=mysql_fetch_array($r2))
                    					{
                    						$studnumber=$row2['enrollment'];
						                    $total=$row2['quiz1']+$row2['quiz2']+$row2['assignment']+$row2['project']+$row2['endsem'];
											if($total>=($avg+(1.65*$sigma)))
												{
													mysql_query("UPDATE $course SET grade='O' WHERE enrollment='$studnumber'");
                    							}
                    						if($total>=($avg+(0.75*$sigma))&&$total<($avg+(1.65*$sigma)))
                    							{
                        							mysql_query("UPDATE $course SET grade='A' WHERE enrollment='$studnumber'");
                    							}
                    						if($total>=($avg-(0.15*$sigma))&&$total<($avg+(0.75*$sigma)))
                    							{
                        							mysql_query("UPDATE $course SET grade='B' WHERE enrollment='$studnumber'");
                    							}
                    							if($total>=($avg-(1.05*$sigma))&&$total<($avg-(0.15*$sigma)))
                    							{
                        							mysql_query("UPDATE $course SET grade='C' WHERE enrollment='$studnumber'");
                    							}
                    						if($total>=($avg-(1.95*$sigma))&&$total<($avg-(1.05*$sigma)))
                    							{
                        							mysql_query("UPDATE $course SET grade='D' WHERE enrollment='$studnumber'");
                    							}
                    						if($total>=$pm&&$total<($avg-(1.95*$sigma)))
                    							{
                        							mysql_query("UPDATE $course SET grade='E' WHERE enrollment='$studnumber'");
                    							}
                    						if($total<$pm)
                    							{
                        							mysql_query("UPDATE $course SET grade='F' WHERE enrollment='$studnumber'");
                    							}
                    						                
            							}
            					}		

            			
header("location: editgrades_success.php");}
else header("location: editgrades_failure.php");
}
else header("location: editgrades_failure.php");
?>