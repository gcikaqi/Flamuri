<?php
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "INFO@FLAMURI.NET";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Faleminderit, do te mundohemi te pergjigjemi sa me shpejt." . " -" . "<a href='../kontakti/index.html' style='text-decoration:none;color:red;'> Return Home</a>";
?>
