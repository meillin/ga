<?php
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$message = $_POST['message'];
$formcontent="From: $name \n Company: $company \n Message: $message";
$recipient = "mike@modeling.green";
$subject = "Contact initiation request";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: contact-thank-you.php');
exit;
?>
