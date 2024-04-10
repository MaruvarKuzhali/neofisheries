<html>
<head>
<title>appform finass</title>
<style >
	.ram
	{
	     background-image: url("ff.jpg");
	     background-size: 2000px 1300px;
	     background-repeat: no-repeat;
		
	}
	h1.b
	{
		text-shadow: 2px 2px;
	}
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
</head>
<body class="ram">
	<table name="title" border="0">
<tr>
<td>
<img src="logo.jpg" height="150" width="300"></td>
<td width="900">
<h1><font color="darkblue">NEO-FISHERIES</h1></font>
<p><font size="5">fishermen welfare organisation</p></font>
</td>
<td><marquee direction="down" scrollamount="2"><h2 style="color:green;">Toll-free Number<img src="hand.png" align="right" height="40" width="45"></marquee><h2>
<img src="call.png" height="25" width="25" align="left"><p style="font-size:20;">1800-425-1660</p><h3><font color="darkpink">E-mail:</font>neofisheries@gmail.com</h3>
<table name="socialmedia" border="1">
<tr>
<td><a href="https://www.facebook.com/Neo-Fisheries-2387827567917070/?modal=admin_todo_tour"><img src="fb.png" height="60" width="60"></a></td>
<td><a href="https://twitter.com/FisheriesNeo"><img src="tweet.PNG" height="60" width="60"></a></td>
</table>
</td>
</tr>
</table>
<center><p><b><font face="Curlz MT" color="blue"><h1 class="b">APPLICATION FOR FINANCIAL ASSISTANCE</h1></font></b></p></center><br/><br/>
<form name="page 1" action="page1.php" method="POST">
<font face="Comic Sans MS" color="#ffcc00;"><b>1.NAME OF THE APPLICANT:</b></font>
<input type="text" name="name" placeholder="enter name" required><br/><br/>

<font face="Comic Sans MS" color="#ffcc00;"><b>2.S/O(or)D/O(or)W/O:</b></font>
<input type="text" name="sdw" placeholder="enter"><br/><br/>

<font face="Comic Sans MS" color="#ffcc00;"><b>3.CATEGORY:</b></font>
<input type="radio" name="category" value="general" required>general</input>
<input type="radio" name="category" value="OBC" required>OBC</input>
<input type="radio" name="category" value="SC" required>SC</input>
<input type="radio" name="category" value="ST" required>ST<br/><br/>

<font face="Comic Sans MS" color="#ffcc00;"><b>4.COMPLETE ADDRESS:</b></font><br/>

<textarea rows="5" cols="50" name="address" placeholder="enter address" required></textarea><br/><br/>

<font face="Comic Sans MS" color="#ffcc00;"><b>5.FINANCIAL ASSISTANCE FOR:</b></font>
<select name="finass">
	<option value="a">Construction of new house</option>
	<option value="b">Construction of Fish market</option>
	<option value="c">Construction of community hall</option>
</select>

<pre><font face="Comic Sans MS" color="#ffcc00;"><b>6.COMPLETE DETAIL ABOUT 
       FOR WHAT YOU ARE GETTING 
       FINANCIAL ASSISTANCE:</b></font>
</pre>
<textarea rows="5" cols="50" name="detail" placeholder="enter"></textarea><br/><br/>

<font face="Comic Sans MS" color="#ffcc00;"><b>7.DOCUMENTS REQUIRED:</b></font><br/>
<b> (i)fisheries certificate:</b>
<input type="file" name="fish" accept="pdf" required><br/>
 <b> (ii)ration card:</b>
<input type="file" name="ration" accept="pdf" required><br/>
 <b> (iii)first page of passbook:</b>
<input type="file" name="passbook" accept="pdf" required><br/><br/>
<input type="checkbox" name="ch" value="Bachelor"><font face="Comic Sans MS" color="#ffcc00;"><b>Bachelor</b></font></input>
<input type="checkbox" name="ch" value="Married"><font face="Comic Sans MS" color="#ffcc00;"><b>Married</b></font></input><br/>
<input type="checkbox" name="ch" value="1 child"><font face="Comic Sans MS" color="#ffcc00;"><b>1 child</b></font></input>
<input type="checkbox" name="ch" value="2 child"><font face="Comic Sans MS" color="#ffcc00;"><b>2 child</b></font></input>
<input type="checkbox" name="ch" value="3 child"><font face="Comic Sans MS" color="#ffcc00;"><b>3 child</b></font></input>
<input type="checkbox" name="ch" value="more"><font face="Comic Sans MS" color="#ffcc00;"><b>more than that</b></font></input><br/><br/>
<center><font face="Comic Sans MS" color="#ffcc00;"><b>DECLARATION</b></font></center>
<center>
<input type="submit" class="button" name="submit" value="SUBMIT"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="reset" class="button" value="RESET" name="reset"></center>
</form>
</body>
</html>