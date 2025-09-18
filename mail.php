<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';     // Change if not Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nicole.nyakomitta@strathmore.edu';  // Your email
    $mail->Password   = 'sceb citz nfus tdfp';   // Gmail app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('elizabethnicole246@gmail.com', 'Task App');
    $mail->addAddress($_POST['email'], $_POST['username']);

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to Task App!';
    $mail->Body    = "Hello <b>" . htmlspecialchars($_POST['username']) . "</b>,<br> 
                      Welcome to our Task App. We're glad to have you onboard!";
    $mail->AltBody = "Hello " . $_POST['username'] . ", Welcome to our Task App.";

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
