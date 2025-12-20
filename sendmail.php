<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "bhavik.shrm@gmail.com";   // 👈 apna email
$subject = "New Contact Form Message";

$body = "Name: $name\nEmail: $email\nMessage:\n$message";
$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "Message sent successfully";
} else {
    echo "Message sending failed";
}
?>

