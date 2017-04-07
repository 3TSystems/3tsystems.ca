<?php
$mail_to = "info@3tsystems.ca";
$mail_subject = "News Subscription Request";

$email = $_POST['email'];

// compose headers
$headers = "From: 3T Systems <no-reply@3tsystems.ca>\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

$formcontent = "E-mail:\r\n$email\r\n\r\n";
// make sure each line doesn't exceed 70 characters
$formcontent = wordwrap($formcontent, 70);

if($email != "")
{
  mail($mail_to, $mail_subject, $formcontent, $headers);
}

header('Location: thanks.html');
?>
