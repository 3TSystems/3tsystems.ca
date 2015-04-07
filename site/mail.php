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

$formcontent = "$message";

mail($mail_to, $mail_subject, $formcontent, $headers);
header('Location: thanks.html');
?>
