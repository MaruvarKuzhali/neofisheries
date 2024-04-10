<!DOCTYPE html>
<html>
<head>
	<title>Deletion</title>
</head>
<style>
	.button {
  background-color: #306EFF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body style="background-color: #E6E9AC;">
	<center><img src="del.gif"></center>
<?php
$name=$_POST['name'];
$dob=$_POST['dob'];
$aa=$_POST['aadhar'];
$mysqlport=getenv('S2G_MYSQL_PORT');
echo $mysqlport;
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id13931576_project');
$sql="DELETE FROM scholarship WHERE Name='$name' && Dob='$dob' && Aadhar='$aa'";
if($connect->query($sql)===TRUE)
{
	echo"<br /><br /><br /><br /><h1><center>DELETED SUCCESSFULLY</center></h1>";
}
else
echo"DELETION FAILED.";
$connect->close();
?>
<center><a href="home.php"><button class="button">HOME</button></a></center>
</body>
</html>