<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']); // You can hash before storing

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Here you could save the user to the database if required
    // Example: saveUser($username, $email, password_hash($password, PASSWORD_DEFAULT));

    // Send welcome email
    require 'mail.php';

    echo "Signup successful! A welcome email has been sent to " . htmlspecialchars($email);
}
?>
