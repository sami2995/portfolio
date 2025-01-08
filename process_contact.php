<?php
// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Validate inputs
if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required.";
    exit();
}

// Sanitize inputs
$name = htmlspecialchars(trim($name), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($message), ENT_QUOTES, 'UTF-8');

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
    exit();
}

// Email details
$to = "harydavido302@gmail.com"; 
$subject = "New Contact Form Message";
$headers = "From: $email\r\nReply-To: $email\r\n";
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

// Send email securely
if (mail($to, $subject, $body, $headers)) {
    
    echo "<p>Thank you for reaching out! I will get back to you soon.</p>";
} else {
    echo "Failed to send message.";
}
?>

