<html>
<body>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="select * from open_questions";
$result=mysql_query($r);
$num=mysql_num_rows($result);
for($i=1;$i<=$num;$i++)
{?><div style="font-size:80px;font-family:comic sans ms"><?php
	
	
	
	echo $row['question'];?><br><?php
	echo "Answer :";echo "By ";
	
	
	
	if($row['Afac_id']!="")
	{
	$a= $row['Afac_id'];
	echo $a;
	}
	
	
	if($row['Asch_no']!=""){
		$a= $row['Asch_no'];
	echo $a;
	}?><br><?php
	echo $row['answer']; ?><br><br><?php
}?>
</div>
</body>
</html>


<!--<html>
<body>
/*<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="select * from open_questions";
$result=mysql_query($r);
$num=mysql_num_rows($result);
for($i=1;$i<=$num;$i++)
{?><div style="font-size:80px;font-family:comic sans ms"><?php
	$row=mysql_fetch_array($result);
	echo "Question $i :";echo "By ";
	if($row['Qfac_id']!="")
	{
	$a= $row['Qfac_id'];
	$q=mysql_query("select * from facultydetails");
	for($i=1;$i<mysql_num_rows($q);$i++)
	{$name=mysql_fetch_array($q);
		if($name['Fac_ID']==$a){
	echo $name['Fac_name'];break;}}
	}
	
	
	if($row['Qsch_no']!=""){
		$a= $row['Qsch_no'];
	$q=mysql_query("select * from studentdetails");
	for($i=1;$i<mysql_num_rows($q);$i++)
	{$name=mysql_fetch_array($q);
		if($name['Sch_no']==$a){
	echo $name['Student_name'];break;}}
	}
	?>
	
	<br><?php
	echo $row['question'];?><br><?php
	echo "Answer :";echo "By ";
	
	if($row['Afac_id']!="")
	{
	$a= $row['Afac_id'];
	echo $a;
	}
	
	
	if($row['Asch_no']!=""){
		$a= $row['Asch_no'];
	echo $a;
	}?><br><?php
	echo $row['answer']; ?><br><br><?php
}?>*/
</div>
</body>
</html>-->