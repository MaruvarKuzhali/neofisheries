<!DOCTYPE html>
<html>
<head>
	 <title>NEO ACCOUNT DETAILS</title>
</head>

<body bgcolor="pink">
	<?php
	
$mysqlport=getenv('S2G_MYSQL_PORT');
echo $mysqlport;
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id13931576_project');

$query_select="SELECT * from equip";
$result=mysqli_query($connect,$query_select);
$row=mysqli_num_rows($result);
echo $row;
?>
</body>