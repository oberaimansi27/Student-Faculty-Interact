<?php
session_start();
$a=$_POST['Fac_name'];
$_SESSION['name']=$a;
$b=$_POST['Fac_ID'];
$_SESSION['ID']=$b;
$c=$_POST['Email_ID'];
$d=$_POST['Phone_no'];
$e=$_POST['Dept_code'];
$f=$_POST['Username'];
$g=$_POST['Password'];
if(isset($_POST['submit'])){
$h=$_POST['sub'];
}
if($a==""||$b==""||$c==""||$d==""||$e==""||$f==""||$g=="")
echo "Registration failed! Fill All the fields.";
else
{
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="insert into facultydetails values ('$a','$b','$c','$d','$e','$f','$g')";
$result1=mysql_query($r,$con);
$q="insert into teacher_courses values ('$b','$h')";
$result2=mysql_query($q,$con);
if(!$result1)
	echo "Registration Failed1";
if(!$result2)
	echo "Registration Failed2";
else
include("fac_profile.php");}
?>