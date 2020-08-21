<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$subject=$_POST['subject'];
			$email=$_POST['email'];
			$msg=$_POST['message'];

			$to='contact@cruejameson.com';
			$subject='Form Submission';
			$message="Name: ".$name."\n"."Subject: ".$subject."\n"."Email: ".$email."\n"."Message:".$msg;
			$headers="From: ".$email;

			if(mail($to, $subject, $message, $headers)){
				echo "<h1>Message Sent! Thank you, I will contact you shortly!</h1>";
			}
			else{
				echo "Something Went Wrong!";
			}
		}	
?>

