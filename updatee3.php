<HTML>
<HEAD>
<TITLE>Delete
</TITLE>
</HEAD>
<?php
$C=$_POST["ro"];
$name = $_POST["name"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);

mysqli_select_db($conn,'id13931576_project');
$delete="UPDATE scholar set name = '$name' where nomineename='$C'";

if(mysqli_query($conn,$delete))

echo" record updated successfully";

else

echo "not updated";

mysqli_close($conn);
?>
<form name="del" method="POST" action="formm2.php">
<input type="submit" value="home" name="value">
</form>
</html>
