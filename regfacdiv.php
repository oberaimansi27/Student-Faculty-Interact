<!DOCTYPE HTML>
<html>
<body>
<form action="facultyentryindb.php" method="POST" style="padding:20px;">
<table>
<tr>
<td>Full Name</td>
<td> <input type="text" name="Fac_name" style="width:900px;height:90px;"/></td><br>
</tr>
<tr>
<td>ID</td><td><input type="text" name="Fac_ID" style="width:900px;height:90px;"/></td>
</tr>
<tr>
<td>Deptartment Code</td><td><input type="varchar" name="Dept_code" style="width:900px;height:90px;"/></td>
</tr>
<tr>
<td>E-mail ID</td><td><input type="email" name="Email_ID" style="width:900px;height:90px;"/></td>
</tr>
<tr>
<tr>
<td>Contact Number</td><td><input type="int" name="Phone_no" style="width:900px;height:90px;"/></td>
</tr>
<tr>
<td>Subject</td><td><select name="sub" style="width:900px;height:90px;"><option value="toc">TOC</option><option value="ada">ADA</option><option value="dbms">DBMS</option><option value="se">SE</option><option value="ca">CA</option><option value="pqt">PQT</option></select></td>
</tr>
<tr>
<td>Username</td><td><input type="text" name="Username" style="width:900px;height:90px;"/></td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="Password" style="width:900px;height:90px;"/></td>
</tr>
</table>
<br><br>
<input type="Submit" name="submit" value="Register" style="text-family:calibri;font-size:70px;text-align:center;padding:20px 40px; margin:8px 10px;position:absolute;left:0px;"/>
<input type="Reset" style="text-family:calibri;font-size:70px;text-align:center;padding:20px 40px; margin:8px 10px;position:absolute;left:400px;"/>

</form>
</body>
</html>