<html>
<body>
<?php
$a=$_POST['Qno'];
$b=$_POST['answer'];
$c=$_POST['Fac_ID'];
if($a==""||$b==""||$c=="")
echo "failed";
else
{
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="insert into ca_answers(Qno,answer,Afac_id) values ('$a','$b','$c')";
$result1=mysql_query($r,$con);
if(!$result1)
	echo "Submission Failed";
else
include("fca_query.php");}
?>
</body>
</html>