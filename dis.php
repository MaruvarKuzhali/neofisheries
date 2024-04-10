<?php
$xx=mysqli_connect('localhost','id13931576_neofisheries','VishnuPriya#123');
mysqli_select_db($xx,"id13931576_project");
$query_select="SELECT * FROM equip";
$result=mysqli_query($xx,$query_select);
?>
<body bgcolor="pink">
<font color="purple" size="5"><b><p align="center">FISHERMEN INFO</p></b></font>
<table border="5" bgcolor="lightblue" align="center">
<tr>
<th>S.no</th>
<th>name</th>
<th>gender</th>
<th>age</th>
<th>dateofbirth</th>
<th>address</th>
<th>income</th>
<th>fishingvessel</th>
<th>length</th>
<th>breadth</th>
<th>depth</th>
<th>grosston</th>
<th>fishingtype</th>
<th>place</th>
<th>bankname</th>
<th>accnum</th>
<th>sanctionamount</th>
<th>financialassistance</th>
<th>costofitem</th>
<th>loancontribution</th>
<th>subsidy</th>
<th>dealername</th>
<th>dealeraddress</th>
<th>vatnum</th>
<th>dated1</th>
<th>billnum</th>
<th>dated2</th>
<th>cost</th>
<th>fisheriescertificate</th>
<th>rationcard</th>
<th>passbook</th>
</tr>
<?php
$i=1;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>
<tr>
<td><?php echo $i;$i++;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['dateofbirth'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['income'];?></td>
<td><?php echo $row['fishingvessel'];?></td>
<td><?php echo $row['length'];?></td>
<td><?php echo $row['breadth'];?></td>
<td><?php echo $row['depth'];?></td>
<td><?php echo $row['grosston'];?></td>
<td><?php echo $row['fishingtype'];?></td>
<td><?php echo $row['place'];?></td>
<td><?php echo $row['bankname'];?></td>
<td><?php echo $row['accnum'];?></td>
<td><?php echo $row['sanctionamount'];?></td>
<td><?php echo $row['financialassistance'];?></td>
<td><?php echo $row['costofitem'];?></td>
<td><?php echo $row['loancontribution'];?></td>
<td><?php echo $row['subsidy'];?></td>
<td><?php echo $row['dealername'];?></td>
<td><?php echo $row['dealeraddress'];?></td>
<td><?php echo $row['vatnum'];?></td>
<td><?php echo $row['dated1'];?></td>
<td><?php echo $row['billnum'];?></td>
<td><?php echo $row['dated2'];?></td>
<td><?php echo $row['cost'];?></td>
<td><?php echo $row['fisheriescertificate'];?></td>
<td><?php echo $row['rationcard'];?></td>
<td><?php echo $row['passbook'];?></td>
</tr>
<?php
}
?>
</table>
</body>