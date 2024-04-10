<!DOCTYPE html>
<html>
<head>
	 <title>NEO ACCOUNT DETAILS</title>
</head>
<style>
body{
background-image:url("acc.jpg");
background-repeat:no-repeat;
background-size:1600px 900px;
}
</style>
<body >
	<?php
	$a=$_POST["cust_fname"];
	$k=$_POST["age"];
	$l=$_POST["dob"];
	$m=$_POST["gender"];
	$n=$_POST["category"];
	$o=$_POST["state"];
	$p=$_POST["district"];
	$exp=implode(",",$_POST['exp']);
	$b=$_POST["license"];
	$q=$_POST["valid"];
	$c=$_POST["reg"];
	$r=$_POST["reg1"];
	$wat=implode(",",$_POST['water']);
	$d=$_POST["email"];
	$e=$_POST["cnum"];
	$f=$_POST["address"];
	$g=$_POST["hcnum"];
	$h=$_POST["username"];
	$i=$_POST["password"];
	$j=$_POST["cpassword"];
	$servername="localhost";
	$username="id13931576_neofisheries";
	$password="VishnuPriya#123";
	$conn=new mysqli($servername,$username,$password);
	if($conn->connect_error)
	{
		die("connection failed:".$conn->connect_error);
	}
	echo"<center><h1>Thank you.</h1></center>";
	mysqli_select_db($conn,'id13931576_project');
	if($i==$j)
	{
	    $sql="INSERT INTO neo_fisheries( Name,age,dob,gender,category,state,district,exp,License,valid,Reg,reg_at,pr_exp,email,Contact,Address,Hcontact,Username,Password,Cpassword) VALUES('$a','$k','$l','$m','$n','$o','$p','$exp','$b','$q','$c','$r','$wat','$d','$e','$f','$g','$h','$i','$j')";
    }
    else
    {

    	die("<center><h1>INCORRECT PASSWORD</h1></center>");
    }
	if($conn->query($sql)===TRUE)
		echo"<center><h1> Your NEO ACCOUNT has been created successfully</h1></center>";
	else
		echo"error!".$sql."<br>".$conn->error;
	$conn->close();
	?>
</body>
</html>



