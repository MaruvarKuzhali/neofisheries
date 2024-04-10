<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Form-Submission</title>
</head>
<style>
	.button {
  background-color: #4CAF50;
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
<body >
	<center><img src="fish.gif"></center>
	<?php
	$a=$_POST["firstname"];
	$b=$_POST["sur"];
	$c=$_POST["age"];
	$d=$_POST["date"];
	$e=$_POST["fathername"];
	$f=$_POST["mothername"];
	$g=$_POST["address"];
	$h=$_POST["code"];
	$i=$_POST["district"];
	$j=$_POST["state"];
	$k=$_POST["fv"];
	if($k=='in')
		$fv="inland";
	else
		$fv="marine";
	$l=$_POST["mv"];
	if($l=='in')
		$mv="inland";
	else
		$mv="marine";
	$m=$_POST["frnf"];
	$n=$_POST["frnm"];
	$o=$_POST["dur"];
	$p=$_POST["cou"];
	$q=$_POST["org"];
	$r=$_POST["yr"];
	$s=$_POST["gpa"];
	$t=$_POST["aad"];
	$u=$_POST["bank"];
	$v=$_POST["branch"];
	$w=$_POST["ifsc"];
	$x=$_POST["foto"];
	$y=$_POST["cer"];
	$z=$_POST["pass"];
	$gen=$_POST["gen"];
	if($gen=='f')
		$ge='female';
	else if($gen=='m')
		$ge='male';
	else
		$ge='others';
	$pre=implode(",",$_POST['pre']);
	$int=implode(",",$_POST['exp']);
	$read=implode(",",$_POST['red']);
	$not=implode(",",$_POST['news']);
	$servername="localhost";
	$username="id13931576_neofisheries";
	$password="VishnuPriya#123";
	$conn=new mysqli($servername,$username,$password);
	mysqli_select_db($conn,'id13931576_project');
	if($conn->connect_error)
	{
		die("connection failed:".$conn->connect_error);
	}
	echo"Uploaded successfully";
	
	       $sql="INSERT INTO scholarship(Dob,Surname,Age,Name,Father,Mother,Address,Code,District,State,Fregnum,Mregnum,Dura,Course,Org,Class,Gpa,Aadhar,Bank,Branch,Ifsc,Photo,Doc,Pass,Accept,Gender,Fvillage,Mvillage,Prefer,Interest,Read_term,Notification) VALUES('$d','$b','$c','$a','$e','$f','$g','$h','$i','$j','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','Agreed','$ge','$fv','$mv','$pre','$int','$read','$not')";
	if($conn->query($sql)===TRUE)
		echo"Your data is being verified";

	else
		echo"error!".$sql."<br>".$conn->error;
	$conn->close();
    ?>
<a href="query1.php"><button class="button">KNOW MY POSITION</button></a>
</body>
</html>