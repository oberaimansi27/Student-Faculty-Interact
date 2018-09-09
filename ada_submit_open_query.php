<html>
<?php
$a=$_POST['question'];
$b=$_POST['Sch_no'];
if($a==""||$b=="")
echo "failed";
else
{
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="insert into ada_questions(question,Qsch_no) values ('$a','$b')";
$result1=mysql_query($r,$con);?>
<h5 style="color:white;"><?php
if($result1)
echo "Sucessful Submission";}?></h5><?php
include('ada_query.php');
?>
</html>