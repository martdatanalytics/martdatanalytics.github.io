<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'martdatanalytics@gmail.com';
	$email_subject = "Enquiry";
	$email_body = "User name: $name.\n".
					"User email: $email.\n".
						"User message: $message.\n";
						
	$to = "martdatanalytics@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-to: $visitor_email \r\n";
	mail($to, $email_from, $email_body, $headers);
	header("location: index.html");

?>

