<html>
<head>
<title>appform insurance</title>
<style >
	.ram
	{
	     background-image: url("as.jpg");
	     background-size: 2000px 2000px;
	     background-repeat: no-repeat;
		 
	}
	h1.a
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
<td><a href="https://twitter.com/FisheriesNeo"><img src="tweet.png" height="60" width="60"></a></td>
</table>
</td>
</tr>
</table>
	<center><p><b><font face="Comic Sans MS" color="blue"><h1 class="a">APPLICATION FOR GENERAL INSURANCE FOR ACTIVE FISHERMAN</h1></font></b></p></center><br/><br/>
	<form name="page 1" action="pagee2.php" method="POST">
<font face="Comic Sans MS" color="violet"><b><h3>1.NAME OF THE APPLICANT:</h3></b></font>
<input type="text" name="name" placeholder="enter name" required><br/>
<font face="Comic Sans MS" color="violet"><b><h3>2.COMPLETE ADDRESS:</h3></b></font><br/>
<textarea rows="5" cols="50" name="address" placeholder="enter address"></textarea><br/>
<font face="Comic Sans MS" color="violet"><b><h3>3.AGE:</h3></b></font>
<input type="text" name="age" placeholder="enter age" required><br/>
<font face="Comic Sans MS" color="violet"><b><h3>4.NAME OF FISHING VESSEL ON WHICH PRESENTLY WORKING:</h3></b></font>
<input type="text" name="namef" placeholder="enter name" required><br/>
<font face="Comic Sans MS" color="violet"><b><h3>5.NAME OF THE NOMINEE:</h3></b></font>
<input type="text" name="namen" placeholder="enter name" required><br/>
<font face="Comic Sans MS" color="violet"><b><h3>6.AGE OF THE NOMINEE:</h3></b></font>
<input type="text" name="agen" placeholder="enter age" required><br/>
<font face="Comic Sans MS" color="violet"><b>7.REASON FOR DEATH:</b></font>
<select name="ins">
	<option value="health issues">Health issues</option>
	<option value="accident">Accident</option>
	<option value="suicide">Suicide</option>
</select><br/><br/>
<input type="checkbox" name="ch[]" value="Bachelor"><font face="Comic Sans MS" color="violet"><b>Bachelor</b></font></input>
<input type="checkbox" name="ch[]" value="Married"><font face="Comic Sans MS" color="violet"><b>>Married</b></font></input><br/>
<input type="checkbox" name="ch[]" value="1 child"><font face="Comic Sans MS" color="violet"><b>1 child</b></font></input>
<input type="checkbox" name="ch[]" value="2 child"><font face="Comic Sans MS" color="violet"><b>2 child</b></font></input>
<input type="checkbox" name="ch[]" value="3 child"><font face="Comic Sans MS" color="violet"><b>3 child</b></font></input>
<input type="checkbox" name="ch[]" value="more"><font face="Comic Sans MS" color="violet"><b>more than that</b></font></input><br/><br/>
<pre><font face="Comic Sans MS" color="violet"><b><h3>8.RELATIONSHIP OF NOMINEE:
                                              (with applicant)</h3></b></font></pre>
<input type="text" name="namer" placeholder="enter" required><br/>
<pre><font face="Comic Sans MS" color="violet"><b><h3>9.WHETHER MEMBER OF FISHERIES CO-OPERATIVE
                                              SOCIETY OR WELFARE ORGANISATION,IF SO 
                                              PLEASE FURNISH THE NAME OF SOCITY:</h3></b></font></pre>
<input type="radio" name="yesorno" value="yes">yes</input>
<input type="radio" name="yesorno" value="no">no</input><br/>
<font face="Comic Sans MS" color="violet"><b>if yes:</b></font>
<input type="text" name="namey" placeholder="enter"><br/>

<pre><font face="Comic Sans MS" color="violet"><b><h3>10.WHETHER APPLICANT POSSES ANY NET 
                                                     IN HIS OWN NAME:</h3></b></font></pre>
<input type="radio" name="yesno" value="yes" required>yes</input>
<input type="radio" name="yesno" value="no" required>no</input><br/>
<font face="Comic Sans MS" color="violet"><b>if yes, type of net:</b></font>
<input type="text" name="namez" placeholder="enter"><br/>
<font face="Comic Sans MS" color="violet"><b>registration number of net:</b></font>
<input type="text" name="reg" placeholder="enter" required><br/>
<font face="Comic Sans MS" color="violet"><b><h3>11.DOCUMENTS REQUIRED:</h3></b></font><br/>
<b><span style="color: red">(i)fisheries certificate:</span></b>
<input type="file" name="fish" accept="pdf" required><br/>
 <b> <span style="color: red">(ii)nominee's birth certificate:</span></b>
<input type="file" name="birth" accept="pdf" required><br/>
 <b><span style="color: red"> (iii)nominee's photo:</span></b>
<input type="file" name="photo" accept="pdf" required><br/>
<center><font face="Comic Sans MS" color="violet"><b><h3>DECLARATION</h3></b></font></center>
<center>
<input type="submit" class="button" name="submit" value="SUBMIT"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="reset" class="button" value="RESET" name="reset"></center>
</form>
<form name="page 1" action="deletee1.php" method="POST">
<center><input type="submit" class="button" value="DELETE" name="display"></center>
</form>
<form name="page 1" action="updatee1.php" method="POST">
<center><input type="submit" class="button" value="UPDATE" name="display"></center>
</form>
</body>
</html>



