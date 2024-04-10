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

$query_select="select * from scholar";
$result=mysqli_query($connect,$query_select);
?>
UPDATING NAME BY NOMINEE NAME
<form name="update" method="POST" action="updatee2.php">
<select name="address">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['nomineename'];?></option>
<?php
}
?>
</select>
<input type="submit"  name="update" value="UPDATE">
</form>
</body>
</html>
