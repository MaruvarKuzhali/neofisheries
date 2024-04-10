<html>
<head><title>finass</title></head>
<body>

<?php
$DEL=$_POST["name"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$connect=mysqli_connect("localhost",$dbuser,$dbpass);  

mysqli_select_db($connect,'id13931576_project');

$query_select="SELECT * from scholar where name = '$DEL'";

$result=mysqli_query($connect,$query_select);
?>

<table border="5" align="center">
<tr>
	
	<th>NAME</th>
	<th>ADDRESS</th>
	<th>AGE</th>
	<th>FISHINGVESSEL</th>
	<th>NOMINEENAME</th>
	<th>NOMINEEAGE</th>
	<th>RELATIONSHIP</th>
	<th>YES OR NO</th>
	<th>IF YES</th>
	<th>WYES OR NO</th>
	<th>TYPE OF NET</th>
	<th>REGNO</th>
	<th>FISHERIES CERTIFICATE</th>
	<th>BIRTH CERTIFICATE</th>
	<th>PHOTO</th>
	<th>REASON FOR DEATH</th>
     <th>ABOUT</th>
</tr>

<?php
$row=mysqli_fetch_assoc($result);
?>

<tr>
        
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['age'];?></td>
	<td><?php echo $row['fishingvessel'];?></td>
	<td><?php echo $row['nomineename'];?></td>
	<td><?php echo $row['nomineeage'];?></td>
	<td><?php echo $row['relationship'];?></td>
	<td><?php echo $row['yesorno'];?></td>
	<td><?php echo $row['ifyes'];?></td>
	<td><?php echo $row['wyesorno'];?></td>
	<td><?php echo $row['typeofnet'];?></td>
	<td><?php echo $row['regno'];?></td>
	<td><?php echo $row['fisheriescertificate']?></td>
	<td><?php echo $row['birthcertificate'];?></td>
	<td><?php echo $row['photo'];?></td>
	<td><?php echo $row['reasonfordeath'];?></td>
	<td><?php echo $row['about'];?></td>
</tr>
</table>
<form name="del2" method="POST" action="deletee3.php">
<input type="text" name="ro" value="<?php echo $DEL;?>" hidden>
<br><br><br><br><input type="submit" name="confirm" value="CONFIRM">
</form>
<form name="del2_home" action="formm2.php">
<br><br><br><br><input type="submit" name="cancel" value="CANCEL">
</form>
</body>
</html>

