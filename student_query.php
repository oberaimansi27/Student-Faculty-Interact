<!DOCTYPE html>
<html>
	<head>
		<title>TOC</title>
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
	height:1500px;
	background-color:lightgrey;
	
	position:absolute;
	top:710px;
	left:2600px;
	overflow-y: scroll;

}
.askqueries{
	width:2000px;
	height:1000px;
	background-color:lightgrey;
	
	position:absolute;
	top:600px;
	left:250px;

}
.books{
	width:2000px;
	height:1000px;
	background-color:lightgrey;

	position:absolute;
	top:1700px;
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
	<a href="profile.php">Profile</a>
	
  </div>
 </div> 
 <h1 style="text-align: center; color:white; font-size: 200px;" > Theory of Computation </h1>
 
	
	<div class="askqueries">
	<?php include('open_query.php');?>
	</div>
	
	
	
	
	<div class="Search">
<form action="Search_query.php" method="post">
<input style="height:100px;width:1830px;" type="text" name="searchme" placeholder="Search Query" />
<input style="height:100px;width:350px;" type="submit" value="Search"/>
</form>
</div>
<br><br>
<div class="queries">
<div class="c2">
<?php include('QandA.php');?></div></div>
<div class="giveanswer">
<div class="c1">
<form action="answer_query.php" method="post">
<input style="height:100px;width:1800px;" type="number" name="Qno" placeholder="Write question number here" /><br>
<input style="height:100px;width:1800px;" type="answer" name="answer" placeholder="Write your answer here" /><br>
<input style="height:100px;width:1800px;" type="number" name="Sch_no" placeholder="write your Scholar Number here" /><br>
<input style="height:100px;width:400px;" type="submit" value="Submit"/>
</form>
</div></div>
	
	<div class="books">
	<h1 style="text-align:center;text-family:calibri;font-size:100px;color:black;padding:20px;">Recommended Books</h1>
	<a href="http://eng.uok.ac.ir/daneshfar/IntroductionToFormalLanguages/Peter%20LinzBook%205ed/An%20Introduction%20to%20Formal%20Languages%20and%20Automata%20-%205th%20Edition%20-%202011.pdf">Introduction to formal Languages & Automata Peter Linz,</a>
	<br><br>
	<a href="https://mcdtu.files.wordpress.com/2017/03/introduction-to-automata-theory.pdf">Introduction to Automata Theory, Language & Computations Hopcroaft & O.D.
Ullman, R Mothwani,</a></div>
</body>
</html>	
	