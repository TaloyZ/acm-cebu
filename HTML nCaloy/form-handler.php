<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$concern = $_POST['concern'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_concern = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $concern.\n".
              "User Message: $message.\n";

$to = 'caloyromera@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_concern,$email_body,$headers);

header("Location: contact.html");
?>