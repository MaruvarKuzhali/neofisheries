<html>
<head><title>finass</title></head>
<body>

<?php
$a=new mysqli('localhost','id13931576_neofisheries','VishnuPriya#123'); 

mysqli_select_db($a,'id13931576_project');

$query_select="SELECT * from finass";
$result=mysqli_query($a,$query_select);
?>
<font color="purple" size="5"><b><p align="center">FINANCIAL ASSISTANCE</p></b></font>

<form name="display1" action="formm1.php">
<input type="submit" name="home" value="back">
</form>

<table border="5" align="center">
<tr>
	<th>S.NO</th>
	<th>NAME</th>
	<th>SON OF</th>
	<th>CATEGORY</th>
	<th>ADDRESS</th>
	<th>FINASS FOR</th>
	<th>DETAIL</th>
	<th>FISHERIES CERTIFICATE</th>
	<th>RATION CARD</th>
	<th>PASSBOOK</th>
	<th>STATUS</th>
</tr>

<?php
$i=1;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>

<tr>
        <td><?php echo $i; $i++; ?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Sonof'];?></td>
	<td><?php echo $row['Category'];?></td>
	<td><?php echo $row['Address'];?></td>
	<td><?php echo $row['Finassfor'];?></td>
	<td><?php echo $row['Detail'];?></td>
	<td><?php echo $row['Fisheriescertificate']?></td>
	<td><?php echo $row['Rationcard'];?></td>
	<td><?php echo $row['passbook'];?></td>
	<td><?php echo $row['status'];?></td>
</tr>
<?php }
 ?>
</table>
</body>
</html>

