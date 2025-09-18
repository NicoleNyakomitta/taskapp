<?php
$host = "localhost";
$dbname = "taskapp";
$user = "root";
$pass = "1234"; // your MariaDB root password

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "MariaDB connection successful!";
}

$conn->close();
?>
