<!Doctype Html>
<html>
	<head>
		<title>
		Login Page
		</title>
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" type="text/css" href="home1.css">
		<style type="text/css">
		body{
	background-image:url(img/200.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment: fixed;
}
.c1{
	width:1900px;
	height:1400px;
	background-color:#800000;
	border-radius:50px;
	opacity:0.7;
	position:absolute;
	top:600px;
	left:2900px;

}
		</style>
	</head>
	<body>
	<div class="slider">	
	<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
   <a href="home.php">Home</a>
    <a href="login.php">Login</a>
    <a href="student_register.php">Register</a>
  </div>
</div>
</div>
	</div>
	<div class="c1">
	<h1 style="text-align:center;text-family:calibri;font-size:100px;color:white;padding:150px;">Login</h1>
	<div class="c2">
	<?php include("logindiv.php");?>
	<br>
	<br>
	<h5>If not registered <a href="student_register.php" style="color:yellow;">Click here</a></h5>
	</div>
	
	</div>
	</body>
</html>
