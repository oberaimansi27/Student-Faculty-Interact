<!DOCTYPE html>
<html>
	<head>
		<title>DBMS</title>
		<link rel="stylesheet" type="text/css" href="home1.css">
		
		<style type="text/css">
		body{
	background-image:url(34.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment: fixed;
}

.queries{
	width:2200px;
	height:2300px;
	background-color:lightgrey;
	
	position:absolute;
	top:600px;
	left:2600px;
	overflow-y: scroll;

}
.askqueries{
	width:2000px;
	height:1300px;
	background-color:lightgrey;
	
	position:absolute;
	top:600px;
	left:250px;

}
.books{
	width:2000px;
	height:800px;
	background-color:lightgrey;

	position:absolute;
	top:2100px;
	left:250px;

}
input{
	width:1400px;
	height:200px;
	
}
.Search{
	width:2200px;
	height:110px;
	background-color:lightgrey;
	position: absolute;
	top:600px;
	left:2600px;
}
.c2{
	position:relative;
	
	left:50px;
	
}
.giveanswer{
	width:2200px;
	height:500px;
	background-color:lightgrey;
	position: absolute;
	top:2210px;
	left:2600px;
}
.c1{
	position:relative;
	top:50px;
	left:50px;
}
		</style>
	</head>
	
<body>

<div class="slider">	
<button style="width:370px; height:120px; background-color: white; color: black; font-size:60px; border: none; font-family:'georgian' left:4800px;">
   <a href="login.php" style="font-size:60px; border: none;color:black; font-family:'georgian';  ">Logout</a></button>
<div class="dropdown"> 
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
 <a href="home.php">Home</a>
    <a href="login.php">Login</a>
    <a href="student_register.php">Register</a>
	<a href="lab.php">Lab Assignment</a>
  </div>
 </div> 
 <h1 style="text-align: center; color:white; font-size: 200px;" > Database Management System</h1>
 
	
	<div class="askqueries">
	<h1 style="text-align:center; color:black; font-size: 100px;" >Upload Lab Assignment</h1>
	<div style="position:absolute; top:200px;">
	<?php include('give_assignment.php');?>
	</div>
	
	</div>
	

<!--	<div class="Search">
<form action="dbms_search_query.php" method="post">
<input style="height:100px;width:1830px;" type="text" name="searchme" placeholder="Search Query" />
<input style="height:100px;width:350px;" type="submit" value="Search"/>
</form>
</div>-->
<br><br>
<div class="queries">
<div class="c2">
<?php include('dbms_QandA.php');?></div></div>
<div class="books">
<h1 style="text-align:center; color:black; font-size: 100px;" > Answer Queries </h1>
<div class="c1">

<form action="fdbms_answer_query.php" method="post">
<input style="height:100px;width:1800px;" type="number" name="Qno" placeholder="Write question number here" /><br>
<input style="height:100px;width:1800px;" type="answer" name="answer" placeholder="Write your answer here" /><br>
<input style="height:100px;width:1800px;" type="text" name="Fac_ID" placeholder="Enter your Fac_ID here" /><br>
<input style="height:100px;width:400px;" type="submit" value="Submit"/>
</form>
</div></div>
	
</body>
</html>	
	