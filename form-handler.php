<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@universityofchemistry876.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
                 "User Email: $vistor_email.\n".
                    "Subject: $subject.\n".
                       "User Message: $message .\n";
    
$to = 'cw4354285@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $vistor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: contact.html");



?>