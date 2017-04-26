<?php
if(isset($_POST["Submit"]))
{
$firstname = $_POST['firstname'];
$cemail = $_POST['cemail'];
$phone = $_POST['phone'];
$comment = $_POST['message'];

$to   = 'laura.borsky@gmail.com';
$to1   = 'francieruppert97@gmail.com';
$from = $cemail;
$message = '<html><body>';
$message .='<p style="font-family: Arial,Helvetica Neue,Helvetica,sans-serif;font-size: 16px;font-style: normal;"><strong>User Information</strong></p>'; 
$message .= '<table style="width: 100%;font-family: Arial,Helvetica Neue,Helvetica,sans-serif;font-size: 14px;font-style: normal;" border="0" cellspacing="5" cellpadding="10">'; 
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Name</strong> </td><td>".$firstname."</td></tr>";
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Email</strong> </td><td>".$cemail."</td></tr>";
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Phone</strong> </td><td>".$phone."</td></tr>";
$message .= "<tr style='background-color:#F5F5F5;'><td><strong>Message</strong></td><td>".$comment."</td></tr>"; 


$message .= "</table>";
$message .= "</body></html>";
$subject = 'Contact Request From Safersit';
//$from1='metataggsolutions@gmail.com';
  $headers = "From: " .$from."\r\n";
  $headers .= "Reply-To: ".$from."\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  mail($to1, $subject, $message, $headers);    
  $emailsend = mail($to, $subject, $message, $headers);
  
  	if($emailsend)
	{
		$msg_err = 1;
	}
	else
	{
	  $msg_err = 'Message Not Send';
	}}echo $msg_err;?>