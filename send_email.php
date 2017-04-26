<?php
$firstname = $_POST['firstname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

$to   = 'info@anderson-cosmetic.com';
$from = 'info@anderson-cosmetic.com';
$message = '<html><body>';
$message .='<p style="font-family: Arial,Helvetica Neue,Helvetica,sans-serif;font-size: 16px;font-style: normal;"><strong>User Information</strong></p>'; 
$message .= '<table style="width: 100%;font-family: Arial,Helvetica Neue,Helvetica,sans-serif;font-size: 14px;font-style: normal;" border="0" cellspacing="5" cellpadding="10">'; 
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Name</strong> </td><td>".$firstname."</td></tr>";
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Phone</strong> </td><td>".$phone."</td></tr>";
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Address</strong></td><td>".$address."</td></tr>"; 
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>City</strong></td><td>".$city."</td></tr>"; 
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>State</strong></td><td>".$state."</td></tr>"; 
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Zip</strong></td><td>".$zip."</td></tr>"; 

$message .= "</table>";
$message .= "</body></html>";
$subject = 'Contact Request From Varicose Vein Centers';
//$from1='metataggsolutions@gmail.com';
  $headers = "From: " .$from."\r\n";
  $headers .= "Reply-To: ".$from."\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$emailsend = mail($to, $subject, $message, $headers);
	if($emailsend){
	$success_msg='contactrequestsend';
	header("Location: index.html");    
	exit;
	}
?>