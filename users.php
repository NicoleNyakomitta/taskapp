<?php
require 'db.php';

$sql = "SELECT username, email FROM users ORDER BY username ASC";
$stmt = $pdo->query($sql);

echo "<h2>Registered Users</h2><ol>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<li>" . htmlspecialchars($row['username']) . " (" . htmlspecialchars($row['email']) . ")</li>";
}
echo "</ol>";
?>
