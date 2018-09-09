<?php
$b=$_POST['Student_name'];
$a=$_POST['Sch_no'];
$c=$_POST['Semester'];
$d=$_POST['DOB'];
$e=$_POST['Address'];
$f=$_POST['Phone_no'];
$g=$_POST['Email_ID'];
$h=$_POST['Dept_code'];
$i=$_POST['Username'];
$j=$_POST['Password'];

if($a==""||$b==""||$c==""||$d==""||$e==""||$f==""||$g==""||$f==""||$g==""||$h==""||$i==""||$j=="")
echo "Registration Failed.\n Fill All The Entries.";
else
{
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="insert into studentdetails values ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$result1=mysql_query($r,$con);
if(!$result1)
	echo "Registration Failed";
else
include("profile.php");}
?>