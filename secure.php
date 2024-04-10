<html>
	<head>
		<title>SECURE ME</title>
	</head>
	<body>
		<?php
$servername="localhost";
	$username="id13931576_neofisheries";
	$password="VishnuPriya#123";
	$conn=new mysqli($servername,$username,$password);
	if($conn->connect_error)
	{
		die("connection falied:".$conn->connect_error);
	}
	echo"Uploaded successfully";
	mysqli_select_db($conn,'id13931576_project'); 

// create query 
$query = "SELECT * FROM neo_fisheries"; 

// execute query 
 { 

$to       = 'muanvide3@gmail.com';
$subject  = 'warranty licensed expired';
$message  = 'The Following Your Product Expired
          Product Code:.$row[Name]';
$headers  =  'From: miloe@gmail.com' . "\r\n" .
             'Reply-To: miloe@gmail.com' . "\r\n" .
             'MIME-Version: 1.0' . "\r\n" .
             'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
} 
ini_set("SMTP","muanvide3.gmail.com");
ini_set("smtp_port","587");
ini_set('sendmail_from', 'muanvide3@gmail.com');     
if(mail($to, $subject, $message, $headers))
echo "Email sent";
else
echo "Email sending failed";

?>
	</body>
</html>