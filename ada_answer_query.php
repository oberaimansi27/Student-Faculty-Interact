<html>
<body>
<?php
$a=$_POST['Qno'];
$b=$_POST['answer'];
$c=$_POST['Sch_no'];
if($a==""||$b==""||$c=="")
echo "failed";
else
{
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="insert into ada_answers(Qno,answer,Asch_no) values ('$a','$b','$c')";
$result1=mysql_query($r,$con);
if(!$result1)
	echo "Submission Failed";
else
include("ada_query.php");}
?>
</body>
</html>