<?php

function checkFields($values){
	$injection = false;
	for ($n=0;$n<count($values);$n++){
		if (eregi("%0A",$values[$n]) || eregi("%0D",$values[$n]) || eregi("\\r",$values[$n]) || eregi("\\n",$values[$n])){
			$injection = true;
		}
	}
	return $injection;
}

$from = $_POST['from'];
$email = $_POST['email'];
$result = checkFields(Array($from, $email));
if ($result==true){
	die("Header injection detected!");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "contact@cruejameson.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}

?>