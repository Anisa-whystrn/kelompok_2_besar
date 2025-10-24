<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ciri-Ciri Stunting - GrowTogether</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Style -->
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
      font-weight: 600;
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
      transition: color 0.2s ease;
    }

    .back:hover {
      text-decoration: underline;
      color: #db2777;
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
      <img src="{{ asset('assets/images/side-view-children-with-medical-masks-saluting-each-other.jpg') }}" alt="Ilustrasi anak stunting vs normal">
      <p><em>Sumber:<a href="https://www.freepik.com/free-photo/side-view-children-with-medical-masks-saluting-each-other_7746670.htm#fromView=search&page=1&position=5&uuid=5b8f356f-0094-43ca-b969-5f85f65b6eaf&query=ilustrasi+anak+stunting+vs+normal" target="_blank" rel="noopener noreferrer">Freepik</a></em></p>
    </div>

    <div class="ciri-list">
      <h2>Tanda-Tanda Umum Stunting</h2>

      <div class="ciri-item">
        <div class="icon">1</div>
        <div class="text">
          <h3>Anak tampak pendek, kecil untuk usianya, kurang aktif dan Sering sakit berulang (diare, flu, infeksi kulit).</h3>
          <p>sumber : <a href ="https://www.unicef.org/indonesia/topics/stunting?utm_source" target ="_blank" rel = "nooper noreferrer">UNICEF Indonesia – Stunting Prevention</a></p>
        </div>
      </div>

      <div class="ciri-item">
        <div class="icon">2</div>
        <div class="text">
          <h3>Tinggi badan di bawah standar WHO untuk anak seusianya.</h3>
          <p>sumber : <a href ="https://kemkes.go.id/eng/home" target ="_blank" rel = "nooper noreferrer">Kemenkes RI</a></p>
        </div>
      </div>

      <div class="ciri-item">
        <div class="icon">3</div>
        <div class="text">
          <h3>Anak lebih rentan sakit, mudah lelah, dan kurang fokus saat belajar.</h3>
          <p>sumber : <a href ="https://kemkes.go.id/eng/home" target ="_blank" rel = "nooper noreferrer">Kemenkes RI</a></p>
        </div>
      </div>

      <div class="ciri-item">
        <div class="icon">4</div>
        <div class="text">
          <h3>Pertumbuhan tinggi tidak sesuai usia, meskipun berat badan bisa tampak normal.</h3>
          <p>sumber : <a href ="https://kemkes.go.id/eng/home" target ="_blank" rel = "nooper noreferrer">Kemenkes RI</a></p>
        </div>
      </div>

      <div class="ciri-item">
        <div class="icon">5</div>
        <div class="text">
          <h3>Perkembangan kognitif terganggu, misalnya kemampuan bicara dan berpikir lebih lambat.</h3>
          <p>sumber : <a href ="https://kemkes.go.id/eng/home" target ="_blank" rel = "nooper noreferrer">Kemenkes RI</a></p>
        </div>
      </div>
    </div>

    <a href="/" class="back">← Kembali ke Beranda</a>
  </div>
</body>
</html>
