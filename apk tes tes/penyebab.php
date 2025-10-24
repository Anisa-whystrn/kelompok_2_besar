<?php
// Koneksi ke database
$host = 'localhost';
$db   = 'growtogether';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $stmt = $pdo->prepare("SELECT * FROM edukasi WHERE id = 'penyebab'");
    $stmt->execute();
    $item = $stmt->fetch();
    if (!$item) {
        die("Data penyebab stunting tidak ditemukan.");
    }
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($item['judul']) ?> - GrowTogether</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f1f5f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      padding-top: 20px;
    }
    .chat-container {
      width: 100%;
      max-width: 600px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .header {
      background: #ec4899;
      color: white;
      padding: 16px 20px;
      font-weight: 600;
      text-align: center;
    }
    .messages {
      padding: 20px;
      height: 400px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
    .message {
      max-width: 80%;
      padding: 12px 16px;
      border-radius: 18px;
      line-height: 1.5;
    }
    .bot {
      align-self: flex-start;
      background-color: #e2e8f0;
      border-bottom-left-radius: 4px;
    }
    .user {
      align-self: flex-end;
      background-color: #ec4899;
      color: white;
      border-bottom-right-radius: 4px;
    }
    .back {
      display: block;
      text-align: center;
      padding: 16px;
      color: #ec4899;
      text-decoration: none;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="chat-container">
    <div class="header">💬 <?= htmlspecialchars($item['judul']) ?></div>
    <div class="messages">
      <!-- Konten chat diambil dari database -->
      <?= $item['konten'] ?>
    </div>
    <a href="index.html" class="back">← Kembali ke Beranda</a>
  </div>
</body>
</html>