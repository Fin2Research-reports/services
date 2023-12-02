<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "ashish.sanwariya5@gmail.com";
    $subject = "New Contact Us Form Submission";
    $headers = "From: $email";
    
    // Email body
    $messageBody = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

    // Send email
    $mailSuccess = mail($to, $subject, $messageBody, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>