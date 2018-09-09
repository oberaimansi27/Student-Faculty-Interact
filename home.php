
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="home1.css">
		<style type="text/css">
			a{
				text-decoration:none;
				font-size:150px;
				
				font-family:"comic sans ms";
				color:black;
				font-weight:bold;
			}
			button{
				width:750px;		
				opacity:1;				
			}
			
			
.slide4{
background-image:url(homeimg/106.jpg);}


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
		<div class="slide1">
		
		<div id="d1" style="position:absolute;z-index:100;color:white;width:100%,height:100%;top:700px;left:1800px;">
		Welcome!<br>
		<button><a href="login.php">Login</a></button> 
		<button><a href="register.php">Register</a></button> 
		</div>
		</div>
		<div class="slide2">
		<div id="d1" style="position:absolute;z-index:100;color:white;width:100%,height:100%;top:700px;left:1800px;">
		Welcome!<br>
		<button><a href="login.php">Login</a></button> 
		<button><a href="register.php">Register</a></button> 
		</div>
		</div>
		<div class="slide3">
		<div id="d1" style="position:absolute;z-index:100;color:white;width:100%,height:100%;top:700px;left:1800px;">
		Welcome!<br>
		<button><a href="login.php">Login</a></button> 
		<button><a href="register.php">Register</a></button> 
		</div>
		</div>
		<div class="slide4">
		<div id="d1" style="position:absolute;z-index:100;color:white;width:100%,height:100%;top:700px;left:1800px;">
		Welcome!<br>
		<button><a href="login.php">Login</a></button> 
		<button><a href="student_register.php">Register</a></button> 
		</div>
		</div>
	</div>
	
	<div class="about">
	<h2 style="text-decoration:underline;text-family:calibri;font-size:150px;text-align:center;padding:30px 10px; margin:8px 10px;">About Us</h2>
	<p style="font-size:70px;font-family:calibri;padding:0px 150px;text-align:justify;"><b>This site aims at student faculty interaction. Depending upon their department,
any student can have direct communication with any faculty. All the students and
faculties can login and thus have a common platform on which doubts will be
discussed so that multiple students can refer to the same query at any point of time.
There is scope for open discussion between students and faculty.
There are scenarios in colleges when teachers are not
available to clear individual doubts that make it difficult for both the students and
professors to interchange thoughts and logics. Thus, a platform is required so that
whenever a student encounters a doubt, he/she can post that to this panel and
according to their query, any faculty who is free to answer can clear the same.</b></p>
<button style="width:850px;height:150px;position:absolute;left:750px;"><a href="about.php" style="font-size:70px;">Developer Team</a></button>
	</div>
	<div class="contact">
	
	<div align="center">
	<h3 style="text-decoration:underline;text-family:calibri;font-size:150px;text-align:center;padding:30px 10px; margin:8px 10px;"> <u>Get In Touch!</u></h3>
	</div>
    <br><br><form action="feedback.php" method="post" style="text-family:calibri;font-size:80px;text-align:center;padding:10px 10px; margin:8px 10px;position:absolute;left:400px;">
	<table cellpadding=50px;> 
	<tr>
	<td >Username</td>
	<td>
	<input type="text" name="username" style="width:900px;height:90px;"/>
	</td>
	</tr>
	<tr>
	<td>Message</td>
	<td>
	<input type="text" name="message" style="width:900px;height:90px;"/>
	</td>
	</tr>
	</table>
	<br>
	<br>
	<input type="submit" value="Send" style="text-family:calibri;font-size:80px;text-align:center;padding:20px 40px; margin:8px 10px;position:absolute;left:530px;">
	</form>
	
	</div>
    
	
	<div style="position:absolute;height:500px;width:100%;top:4600px;background-image:url('123.jpg');background-size:cover;background-repeat:no-repeat;">
	<div style="position:absolute;left:2300px;top:200px;">
	<?php include('footer.php');?>
	</div></div>
	
	</body>
</html>