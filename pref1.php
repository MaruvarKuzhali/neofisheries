<!DOCTYPE html>
<html>
<head>
	<title>changing preference</title>
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
<body style="background-color: #6CC417;">
<h1>OLD PREFERENCES</h1>
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
{?>
	<?php echo $row['Prefer']; ?>
	<?php }
mysqli_close($connect);
?>
<h1>NEW PREFERENCES</h1>
<form name="prefer" action="pref2.php" method="POST">
	<pre>
Prefernce of Application:<br /><br /><input type="checkbox" name="pre[]" value="Government">Government Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Organizational">Organizational Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Foreign_funded">Foreign funded Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Private">Private Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Institutional">Institutional Scholarship<br /><br />
Aadhar Number           :   <input type="text" name="aa" value="<?php echo$aa ?>">
	</pre>
	<center><input type="submit" class="button" name="submit" value="CONFIRM"></center>
</form>
<br />
<center><a href="home.php"><button class="button">CANCEL</button></a></center>
</body>
</html>