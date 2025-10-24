<?php
require 'api/get_edukasi.php'; // ambil data
$data = json_decode($output, true);
$item = null;
foreach ($data as $d) {
    if ($d['id'] === 'pencegahan') {
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
  <title>Pencegahan Stunting - GrowTogether</title>
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
    .steps {
      display: grid;
      gap: 24px;
    }
    .step-card {
      background: white;
      border-radius: 20px;
      padding: 28px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      display: flex;
      gap: 20px;
      align-items: flex-start;
    }
    .step-number {
      background: #ec4899;
      color: white;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-weight: bold;
      font-size: 1.1rem;
    }
    .step-content h3 {
      margin-bottom: 10px;
      color: #333;
    }
    .step-content p {
      color: #666;
      line-height: 1.6;
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
    .back {
      display: block;
      text-align: center;
      margin-top: 30px;
      color: #ec4899;
      font-weight: 600;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>🥦 Pencegahan Stunting</h1>
      <p>Langkah konkret yang bisa Anda lakukan sejak dini.</p>
    </header>

    <div class="illustration">
      <img src="https://cdn.pixabay.com/photo/2021/03/05/12/42/woman-6071203_1280.jpg" alt="Ibu memberi MPASI bergizi">
      <p><em>Sumber: UNICEF Indonesia</em></p>
    </div>

    <div class="steps">
      <div class="step-card">
        <div class="step-number">1</div>
        <div class="step-content">
          <h3>Pantau Tumbuh Kembang Rutin</h3>
          <p>Bawa anak ke Posyandu setiap bulan untuk timbang, ukur tinggi, dan evaluasi perkembangan.</p>
        </div>
      </div>

      <div class="step-card">
        <div class="step-number">2</div>
        <div class="step-content">
          <h3>ASI Eksklusif & MPASI Bergizi</h3>
          <p>Berikan ASI eksklusif 6 bulan, lalu lanjutkan dengan MPASI kaya protein, sayur, dan lemak sehat.</p>
        </div>
      </div>

      <div class="step-card">
        <div class="step-number">3</div>
        <div class="step-content">
          <h3>Jaga Kebersihan Lingkungan</h3>
          <p>Pastikan air bersih, sanitasi layak, dan cuci tangan pakai sabun untuk cegah diare.</p>
        </div>
      </div>

      <div class="step-card">
        <div class="step-number">4</div>
        <div class="step-content">
          <h3>Stimulasi Tumbuh Kembang</h3>
          <p>Ajak anak bermain, bernyanyi, dan berinteraksi sejak bayi untuk dukung perkembangan otak.</p>
        </div>
      </div>
    </div>

    <a href="index.html" class="back">← Kembali ke Beranda</a>
  </div>
</body>
</html>