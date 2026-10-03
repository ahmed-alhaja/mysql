<?php
require_once dirname(__FILE__, 2) . '/config/connectionDatabase.php';
$userId = $_GET['id'] ?? null;
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $userId);
$stmt->execute();

$result = $stmt->get_result();
$currentSettings = $result->fetch_assoc();