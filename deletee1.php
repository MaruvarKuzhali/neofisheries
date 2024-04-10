<html>
<head><title>DELETE</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id13931576_project');

$query_select="select name from scholar";
$result=mysqli_query($connect,$query_select);
?>
DELETING THE RECORDS BY NAME
<form name="delete" method="POST" action="deletee2.php">
<select name="name">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['name'];?></option>
<?php
}
?>
</select>
<input type="submit"  name="delete" value="DELETE">
</form>
</body>
</html>
