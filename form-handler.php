<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'nifftystrat19@gmail.com'

$email_subject = 'New Form'

$email_body = "User Name: $name.\n"
              "User Email: $visiter_email.\n"
              "Subject: $subject.\n"
              "User Message: $message.\n";


              $to = 'nifftystrat19@gmail.com';

              $headers = "From: $email_from \r\n";

              $headers .= "Reply-To: $visiter_email \r\n";


              mail($to,$email_subject,$email_body,$headers);

              header("Location: contact.html");



?>