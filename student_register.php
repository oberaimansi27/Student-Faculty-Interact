<!Doctype Html>
<html>
	<head>
		<title>
		Login Page
		</title>
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link rel="stylesheet" type="text/css" href="home1.css">
		<link rel="stylesheet" type="text/css" href="regi.css">
		
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
	<a href="student_register.php" style="width:925px;background-color:white;text-family:calibri;font-size:70px;text-align:center;padding:20px 40px; margin:8px 10px;position:absolute;left:8px;top:0px;">Student Register</a>
	<a href="faculty_register.php" style="width:925px;background-color:white;text-family:calibri;font-size:70px;text-align:center;padding:20px 40px; margin:8px 10px;position:absolute;right:8px;top:0px;">Faculty Register</a><br><br>
	<h1 style="text-align:center;text-family:calibri;font-size:100px;color:white;padding:150px;">Student Register</h1>
	<div class="c2">
	<br>
	<?php include("regstudiv.php");?>
	<br>
	<br>
	<h5>If registered <a href="login.php" style="color:yellow;">Click here to Login</a></h5>
	</div>
	
	</div>
	</body>
</html>
