<?php include "main.js"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "aasathraj2001@gmail.com"; // Your email
    $subject = "New Contact Form Submission";
    $message = "You have received a new message:\n\n";
    
    foreach ($_POST as $key => $value) {
        $message .= "$key: $value\n";
    }

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>