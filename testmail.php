<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 2;                                
    $mail->isSMTP();                                     
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nicole.nyakomitta@strathmore.edu';   
    $mail->Password   = 'sceb citz nfus tdfp';           
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('nicole.nyakomitta@strathmore.edu', 'TaskApp');
    $mail->addAddress('elizabethnicole246@gmail.com');     

    // Content (changed to Welcome Email)
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to TaskApp!';
    $mail->Body    = '
        <h2>Welcome to TaskApp </h2>
        <p>Hi there,</p>
        <p>Thank you for signing up. We’re excited to have you onboard.</p>
        <p>You can now log in and start managing your tasks easily.</p>
        <br>
        <p>– The TaskApp Team</p>
    ';
    $mail->AltBody = 'Welcome to TaskApp! Thank you for signing up.';

    $mail->send();
    echo " Welcome email sent successfully!";
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
