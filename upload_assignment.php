<?php

$f=$_FILES["assignment"];
$a=$_POST['lab'];
if($a=='ada')
move_uploaded_file($f["tmp_name"],"ada/".$f["name"]);
else if($a=='se')
move_uploaded_file($f["tmp_name"],"se/".$f["name"]);
else if($a=='java')
move_uploaded_file($f["tmp_name"],"java/".$f["name"]);
else if($a=='dbms')
move_uploaded_file($f["tmp_name"],"dbms/".$f["name"]);

echo "Assignment uploaded succesfully";

	
?>