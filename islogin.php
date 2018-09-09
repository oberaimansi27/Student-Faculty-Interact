<?php
session_start();
$a=$_POST['username'];
$b=$_POST['password'];
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$q="select * from studentdetails";
$r="select * from facultydetails";
$s="select * from admin";
$result1=mysql_query($q,$con);
$result2=mysql_query($r,$con);
$result3=mysql_query($s,$con);
$l1=mysql_num_rows($result1);
$l2=mysql_num_rows($result2);
$l3=mysql_num_rows($result3);
$istrue=0;
$istruef=0;
$istrueadmin=0;
for($i=1;$i<=$l1;$i++)
{
	$row1=mysql_fetch_array($result1);
	if($row1['Username']==$a&&$row1['Password']==$b)
	{
		$istrue=1;break;
	}	
}
for($j=1;$j<=$l2;$j++)
{
	$row2=mysql_fetch_array($result2);
	if($row2['Username']==$a&&$row2['Password']==$b)
	{
		$istruef=1;break;
	}	
}
for($k=1;$k<=$l3;$k++)
{
	$row3=mysql_fetch_array($result3);
	if($row3['username']==$a&&$row3['password']==$b)
	{
		$istrueadmin=1;break;
	}	
}
if($istrue==1)
include("profile.php");
else if($istruef==1){
$_SESSION['name']=$row2['Fac_name'];
$_SESSION['ID']=$row2['Fac_ID'];
include("fac_profile.php");}
else if($istrueadmin==1)
{
	include('adminpage.php');
}
else
{
	echo $a;
include("loginfail.php");
}
?>