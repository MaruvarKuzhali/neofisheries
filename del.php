<!DOCTYPE html>
<html>
<head>
	 <title>DELETE ACCOUNT</title>
</head>
<?php
$b=$_POST["license"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,'id13931576_project');
$delete="DELETE FROM neo_fisheries where License=$b";
if(mysqli_query($conn,$delete))
	echo"YOUR ACCOUNT HAS BEEN DELETED SUCCESFULLY";
else
	echo"ACCOUNT NOT  DELETED";
$conn->close();
?>
</body>
</html>
