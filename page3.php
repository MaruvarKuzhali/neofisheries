<?php
$a=$_POST["a"];
$gen=$_POST["gen"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$e=$_POST["e"];
$f=$_POST["f"];
$g=$_POST["g"];
$h=$_POST["h"];
$i=$_POST["i"];
$j=$_POST["j"];
$k=implode(",",$_POST["k"]);
$l=$_POST["l"];
$m=$_POST["m"];
$n=$_POST["n"];
$o=$_POST["o"];
$p=implode(",",$_POST["p"]);
$q=$_POST["q"];
$r=$_POST["r"];
$s=$_POST["s"];
$t=$_POST["t"];
$u=$_POST["u"];
$v=$_POST["v"];
$w=$_POST["w"];
$x=$_POST["x"];
$y=$_POST["y"];
$z=$_POST["z"];
$aa=$_POST["fish"];
$bb=$_POST["ration"];
$cc=$_POST["passbook"];
$xx=mysqli_connect('localhost','id13931576_neofisheries','VishnuPriya#123');
mysqli_select_db($xx,"id13931576_project");
$yy="INSERT INTO equip(name,gender,age,dateofbirth,address,income,fishingvessel,length,breadth,depth,grosston,fishingtype,place,bankname,accnum,sanctionamount,financialassistance,costofitem,loancontribution,subsidy,dealername,dealeraddress,vatnum,dated1,billnum,dated2,cost,fisheriescertificate,rationcard,passbook)VALUES('$a','$gen','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$bb','$cc')";
if($xx->query($yy)===TRUE)
	echo"NEW RECORD CREATED SUCCESSFULLY";
else
	echo"RECORD NOT CREATED";
?>
<body bgcolor="pink">
<br><br>
<a href="dis1.php">
<button class="button">Display</button></a><br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="delete1.php">
	<button class="button">Delete</button></a><br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="up1.php">
		<button class="button">Update</button></a><br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="noofrows.php">
			<button class="button">Noofrows</button></a><br><br><br></center>
<center><img src="sa.gif"></center></body>