<!DOCTYPE html>
<html>
<head>
	 <title>UPDATE ACCOUNT</title>
</head>
<?php
$c=$_POST["c"];
$a=$_POST["a"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,"id13931576_project");
$delete="UPDATE  equip set name='$a' where dateofbirth='$c'";
if(mysqli_query($conn,$delete))
	echo"YOUR ACCOUNT HAS BEEN UPDATED SUCCESSFULLY";
else
	echo"ACCOUNT NOT  UPDATED";
$conn->close();
?>
<body bgcolor="pink">
</body>
</html>
