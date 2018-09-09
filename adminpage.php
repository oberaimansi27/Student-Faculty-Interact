<!Doctype Html>
<html>
	<head>
		<title>
		ADMIN PAGE
		</title>
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" type="text/css" href="home1.css">
		<style type="text/css">
		body{
	background-image:url(img/500.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment: fixed;
}
.c11{
	width:2500px;
	height:1500px;
	background-color:#5c8a8a;
	opacity:0.9;
	position:absolute;
	top:700px;
	left:900px;
	font-size:75px;
	overflow-y: scroll;
	overflow-x: scroll;

}
		</style>
	</head>
	<body><div class="slider">	
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
</div>
<h1 style="text-align:center;text-family:calibri;font-size:200px;color:black;padding:150px;">Feedback Table</h1><br><br>
<div class="c11">
<table border=22px; cellpadding=21px;>
<th>
<td><b>Sender's Username</b></td>
<td><b>Message</b></td>
</th>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$s="select * from feedback";
$result3=mysql_query($s,$con);
$l3=mysql_num_rows($result3);
echo "<br>";
for($k=1;$k<=$l3;$k++)
{
	$row3=mysql_fetch_array($result3);
	$a=$row3['M_no'];
	$b=$row3['msg'];
	$c=$row3['username'];?>
	<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $c;?></td>
	<td><?php echo $b;?></td>
	</tr>
<?php
}?></table>
</div>
	</body>
</html>
