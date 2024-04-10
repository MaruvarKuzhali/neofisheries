<!DOCTYPE html>
<html>
<head>
	 <title>DELETE ACCOUNT</title>
</head>
<?php
$a=$_POST["a"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,"id13931576_project");
$delete="DELETE FROM equip where name='$a'";
if(mysqli_query($conn,$delete))
	echo"YOUR ACCOUNT HAS BEEN DELETED SUCCESSFULLY";
else
	echo"ACCOUNT NOT  DELETED";
$conn->close();
?>
<body bgcolor="pink">
</body>
</html>
