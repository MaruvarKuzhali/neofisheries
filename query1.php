<!DOCTYPE html>
<html>
<head>
	 <title>Find My Position</title>
</head>

<body >
	<?php
	
$mysqlport=getenv('S2G_MYSQL_PORT');
echo $mysqlport;
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id13931576_project');

$query_select="SELECT * from scholarship";
$result=mysqli_query($connect,$query_select);
$row=mysqli_num_rows($result);
echo "<h1>YOUR RESPONSE IS IN ".$row." POSTION</h1>";
?>
<center><img src="smiley.gif"></center>