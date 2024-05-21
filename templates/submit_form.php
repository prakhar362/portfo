<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = "prakharshri2005@gmail.com"; // Your email address
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html\r\n";

    // Compose email message
    $email_message = "
    <html>
    <head>
      <title>Contact Form Submission</title>
    </head>
    <body>
      <h2>Contact Form Submission</h2>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Subject:</strong> $subject</p>
      <p><strong>Message:</strong> $message</p>
    </body>
    </html>
    ";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message. Please try again.";
    }
} else {
    // Redirect back to contact page if accessed directly
    header("Location: contact.html");
    exit;
}
?>
