<?php

$name = $_POST['full-name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$errors ='';

if (empty($name)||empty($visitor_email)|| empty($message)) {
    $errors .= "\n Error: all fields are required";
}

$email_from = 'contact@myholidayspaces.com';
$email_subject = "A new message from the a visitor";
$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message.";


$to = 'odukjr@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
