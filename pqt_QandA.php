

<html>
<div style="font-size:60px;font-family:calibri;">
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("dbms",$con);
$r="select question,Qsch_no,Qfac_id,Qno from pqt_questions where Qno not in (select Qno from pqt_answers)";
$result=mysql_query($r);
//$num=mysql_num_rows($result);
//echo "<table>";
?><div style="font-weight:bold;font-size:70px;"><?php
echo "Unanswered Questions::";
echo "<br>";
echo "<br>";?></div><?php
while($row = mysql_fetch_array($result))
{
    echo "Question: ";
	echo $row['Qno'];
	echo "<br>";
	echo $row['question'];
	echo "<br>";
	echo "By::";
	echo $row['Qsch_no'];
	echo $row['Qfac_id'];
	echo "<br>";
	echo "<br>";
}
echo "<br>";
?>

<div style="font-weight:bold;font-size:70px;"><?php
echo 'Answered Questions::';
echo "<hr>";?></div>
<?php
$r1="select question,Qsch_no,Qfac_id,answer,Asch_no,Afac_id,q.Qno from pqt_questions as q,pqt_answers as a where q.Qno=a.Qno";
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
	echo $row1['Qfac_id']; ?>
	<div style="font-color:blue">
	<?php echo "<br>";
	echo "<br>";
	echo "Asnwer: ";
	echo "By::";
	echo $row1['Asch_no'];
	echo $row1['Afac_id'];
	echo "<br>";
	echo $row1['answer'];
	echo "<br>";
	echo "<br>"; ?> </div> <?php
}?>
</div>
</html>