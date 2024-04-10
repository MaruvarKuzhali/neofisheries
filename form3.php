<html>
<head>
<title>Subsidy assistance</title>
<style >
	body{
background-image:url("img4.jpg");
background-repeat:no-repeat;
background-size:2500px 2800px;
}
div {
  width: 900px;
  border: 3px solid green;
  padding: 25px;
  margin: 25px;
}
</style>
<script>
	function hovercontent() {
		alert("All the entered field will be deleted");
	}
	function validateForm() {
  var x = document.forms["form3"]["a"].value;
  if (x == "") {
    alert("Must enter your Name");
    return false;
  }
}


</script>
<body>
<table name="title" border="0">
<tr>
<td>
<img src="neo.jpg" height="150" width="300"></td>
<td width="900">
<h1><font color="darkblue">NEO-FISHERIES</h1></font>
<p><font size="5">fishermen welfare organisation</p></font>
</td>
<td><marquee direction="down" behavior="alternate" scrollamount="2"><h2 style="color:green;">Toll-free Number<img src="hand.png" align="right" height="40" width="45"></marquee><h2>
<img src="logo.png" height="25" width="25" align="left"><p style="font-size:20;">1800-425-1660</p><h3><font color="darkpink">E-mail:</font>neofisheries@gmail.com</h3>
<table name="socialmedia" border="1">
<tr>
<td><a href="https://www.facebook.com/Neo-Fisheries-2387827567917070/?modal=admin_todo_tour"><img src="fb.png" height="30" width="30"></a></td>
<td><a href="https://twitter.com/FisheriesNeo"><img src="tweet.png" height="30" width="30"></a></td>
</table>
</td>
</tr>
</table>
<hr />

	<center><p><b><font face="Comic Sans MS" color="violet"><h1 class="a">APPLICATION FORM TO AVAIL SUBSIDY ASSISTANCE FOR PURCHASE OF EQUIPMENT FOR USE IN FISHING VESSELS</h1></font></b></p></center><br/><br/>
	<b><div><center><font face="Comic Sans MS" color="blue"><h2>PARTICULARS OF APPLICANT:</h2></font></b>
	<form name="form3" action="page3.php" method="POST" onsubmit="return validateForm()">
<font face="Comic Sans MS" color="brown"><b>NAME OF THE APPLICANT:</b></font>
<input type="text" name="a" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>GENDER:&nbsp &nbsp &nbsp &nbsp &nbsp</b></font>
<input type="radio" name="gen" value="male">MALE <input type="radio" name="gen" value="female">FEMALE <input type="radio" name="gen" value="others">OTHERS<br /><br />
<font face="Comic Sans MS" color="brown"><b>AGE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="b" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>DATE OF BIRTH &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="c" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>ADDRESS&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     </b></font><br/>
<textarea rows="5" cols="50" name="d" placeholder=""></textarea><br/><br/>
<font face="Comic Sans MS" color="brown"><b>ANNUAL INCOME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<select name="e">
<option value="Below_50,000">Below 50,000</option>
<option value="50,000-70,000">50,000-70,000</option>
<option value="70,000-80,000">70,000-80,000</option>
<option value="Above_1,00,000">Above 1,00,000</option>
</select><br/><br/>
<b><font face="Comic Sans MS" color="blue"><h2>PARTICULARS OF FISHING BOAT AND ENGINE:</h2></font></b>
<font face="Comic Sans MS" color="brown"><b>(A)NAME OF FISHING VESSEL:</b></font>
<input type="text" name="f" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>(B)MAJOR DIMENSION OF BOAT:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></font><br/><br/>
<font face="Comic Sans MS" color="brown"><b>(i)LENGTH&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="g" placeholder="" ><br/><br/>
<font face="Comic Sans MS" color="brown"><b>(ii)BREADTH&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="h" placeholder="" ><br/><br/>
<font face="Comic Sans MS" color="brown"><b>(iii)DEPTH&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="i" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>(iv)GROSS TON&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="j" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>(C)TYPE OF FISHING&nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="checkbox" name="k[]" value="inland">INLAND &nbsp<input type="checkbox" name="k[]" value="marine">MARINE<br/><br/>
<font face="Comic Sans MS" color="brown"><b>(D)PLACE OF OPERATION&nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="l" placeholder=""><br/><br/>
<b><font face="Comic Sans MS" color="blue"><h2>PARTICULARS OF FINANCIAL INSTITUTE:</h2></font></b>
<font face="Comic Sans MS" color="brown"><b>NAME OF THE BANK&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></font>
<select name="m">
<option value="Indian overseas bank">Indian overseas bank</option>
<option value="Indian bank">Indian bank</option>
<option value="Canara bank">Canara bank</option>
<option value="Axis bank">Axis bank</option>
<option value="State bank of India">State bank of India</option>
<option value="Karur vaysya bank">Karur vaysya bank</option></select><br/><br/>
<font face="Comic Sans MS" color="brown"><b>BANK ACCOUNT NUMBER&nbsp &nbsp &nbsp &nbsp &nbsp</b></font>
<input type="text" name="n" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>SANCTION LOAN ACCOUNT&nbsp &nbsp &nbsp </b></font>
<input type="text" name="o" placeholder=""><br/><br/>
<b><font face="Comic Sans MS" color="blue"><h2>PARTICULARS OF FINANCIAL ASSISTANCE:</h2></font></b>
<font face="Comic Sans MS" color="brown"><b>FINANCIAL ASSISTANCE&nbsp:</b></font>
<input type="checkbox" name="p[]" value="net">fishing net &nbsp<input type="checkbox" name="p[]" value="equipment">fishing equipment<br/><br/>
<font face="Comic Sans MS" color="brown"><b>COST OF ITEM IN Rs.&nbsp &nbsp &nbsp:</b></font>
<select name="q">
<option value="Below_50,000">Below 50,000</option>
<option value="50,000-70,000">50,000-70,000</option>
<option value="70,000-80,000">70,000-80,000</option>
<option value="Above_1,00,000">Above 1,00,000</option>
</select><br/><br/>
<font face="Comic Sans MS" color="brown"><b>LOAN/OWN CONTRIBUTION&nbsp &nbsp:</b></font>
<input type="radio" name="r" value="yes">YES <input type="radio" name="r" value="no">NO <input type="radio" name="r" value="partial">PARTIAL<br /><br />
<font face="Comic Sans MS" color="brown"><b>SUBSIDY IN Rs.50%&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="s" placeholder=""><br/><br/>
<b><font face="Comic Sans MS" color="blue"><h2>PARTICULARS OF INVOICES/BILLS:</h2></font></b>
<font face="Comic Sans MS" color="brown"><b>NAME OF THE DEALER&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="t" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>ADDRESS OF THE DEALER&nbsp &nbsp &nbsp &nbsp: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></font><br/>
<textarea rows="5" cols="50" name="u" placeholder=""></textarea><br/><br/>
<font face="Comic Sans MS" color="brown"><b>VAT/TIN NUMBER&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="v" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>DATED&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="w" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>INVOICE OR BILL NUMBER&nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="x" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>DATED&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b></font>
<input type="text" name="y" placeholder=""><br/><br/>
<font face="Comic Sans MS" color="brown"><b>COST AS PER PURCHASE BILL&nbsp &nbsp:</b></font>
<input type="text" name="z" placeholder=""><br/><br/>
<b><font face="Comic Sans MS" color="blue"><h2>DOCUMENTS REQUIRED:</h2></font></b>
<b> (i)fisheries certificate&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<input type="file" name="fish" accept="pdf"><br/><br/>
 <b> (ii)ration card&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<input type="file" name="ration" accept="pdf"><br/><br/>
 <b> (iii)first page of passbook&nbsp&nbsp &nbsp &nbsp &nbsp:</b>
<input type="file" name="passbook" accept="pdf"><br/><br/>
<center><font face="Comic Sans MS" color="brown"><b>DECLARATION</b></font></center>
<hr />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspI hereby declare that the above said details are true to the best of my knowledge and my belief.<br />If there is any faulty or
fake information in it,I (the applicant)takes the responsiblity of it.The certificate I uploaded are government certified.<br /><br />
<center><input type="radio" name="dec">I accept<br /><br />
<center>
<input type="submit" class="button" name="submit" value="SUBMIT"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="reset" onmouseover="return hovercontent()" class="button" value="RESET" name="reset">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="submit" class="button" onclick="home.php" value="CANCEL" name="cancel"></center> 
</div></form></center>
</body>
</html>











