<!DOCTYPE html>
<html>
<head>
	<title>preference</title>
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
	<h1>CHANGING SCHOLARSHIP PREFERENCES</h1> 
<form name="pref" action="pref1.php" method="POST">
	<pre>
		NAME            : <input type="text" name="name" value="">

		D.O.B           : <input type="date" name="dob" value="">

		AADHAR NUMBER   : <input type="text" name="aadhar" value="">
	</pre>
	<center><input type="submit" class="button" name="submit" value="CHANGE PREFERENCE"></center>
</form>
<center><a href="home.php"><button class="button">HOME</button></a></center>
</body>
</html>