<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNT INFO</title>
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
<body style="background-color: #E3E4FA">
  <center>
  <h1 style="font-family: cursive;size: 5;">FORGOT  PASSWORD</h1> 
  (enter the below details to change your password)
<form name="pref" action="updacc1.php" method="POST">
    USERNAME           : <input type="text" name="name" value=""><br/><br/>

    EMAIL ID          :   <input type="text" name="email" value=""><br/><br/>

    LICENSE NUMBER :    <input type="text" name="license" value=""><br/><br/>

   <h1 style="font-family: cursive;size: 5;">NEW PASSWORD</h1></b>
    ENTER NEW PASSWORD:<input type="text" name="npass"><br/><br/>
    CONFIRM PASSWORD:<input type="text" name="cpass">
    <br/><br/>
  <center><input type="submit" class="button" name="submit" value="CHANGE PASSWORD"></center>
</form>
<center><a href="index.php"><button class="button">BACK</button></a></center>
</body>
</html>