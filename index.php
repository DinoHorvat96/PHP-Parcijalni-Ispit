<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\Database;

$db = Database::getInstance();
$conn = $db->getConnection();
$stmt = $conn->query("SELECT * FROM classicmodels");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);

?>