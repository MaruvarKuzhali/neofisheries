<html>
<head>
	<title>UPDATION OF DATA</title>
</head>
<body>
	<?php
$u=$_POST['user'];
$p=$_POST['password'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost::".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$connect=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($connect,'id13931576_project');
$query_select="SELECT Username,Password FROM neo_fisheries";
$result=mysqli_query($connect,$query_select);
?>

</body>