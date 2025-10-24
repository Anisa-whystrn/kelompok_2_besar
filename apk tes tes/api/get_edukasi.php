<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$host = 'localhost';
$db   = 'growtogether';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->query("SELECT * FROM edukasi");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($data);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Gagal mengambil data']);
}
?>