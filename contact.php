<?php

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$visitor_email = $_POST['mail'];
	$message = $_POST['message'];

	$email_from = 'contact@cruejameson.com';

	$email_subject = "New Contact Form Submission";

	$email_body = "User Name: $name.\n".
									"User Email: $visitor_email.\n".
										"User Message: $message.\n";
	
	$to = "cruebeedooobie@gmail.com";
	
	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject,$email_body,$headers);

	header("Location: contact.html");
	
?>

