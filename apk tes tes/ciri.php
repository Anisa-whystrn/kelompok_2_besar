<?php
require 'api/get_edukasi.php'; // ambil data
$data = json_decode($output, true);
$item = null;
foreach ($data as $d) {
    if ($d['id'] === 'ciri') {
        $item = $d;
        break;
    }
}
if (!$item) die("Data tidak ditemukan.");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($item['judul']) ?> - GrowTogether</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background: #fdf2f8; margin: 0; padding: 0; }
    .container { max-width: 900px; margin: 40px auto; padding: 0 20px; }
    img { max-width: 100%; border-radius: 12px; margin: 20px 0; }
    .ciri-list { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    .ciri-list h2 { color: #ec4899; margin-bottom: 20px; text-align: center; }
    .ciri-item { display: flex; gap: 16px; margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px dashed #eee; }
    .icon { background: #fdf2f8; width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #ec4899; font-size: 20px; }
    .back { display: block; text-align: center; margin-top: 30px; color: #ec4899; font-weight: 600; text-decoration: none; }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1><?= htmlspecialchars($item['judul']) ?></h1>
      <p>Kenali tanda-tanda stunting sejak dini untuk intervensi yang tepat.</p>
    </header>

    <div class="illustration">
      <img src="<?= htmlspecialchars($item['gambar_url']) ?>" alt="<?= htmlspecialchars($item['judul']) ?>">
      <p><em>Sumber: <?= htmlspecialchars($item['sumber']) ?></em></p>
    </div>

    <div class="ciri-list">
      <h2>Tanda-Tanda Umum Stunting</h2>
      <?= $item['konten'] ?>
    </div>

    <a href="index.html" class="back">← Kembali ke Beranda</a>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ciri-Ciri Stunting - GrowTogether</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fdf2f8;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
    }
    header {
      text-align: center;
      margin-bottom: 40px;
    }
    h1 {
      color: #ec4899;
      font-size: 2.2rem;
      margin-bottom: 12px;
    }
    .illustration {
      text-align: center;
      margin: 30px 0;
    }
    .illustration img {
      max-width: 100%;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }
    .ciri-list {
      background: white;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .ciri-list h2 {
      color: #ec4899;
      margin-bottom: 20px;
      text-align: center;
    }
    .ciri-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px dashed #eee;
    }
    .ciri-item:last-child {
      border-bottom: none;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    .icon {
      background: #fdf2f8;
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: #ec4899;
      font-size: 20px;
    }
    .text h3 {
      margin-bottom: 6px;
      color: #333;
    }
    .text p {
      color: #666;
      line-height: 1.6;
    }
    .back {
      display: block;
      text-align: center;
      margin-top: 30px;
      color: #ec4899;
      font-weight: 600;
      text-decoration: none;
    }
    .back:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>❓ Ciri-Ciri Stunting</h1>
      <p>Kenali tanda-tanda stunting sejak dini untuk intervensi yang tepat.</p>
    </header>

    <div class="illustration">
      <img src="https://cdn.pixabay.com/photo/2020/07/08/11/02/child-5382933_1280.png" alt="Ilustrasi anak stunting vs normal">
      <p><em>Sumber: Kementerian Kesehatan RI</em></p>
    </div>

    <div class="ciri-list">
      <h2>Tanda-Tanda Umum Stunting</h2>
      
      <div class="ciri-item">
        <div class="icon">1</div>
        <div class="text">
          <h3>Tinggi Badan Sangat Pendek</h3>
          <p>Anak memiliki tinggi jauh di bawah rata-rata untuk usianya, meski berat badan terlihat normal.</p>
        </div>
      </div>

      <div class="ciri-item">
        <div class="icon">2</div>
        <div class="text">
          <h3>Pertumbuhan Melambat Sejak Dini</h3>
          <p>Pertambahan tinggi melambat sejak usia di bawah 2 tahun dan tidak mengejar ketertinggalan.</p>
        </div>
      </div>

      <div class="ciri-item">
        <div class="icon">3</div>
        <div class="text">
          <h3>Perkembangan Kognitif Terlambat</h3>
          <p>Anak lebih lambat dalam berbicara, belajar, dan memecahkan masalah sederhana.</p>
        </div>
      </div>

      <div class="ciri-item">
        <div class="icon">4</div>
        <div class="text">
          <h3>Wajah Terlihat Lebih Muda</h3>
          <p>Ekspresi dan bentuk wajah tampak seperti anak yang lebih kecil dari usianya.</p>
        </div>
      </div>
    </div>

    <a href="index.html" class="back">← Kembali ke Beranda</a>
  </div>
</body>
</html>