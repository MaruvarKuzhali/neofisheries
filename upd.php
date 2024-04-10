<html>
<head>
	<title>UPDATE DATA</title>
</head>
<style>
	body{
background-image:url("updi2.jpg");
background-repeat:no-repeat;
background-size:1700px 900px;
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
	
	<form name="upd" action="upd1.php" method="POST">
		<font color="white" size="5">ENTER YOUR NEW USERNAME:</font><input type="text" name="user" placeholder="USERNAME"><br />
		<font color="white" size="5">ENTER YOUR NEW PASSWORD:</font><input type="text" name="password" placeholder="PASSWORD"><br />
		<input type="submit" name="UPDATE" value="UPDATE">
    </form>
</body>
</html>