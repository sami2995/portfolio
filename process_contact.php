<?php
// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Validate inputs
if (empty($name) || empty($email) || empty($message)) {
    die("All fields are required.");
}

// Sanitize inputs
$name = htmlspecialchars(trim($name), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($message), ENT_QUOTES, 'UTF-8');

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

// Email details
$to = "harydavido302@gmail.com"; // Replace with your email address
$subject = "New Contact Form Message";
$headers = "From: $email\r\nReply-To: $email\r\n";
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

// Send email securely
if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
    header("Location: thank_you.html"); // Redirect to a thank-you page
    exit();
} else {
    echo "Failed to send message.";
}
?>
