<?php
$a=$_POST["name"];
$b=$_POST["address"];
$c=$_POST["age"];
$d=$_POST["namef"];
$e=$_POST["namen"];
$f=$_POST["agen"];
$g=$_POST["namer"];
$h=$_POST["yesorno"];
$i=$_POST["namey"];
$j=$_POST["yesno"];
$k=$_POST["namez"];
$l=$_POST["reg"];
$m=$_POST["fish"];
$n=$_POST["birth"];
$o=$_POST["photo"];
$p=$_POST["ins"];
$q=implode(',',$_POST["ch"]);
$x=mysqli_connect('localhost','id13931576_neofisheries','VishnuPriya#123','id13931576_project');
mysqli_select_db($x,"id13931576_project");
$y="INSERT INTO scholar(name,address,age,fishingvessel,nomineename,nomineeage,relationship,yesorno,ifyes,wyesorno,typeofnet,regno,fisheriescertificate,birthcertificate,photo,reasonfordeath,about)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q')";
if($x->query($y)===TRUE)
	echo"NEW RECORD CREATED SUCCESSFULLY";
else
	echo"RECORD NOT CREATED";
?>