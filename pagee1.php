<?php
$a=$_POST["name"];
$b=$_POST["sdw"];
$c=$_POST["category"];
$d=$_POST["address"];
$e=$_POST["finass"];
$f=$_POST["detail"];
$x=$_POST["fish"];
$y=$_POST["ration"];
$z=$_POST["passbook"];
$aa=implode(',',$_POST["ch"]);
$g=mysqli_connect('localhost','id13931576_neofisheries','VishnuPriya#123','id13931576_project');
mysqli_select_db($g,"id13931576_project");
$h="INSERT INTO finass(Name,Sonof,Category,Address,Finassfor,Detail,Fisheriescertificate,Rationcard,passbook,status)VALUES('$a','$b','$c','$d','$e','$f','$x','$y','$z','$aa')";
if($g->query($h)===TRUE)
	echo"NEW RECORD CREATED SUCCESSFULLY";
else
	echo"RECORD NOT CREATED";
?>