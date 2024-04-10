<?php
$conn=new mysqli('localhost','id13931576_neofisheries','VishnuPriya#123');
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
mysqli_select_db($conn,"id13931576_project");
if($_SERVER["REQUEST_METHOD"]=="POST"){
$myusername = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$sql = "SELECT id from neo_fisheries WHERE Username='$myusername' and Password='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);
if($count == 1){
  //session_register("myusername");
  //$_SESSION['login_user'] = $myusername;

  header("location: ani.php");
}else{
  $error = "Your login Name or Password is invalid";
}
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>NEO FISHERIES</title>
</head>
<style>
body{
background-image:url("backgrd.jpg");
background-repeat:no-repeat;
background-size: 1550px 750px;
}
.button {
  background-color: #1567C9;
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
input[type=text],[type=password],select{
width:25%;
padding:15 px 25 px;
margin:8 px 0;
display:inline-block;
border :1 px solid #ccc;
border-radius:4px;
box-sizing:border-box;
</style>
<body>
 <center>
 <table name="login" border="0">
 <tr>
 <td>
 <img src="pp.jpg" heiht="50" width="100"></td>
 <td>
 <h1 style="font-family:cursive;"><font color="white" ><font size="10">NEO FISHERIES</h1></font></font>
 <p style="font-family:cursive;"> <font color="white"><font size="5">fishermen welfare organisation</font></p></font>
 </td>
 </tr>
 </table>
 <p style="font-family:cursive;size:500"><h1><b>LOGIN DETAILS</h1></b></p>
 <form name="index" method="POST" action="">
 <h3 style="font-family:cursive;color:white">USERNAME:</h3><input type="text"  name="username"  required="*"><br/><br/>
 <h3 style="font-family:cursive;color:white">PASSWORD:</h3><input type="password"  name="password"   required="*"><br/><br/>
 <input type="submit" value="LOGIN" class="button" name="submit"><br /><br /><br />
 <h2 style="color: red;">New User?</h2>
 <a href="account.php"><big>Create a NEO Account</big></a><br/><br/>
 <a href="updacc.php">FORGOT PASSWORD??</big></a>
 </center>
 </form>
 </body>
 </html>