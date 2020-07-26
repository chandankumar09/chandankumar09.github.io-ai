<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_from ='chandankumar331062@gmail.com';
$email_subject = "new form submission";
$email_body = "user name: $name.\n".
                "user Email: $visitor_email.\n".
                "user Message: $message.\n";
$to = "chandankumar1822001@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?> 