<!DOCTYPE html>
<html>
<head>
    <title>VERIFICATION</title>
</head>
<body>
<?php
$user=$_POST['username'];
$pass=$_POST['password'];
$a=0;
$conn=new mysqli('localhost','id13931576_neofisheries','VishnuPriya#123');
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
mysqli_select_db($conn,"id13931576_project");
$sql="SELECT * FROM neo_fisheries";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
    if($row['Username']===$user && $row['Password']===$pass)
    {
        ?>
        <a href="home.php">HOME</a>
        <?php
$a=1;
break;
    }
    else if($row['Username']===$user && $row['Password']!=$pass)
    {
        ?>
        <p >INCORRECT PIN</p>
        <a href="index.php">retry</a>
        <?php
        $a=1;
        break;
    }
    else
    {
        ?>
        <p>Invalid Username and Password</p>
        <a href="index.php">retry</a>
        <?php
        $a=1;
        break;
    }
}
?>
</body>
</html>