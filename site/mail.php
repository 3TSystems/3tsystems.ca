<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail_to = "support@3tsystems.ca";
$mail_subject = "$subject";

// compose headers
$headers = "From: 3T Systems <website@3tsystems.ca>\r\n";
$headers .= "Reply-to: $name <$email>\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

$formcontent = "From:\r\n$name\r\n\r\n";
$formcontent .= "E-mail:\r\n$email\r\n\r\n";
$formcontent .= "Subect:\r\n$subject\r\n\r\n";
$formcontent .= "Message:\r\n$message";
// make sure each line doesn't exceed 70 characters
$formcontent = wordwrap($formcontent, 70);

mail($mail_to, $mail_subject, $formcontent, $headers);
header('Location: thanks.html');
?>
