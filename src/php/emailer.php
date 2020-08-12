<?php 

if($_POST["submit"]) {
  $recipient="cruebeeedoobie@gmail.com";
  $subject="Contact Form Submission";
  $sender=$_POST["sender"];
  $senderEmail=$_POST["senderEmail"];
  $message=$POST["message"];

  $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

  mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

  $thankYou="<p>Thank you! Your message has been sent!</p>";
}

?>