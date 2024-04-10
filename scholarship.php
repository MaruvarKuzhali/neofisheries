<html>
<head>
<title>Scholarship Application Form</title>
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
body{
background-image:url("img.jpg");
background-repeat:no-repeat;
background-size:1800px 2400px;
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
  var x = document.forms["scholarship"]["firstname"].value;
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
<h3 style="color:red;">Eligibilty Criteria</h3>
<p><font size="4">
<img src="logo.jpg" height="25" width="25">The scholarship is applicable for studies from class 11th to Postgraduate level (including ITI/Polytechnic diploma courses).<br />
<br />
<img src="logo.jpg" height="25" width="25">The applicant should have scored at least 40% marks in the previous qualifying examination.<br />
<br />
<img src="logo.jpg" height="25" width="25">The students, who are pursuing a part-time course or are in receipt of any other scholarship are not eligible to apply.<br />
<br />
</font>
</p>
<h3 style="color:red;">Scholarship Application Form</h3>
<p>
<div>
<form name="scholarship" method="POST" action="update1.php" onsubmit="return validateForm()">
<h3 style="color:blue;">Personal Details</h3>
<hr />
Applicant's Name:<input type="text" name="firstname">   &nbsp<input type="text" name="sur" placeholder="surname"><br /><br />
Gender:<input type="radio" name="gen" value="m">MALE <input type="radio" name="gen" value="f">FEMALE <input type="radio" name="gen" value="o">OTHERS<br /><br />
Age:<input type="text" name="age" value=" " maxlength="3" size="3"> &nbsp &nbsp &nbspD.O.B: &nbsp &nbsp<input type="date" name="date"> &nbsp<br /><br />
Applicant's Father Name:<input type="text" name="fathername" value=" "> &nbsp &nbsp &nbsp &nbsp &nbsp &nbspApplicant's Mother Name:<input type="text" name="mothername" value=" "><br /><br />
Permanent Address:<br /><textarea rows="4" cols="30" name="address"></textarea> &nbsp &nbsp &nbsp &nbsp &nbsp &nbspZipcode:<input type="text" name="code" value=" " size="8"><br /><br />
District:<select name="district"> <option value="np" name="district">Nagapattinam</option>
<option value="Cuddalore" name="district">Cuddalore</option>
<option value="Chennai" name="district">Chennai</option>
<option value="Rameswaram" name="district">Rameswaram</option>
<option value="Kaniyakumari" name="district">Kaniyakumari</option>
<option value="Thoothukudi" name="district">Thoothukudi</option>
<option value="Virudhunagar" name="district">Virudhunagar</option>
<option value="Thirunelveli" name="district">Thirunelveli</option>
<option value="other_state" name="district">Other states</option></select>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbspState:<select name="state">
 	<option value="tn">TamilNadu</option><option value="kar">Karnataka</option>
 	<option value="Karnataka">Kerala</option>
 	<option value="Andhara">Andhara Pradesh</option>
 	<option value="Maharashtra">Maharashtra</option>
 	<option value="Other">Other state</option>
 </select><br /><br />
Fishing Village(Father): &nbsp<input type="radio" name="fv" value="in">INLAND &nbsp<input type="radio" name="fv" value="mar">MARINE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Fishing Village(Mother): &nbsp<input type="radio" name="mv" value="in">INLAND &nbsp<input type="radio" name="mv" value="mar">MARINE<br /><br />
Fishermen Register Number(Father):<input type="text" name="frnf" value=" "> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspFishermen Register Number(Mother):<input type="text" name="frnm" value=" "><br /><br />
The duration of Curriculum:<select name="dur">
	<option value="4">4 years</option>
	<option value="3">3 years</option>
	<option value="2">2 years</option>
	<option value="part_time">Part Time</option>
	<option value="o">Other</option>
</select><br /><br />
<table name="academic" border="1" bgcolor="white">
<tr>
<td>Course</td>
<td>Name of the Organization</td>
<td>The class which was admitted this year</td>
<td>GPA</td>
</tr>
<tr>
<td height="50" width="250"><center><input type="text" name="cou" value=" "></center></td>
<td width="300"><center><input type="text" name="org" value=" " size="25"></center></td>
<td><center><select name="yr">
	<option value="1">1st year</option>
	<option value="2">2nd year</option>
	<option value="3">3rd year</option>
	<option value="4">4th year</option>
	<option value="na">Not Applicable</option>
	<option value="other">Others</option>
</select>
</center></td>
<td width="100"><input type="text" name="gpa" value=" " size="4"></td>
</tr>
</table>
<br/><br />
Prefernce of Application:<br /><br /><input type="checkbox" name="pre[]" value="Government">Government Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Organizational">Organizational Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Foreign_funded">Foreign funded Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Private">Private Scholarship<br /><br />
<input type="checkbox" name="pre[]" value="Institutional">Institutional Scholarship<br /><br />
Expertised in:<br><br><input type="checkbox" name="exp[]" value="Academics">Academics<br><br>
<input type="checkbox" name="exp[]" value="Sports">Sports<br><br>
<input type="checkbox" name="exp[]" value="Technology">Technology<br><br>
<input type="checkbox" name="exp[]" value="others">Others<br><br>
Aadhar Number:<input type="text" name="aad" value=" "><br /><br />
Bank:<select name="bank">
	<option value="iob" name="bank">Indian Overseas Bank</option>
	<option value="Indian" name="bank">Indian Bank</option>
	<option value="sbi" name="bank">State Bank of India</option>
	<option value="Canara" name="bank">Canara Bank</option>
	<option value="Axis" name="bank">Axis Bank</option>
	<option value="other_bank" name="bank">Other Bank</option>
</select> &nbsp &nbsp &nbsp &nbsp &nbsp &nbspBranch:<input type="text" name="branch" value=" "> &nbsp &nbsp &nbsp &nbsp &nbsp &nbspIFSC Code:<input type="text" name="ifsc" value=" "><br /><br />
<hr />
<h3 style="color:blue;">Documents Required</h3>
<hr />
1.Upload photo:<input type="file" name="foto" accept="jpeg"><br /><br />
2.Upload fisheries Documents:<input type="file" name="cer" accept="pdf"><br /><br />
3.The first page of bank passbook:<input type="file" name="pass" accept="pdf"><br /><br />
<hr />
<h3 style="color:blue;">Declaration</h3>
<hr />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspI hereby declare that the above said details are true to the best of my knowledge and my belief.<br />If there is any faulty or
fake information in it,I (the applicant)takes the responsiblity of it.The certificate I uploaded are government certified.<br /><br />
<input type="checkbox" name="red[]" value="read">I read the terms and conditions of the scholarship application.<br /><br />
<input type="checkbox" name="news[]" value="want_notification">I want to receive notifications of my application status.<br /><br />
<center><input type="radio" name="dec">I accept<br /><br />
<input type="submit" class="button" name="submit" value="SUBMIT"> &nbsp &nbsp &nbsp<input type="reset" onmouseover="return hovercontent()" class="button" name="reset" value="RESET"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</form>
<form action="home.php"><input type="submit" name="submit" class="button" value="CANCEL"></form><form action="schdis.php"><input type="submit" name="submit" value="VIEW SUMMARY" class="button"></form>
</div>
</p>
</body>
</html>

