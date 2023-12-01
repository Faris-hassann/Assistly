<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $date = $_POST["date"];

    // Prepare the email message
    $to = "felmola13@gmail.com"; // Replace this with your email address
    $subject = "Appointment Booking";
    $message = "Full Name: " . $full_name . "\n"
        . "Phone Number: " . $phone_number . "\n"
        . "Address: " . $address . "\n"
        . "Email: " . $email . "\n"
        . "Date: " . $date;

    // Send the email
    $headers = "From: " . $email . "\r\n";
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Thank you for booking the appointment. We will contact you shortly.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>