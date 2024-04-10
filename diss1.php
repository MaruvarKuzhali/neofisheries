<!DOCTYPE html>
<html>
<head>
	<title>Summary</title>
</head>
<style>
	div {
  width: 500px;
  border: 3px solid green;
  padding: 25px;
  margin: 25px;
}
</style>
<body style="background-color: #98FF98;">
	<img src="sch.gif" align="right">
	<h1><u>SUMMARY OF YOUR SCHOLARSHIP FORM</u></h1>
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

$query_select="SELECT * from scholarship where Name='$name' && Dob='$dob' && Aadhar='$aa'";
$result=mysqli_query($connect,$query_select);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?><div>
	<?php
	echo" NAME        : ".$row['Name']."<br>"."<br>";
	echo" FATHER NAME : ".$row['Father']."<br>"."<br>";
	echo" MOTHER NAME : ".$row['Mother']."<br>"."<br>";
	echo" AGE         : ".$row['Age']."<br>"."<br>";
	echo" AADHAR      : ".$row['Aadhar']."<br>"."<br>";
	echo" ADDRESS     : ".$row['Address']."<br>"."<br>";
	echo" COURSE      : ".$row['Course']."<br>"."<br>";
	echo" INSTITUTION : ".$row['Org']."<br>"."<br>";
	echo" AADHAR      : ".$row['Aadhar']."<br>"."<br>";
	echo" PREFERENCE  : ".$row['Prefer']."<br>"."<br>";
	?></div><?php
}
?>
</body>
</html>