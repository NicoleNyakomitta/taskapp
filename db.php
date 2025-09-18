<?php
$host = "localhost";
$dbname = "taskapp";
$user = "postgres";   // your postgres username
$pass = "yourpassword"; // your postgres password

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
