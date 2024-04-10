<html>
<head>
	<title>DISPLAY ACCOUNT DETAILS</title>
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
	body{
background-image:url("Ocean.jpg");
background-repeat:no-repeat;
background-size:1600px 3500px;
}
	input[type=text], select {
  width: 25%;
  padding: 12px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<body>
	<center>
	<h1 style="font-family: castellar;size: 5;"><b> SEE MY PROFILE </b></h1>
	
	<form name="display1" action="display.php" method="POST">
		ENTER YOUR USERNAME:<input type="text" name="uname" placeholder="USERNAME"><br />
		ENTER YOUR PASSWORD:<input type="text" name="pass" placeholder="PASSWORD"><br />
		<input type="submit" class="button" name="DISPLAY" value="DISPLAY">
	</form>
</center>
</body>
</html>