<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$visitor_message = $_POST['message'];
$email_from='youthsofmkd1@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n"."User Email: $visitor_email.\n"."User Message: $message.\n":
$to='ksonunigam2004@gmail.com';
$headers="From: $email_from\r\n";
$headers .="Reply-To: $visitor_email\r\n";

mail($to,$emaiil_subject ,$email_body,$headers);
header("Location: contact.html")
?>
