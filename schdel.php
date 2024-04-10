<!DOCTYPE html>
<html>
<head>
	<title>DELETE-SCHOLARSHIP FORM</title>
</head>
<body>
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
<body style="background-color: #FFF8DC">
	<h1>Delete My Scholarship Form</h1> 
<form name="pref" action="schdel1.php" method="POST">
	<pre>
		NAME            : <input type="text" name="name" value="">

		D.O.B           : <input type="date" name="dob" value="">

		AADHAR NUMBER   : <input type="text" name="aadhar" value="">
	</pre>
	<center><input type="submit" class="button" name="submit" value="DELETE MY FORM"></center>
</form>
<center><a href="home.php"><button class="button">HOME</button></a></center>
</body>
</html>