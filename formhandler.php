<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@aloha.com';
$email_subject = 'New Email For Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Message: $message.";

$to = 'coopergd1@163.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contactus.html");

?>