<?php
require_once __DIR__ . '/vendor/autoload.php';
echo "Dino Horvat<br>";

use app\Database;

$db = Database::getInstance();
$conn = $db->getConnection();
$stmt = $conn->query("SELECT * FROM zanr");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);

?>