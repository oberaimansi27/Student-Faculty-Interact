<!DOCTYPE html>
<html>
	<head>
		<title>CA</title>
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
 <h1 style="text-align: center; color:white; font-size: 200px;" >Computer Architecture</h1>
 
	
	<div class="askqueries">
	<?php include('ca_open_query.php');?>
	</div>
	
	
	
	
	<div class="Search">
<form action="ca_search_query.php" method="post">
<input style="height:100px;width:1830px;" type="text" name="searchme" placeholder="Search Query" />
<input style="height:100px;width:350px;" type="submit" value="Search"/>
</form>
</div>
<br><br>
<div class="queries">

<div class="c2">
<a href="ca_query.php">Back to All Queries</a>
<div style="font-size:60px;font-family:calibri;">
<?php
$a=$_POST['searchme'];
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
?><div style="font-weight:bold;font-size:70px;"><?php
echo "Answered Queries::";?></div><?php
echo "<br>";
$r1="SELECT * FROM ca_questions NATURAL JOIN ca_answers WHERE question LIKE '%".$a."%'";
$result1=mysql_query($r1);

while($row1 = mysql_fetch_array($result1))
{
    echo "Question: ";
	echo $row1['Qno'];
	echo "<br>";
	echo $row1['question'];
	echo "<br>";
	echo "By::";
	echo $row1['Qsch_no'];
	echo $row1['Qfac_id'];
	echo "<br>";
	echo "<br>";
	echo "Asnwer: ";
	echo "By::";
	echo $row1['Asch_no'];
	echo $row1['Afac_id'];
	echo "<br>";
	echo $row1['answer'];
	echo "<br>";
	echo "<br>";
}

echo "<br>";
?><div style="font-weight:bold;font-size:70px;"><?php
echo "Unanswered Queries::";?></div><?php
echo "<br>";
$r1="SELECT question,A.Qno as qno,Qsch_no,Qfac_id FROM ca_questions as A WHERE question LIKE '%".$a."%' AND A.Qno not in (select Qno from ca_answers)";
$result1=mysql_query($r1);

while($row1 = mysql_fetch_array($result1))
{
    echo "Question: ";
	echo $row1['qno'];
	echo "<br>";
	echo $row1['question'];
	echo "<br>";
	echo "By::";
	echo $row1['Qsch_no'];
	echo $row1['Qfac_id'];
	echo "<br>";
	echo "<br>";

}
?>
</div></div></div>
<div class="giveanswer">
<div class="c1">
<form action="ada_answer_query.php" method="post">
<input style="height:100px;width:1800px;" type="number" name="Qno" placeholder="Write question number here" /><br>
<input style="height:100px;width:1800px;" type="answer" name="answer" placeholder="Write your answer here" /><br>
<input style="height:100px;width:1800px;" type="number" name="Sch_no" placeholder="write your Scholar Number here" /><br>
<input style="height:100px;width:400px;" type="submit" value="Submit"/>
</form>
</div></div>
	
	<div class="books">
	<h1 style="text-align:center;text-family:calibri;font-size:100px;color:black;padding:20px;">Recommended Books</h1>
	<a href="https://poojavaishnav.files.wordpress.com/2015/05/mano-m-m-computer-system-architecture.pdf">Computer Architecture by Morris Mano.</a>
	<br><br>
	<a href="https://inspirit.net.in/books/academic/Computer%20Organisation%20and%20Architecture%208e%20by%20William%20Stallings.pdf">Computer Organization and Architecture William Stallings</a></div>
</body>
</html>	
