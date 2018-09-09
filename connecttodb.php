<?php
$mysql_hostname="localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbms";

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");

$Fac_name=$_POST['Fac_name'];
$Fac_ID=$_POST['Fac_ID'];
$Email_ID=$_POST['Email_ID'];
$Phone_no=$_POST['Phone_no'];
$Dept_code=$_POST['Dept_code'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

mysqli_query($bd, "INSERT INTO member(Fac_name, Fac_ID, Email_ID, Phone_no, Dept_code, Username, Password)
VALUES('$Fac_name','$Fac_ID','$Email_ID','$Phone_no','$Dept_code','$Username','$Password')");

header("location:registerdiv.php?remarks=success");

mysqli_close($con);
?>