<?php

$to = "binakunadiya@gmail.com";

$name = $_REQUEST['nm'];

$email = $_REQUEST['e'];

$sub = $_REQUEST['s'];

$query = $_REQUEST['m'];

$subject = "$sub from: $name";

function is_valid_email($email) {

  return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);

}



if (!is_valid_email($email)) {

  echo 'No Spams Allowed';

  exit;

}
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset iso-8895-1' . "\r\n";
$headers .= "Reply-To: $name <$email>\r\n"; 
/*$headers = "Return-Path: $name <$email>\r\n"; 
$headers = "From: $name <$email>\r\n"; */

$body = "<html><head><title>Subject: $sub</title></head><body style='background-color:#c2c2c2;color:#000;'><table width='600px' align='center' style='border-radius:2px;'><thead><tr><th style='color:#fff;background-color:#000;padding:10px;font-size:18px;margin:0 auto;'>$sub</th></tr></thead><tr><td style='font-size:16px;color:#fff;'> From: $name</td></tr><tr><td style='font-size:14px;color:#fff;text-decoration:none;'>Email-ID:$email</td><tr><td style='font-size:14px;color:#fff;'>Query:$query</td></tr></table></body></html>";

	$sent = mail($to, $subject, $body,$headers) ;

if($sent){
        
        echo "Thank you for contact us. As early as possible  we will contact you ";	
	

	}

else{

		echo "failed ";	

}

?>