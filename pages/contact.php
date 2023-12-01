<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare the email message
    $to = "your_email@example.com"; // Replace this with your email address
    $subject = "Contact Form Submission";
    $message_body = "Full Name: " . $full_name . "\n"
        . "Email: " . $email . "\n"
        . "Message: " . $message;

    // Send the email
    $headers = "From: " . $email . "\r\n";
    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>