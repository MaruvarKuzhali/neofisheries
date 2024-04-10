<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['license'];
$d=$_POST['npass'];
$e=$_POST['cpass'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,"id13931576_project");
$update="UPDATE neo_fisheries SET Password='$d' Cpassword='$e' where License='$c' ";
if(mysqli_query($conn,$update))
  echo"YOUR PASSWORD HAS BEEN CHANGED";
else
  echo"YOUR PASSWORD CANNOT BE CHANGED";
$conn->close();
?>

</body>
</html>