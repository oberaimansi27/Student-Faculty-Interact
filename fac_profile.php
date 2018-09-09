<!DOCTYPE html>
<html>

<body>
<!--
<div class="slider">	
<button style="width:370px; height:120px; background-color: white; color: black; font-size:60px; border: none; font-family:'georgian' left:4800px;">
   <a href="login.php" style="font-size:60px; border: none; font-family:'georgian'; ">Logout</a></button>
<div class="dropdown"> 
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
 <a href="home.php">Home</a>
    <a href="login.php">Login</a>
    <a href="student_register.php">Register</a>
  </div>
 </div> 
 <h1 style="text-align: center; color:white; font-size: 200px;" > Welcome <?php echo $_SESSION['name'];?> </h1>
  
 <div id="d1" style="position:absolute; z-index:100; color:white; width:100%,height:100%;top:700px;left:400px;">-->
<?php $con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$a=$_SESSION['ID'];
$q="select * from teacher_courses where Fac_ID='$a'";
$result=mysql_query($q,$con);
$num=mysql_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysql_fetch_array($result);
	if($row['course_name']=='toc')
	{include('fstudent_query.php');}
else if($row['course_name']=='ada')
	{include('fada_query.php');}
else if($row['course_name']=='ca')
	{include('fca_query.php');}
else if($row['course_name']=='dbms')
	{include('fdbms_query.php');}
else if($row['course_name']=='se')
	{include('fse_query.php');}
else if($row['course_name']=='pqt')
	{include('fpqt_query.php');}
}?>

</body>
</html>	
	