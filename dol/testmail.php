<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 2;                                // Debug output (set to 0 once it works)
    $mail->isSMTP();                                     // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                // Gmail SMTP server
    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
    $mail->Username   = 'nicole.nyakomitta@strathmore.edu';           // Your Gmail address
    $mail->Password   = 'sceb citz nfus tdfp';             // Your Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Encryption
    $mail->Port       = 587;                             // Port for TLS

    // Recipients
    $mail->setFrom('nicole.nyakomitta@strathmore.edu', 'Task App Test');
    $mail->addAddress('elizabethnicole246@gmail.com');            // Send to yourself first

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'PHPMailer Test';
    $mail->Body    = '<h2>Hello!</h2><p>This is a <b>test email</b> from PHPMailer setup.</p>';
    $mail->AltBody = 'Hello! This is a test email from PHPMailer setup.';

    $mail->send();
    echo "✅ Test email sent successfully!";
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
