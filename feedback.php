<?php
$m=$_POST['message'];
$u=$_POST['username'];

if($m==""||$u=="")
	echo "Fill all the fields.";
else{
	
	$c=mysql_connect('localhost','root','');
	if(!$c)
	{
		echo "Failed to connect to Server.";
	}
	else{
		
		$db=mysql_select_db("dbms",$c);
		if(!$db)
		{
			echo "Failed to connect to the databse.";
		}
		else{
			$qu="select username from studentdetails where username=('$u')";
			$qq="select username from facultydetails where username=('$u')";
			$r1=mysql_query($qu,$c);
			$r2=mysql_query($qq,$c);
			if(mysql_num_rows($r1)==0&&mysql_num_rows($r2)==0)
			{
				echo "REGISTER FIRST";
			}
			else{
			$q="insert into FEEDBACK(msg,username) values (('$m'),('$u'))";
			$result=mysql_query($q,$c);
			if(!$result)
				echo "Query not executed correctly!";
			else{
				echo "Message Sent.";
				include('home.php');
				}
			}
		}
	}
}
?>