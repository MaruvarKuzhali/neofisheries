<html>
<head>
	<title>SEE MY PROFILE</title>
</head>
<style>
		body{
background-image:url("disp.jpg");
background-repeat:no-repeat;
background-size:1600px 1500px;
}
</style>
<body>
<?php
$u=$_POST['uname'];
$p=$_POST['pass'];
$mysqlport=getenv('S2G_MYSQL_PORT');
echo $mysqlport;
$dbhost="localhost";
$dbuser='id13931576_neofisheries';
$dbpass='VishnuPriya#123';
$connect=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($connect,'id13931576_project');
$query_select="SELECT * FROM neo_fisheries where Username='$u' && Password='$p'";
$result=mysqli_query($connect,$query_select);
?>
<font color="white" size="5"><b><h1 style="font-family: castellar;"><p align="center">ACCOUNT DETAILS</p></h1></b></font>
<table border="5" align="center">
	<tr>
		<th>NAME</th>
		<th>AGE</th>
		<th>DOB</th> 
		<th>GENDER</th>
		<th>CATEGORY</th>
		<th>STATE</th>
		<th>DISTRICT</th>
		<th>EXPERIENCE</th>
		<th>LICENSE NO:</th>
		<th>VALID TILL</th>
		<th>REG_NO:</th>
		<th>REGISTERED AT</th>
		<th>PRIOR EXP</th>
		<th>DT FISHERY EMAIL</th>
		<th>DT FISHERY CONTACT</th>
		<th>HOME ADDRESS</th>
		<th>HOME CONTACT</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
</tr>
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>
<tr>
	 <td><b><?php echo $row['Name'];?></b></td>
	 <td><b><?php echo $row['age'];?></b></td>
	 <td><b><?php echo  $row['dob'];?></b></td>
	 <td><b><?php echo  $row['gender'];?></b></td>
	  <td><b><?php echo $row['category'];?></b></td>
	   <td><b><?php echo $row['state'];?></b></td>
	    <td><b><?php echo $row['district'];?></b></td>
	     <td><b><?php echo $row['exp'];?></b></td>
	      <td><b><?php echo $row['License'];?></b></td> 
	      <td><b><?php echo $row['valid'];?></b></td>
	      <td><b><?php echo $row['Reg'];?></b></td>
	      <td><b><?php echo $row['reg_at'];?></b></td>
	      <td><b><?php echo $row['pr_exp'];?></b></td>
	      <td><b><?php echo $row['email'];?></b></td>
	      <td><b><?php echo $row['Contact'];?></b></td>
	      <td><b><?php echo $row['Address'];?></b></td>
	      <td><b><?php echo $row['Hcontact'];?></b></td>
	      <td><b><?php echo $row['Username'];?></b></td>
	      <td><b><?php echo $row['Password'];?></b></td>
</tr>
<?php
} 
?>
</table><?php
mysqli_close($connect);
?>

