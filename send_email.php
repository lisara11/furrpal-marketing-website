<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "dishenmalinga@gmail.com"; // Replace with your email
    $subject = "New Contact Form Message from FurrPal";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";

    // Send Email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.location.href='contact.html';</script>";
    }
}
?>
