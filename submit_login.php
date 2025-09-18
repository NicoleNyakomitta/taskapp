<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Normally you'd check DB credentials here
    echo "Welcome back, " . htmlspecialchars($username) . "!";
}
?>
