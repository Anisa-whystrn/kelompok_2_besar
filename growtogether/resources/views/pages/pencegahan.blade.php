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
      align-items: center;
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
      max-width: 80%;
      height: auto;
     
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
    .back:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>🥦 Pencegahan Stunting</h1>
      <p>Stunting masih jadi salah satu tantangan besar bagi anak-anak Indonesia. Tapi kabar baiknya, Moms dan Dads, stunting bisa dicegah — mulai dari hal sederhana yang kita lakukan setiap hari 💪</p>
    </header>

    <div class="illustration">
      <img src="{{ asset('assets/images/3735220.jpg') }}" alt="Ibu memberi MPASI bergizi">
      <p><em>Sumber:<a href="https://www.freepik.com/free-photo/front-view-mother-holding-baby_37354094.htm#fromView=search&page=1&position=7&uuid=a987b6f9-b96b-4f36-8d44-7c0cd64a8a98&query=ibu+memberi+mpasi" target="_blank" rel="noopener noreferrer">Freepik</a></em></p>
    </div>

    <div class="steps">
      <div class="step-card">
        <div class="step-number">1</div>
        <div class="step-content">
          <h3>Intervensi sejak 1.000 Hari Pertama Kehidupan (HPK)</h3>
          <p>Periode sebelum hamil, saat hamil, hingga usia anak 2 tahun adalah waktu kritis. Pastikan ibu hamil mendapat asupan gizi cukup dan ibu remaja (sebelum hamil) pun sehat agar risikonya rendah. sumber : <a href="https://kemkes.go.id/eng/tiga-upaya-kemenkes-turunkan-stunting-di-indonesia?utm_source" target="_blank" rel="noopener noreferrer">Kemenkes RI</a></p>
        </div>
      </div>

      <div class="step-card">
        <div class="step-number">2</div>
        <div class="step-content">
          <h3>Asupan gizi yang lengkap & seimbang</h3>
          <p>Setelah usia 6 bulan, bayi mulai bisa diberikan MP-ASI (Makanan Pendamping ASI) yang teksturnya lembut dan bergizi seimbang — misalnya bubur ayam, sayuran halus, telur, dan buah. UNICEF menekankan pentingnya MP-ASI yang beragam dan bergizi tinggi, karena di fase ini pertumbuhan anak berlangsung sangat cepat. sumber : <a href="https://kemkes.go.id/eng/tiga-upaya-kemenkes-turunkan-stunting-di-indonesia?utm_source" target="_blank" rel="noopener noreferrer">Kemenkes RI</a></p>
        </div>
      </div>

      <div class="step-card">
        <div class="step-number">3</div>
        <div class="step-content">
          <h3>Kesehatan dan sanitasi lingkungan yang baik</h3>
          <p>Menurut WHO, infeksi berulang seperti diare dan cacingan dapat menghambat penyerapan gizi anak. Karena itu, pastikan keluarga punya akses air bersih, jamban sehat, dan kebiasaan mencuci tangan sebelum makan serta setelah buang air. sumber : <a href="https://www.who.int/teams/nutrition-and-food-safety/monitoring-nutritional-status-and-food-safety-and-events/healthy-growth-and-development?utm_source" target="_blank" rel="noopener noreferrer">WHO</a></p>
        </div>
      </div>
      <div class="step-card">
        <div class="step-number">4</div>
        <div class="step-content">
          <h3>Rutin pantau tumbuh kembang anak</h3>
          <p>Kemenkes menganjurkan agar anak dibawa rutin ke posyandu setiap bulan.
            Tujuannya supaya tinggi dan berat badan anak bisa dipantau sesuai usianya. Kalau ada tanda-tanda pertumbuhan melambat, petugas kesehatan bisa langsung memberi saran atau tindakan lebih lanjut.
            Dengan pemantauan rutin, stunting bisa dicegah sejak dini sebelum terlambat. sumber : <a href="https://www.badankebijakan.kemkes.go.id/en/cegah-stunting-kemenkes-fokuskan-pada-11-program-intervensi/?utm_source" target="_blank" rel="noopener noreferrer">Kemenkes BKPK</a></p>
        </div>
      </div>
      <div class="step-card">
        <div class="step-number">5</div>
        <div class="step-content">
          <h3>Libatkan keluarga dan lingkungan sekitar</h3>
          <p>Kemenkes menekankan pentingnya dukungan keluarga dalam memberi makanan bergizi, menjaga kebersihan rumah, dan mendampingi anak saat tumbuh kembangnya.
             Semakin banyak yang sadar, semakin besar peluang anak-anak kita tumbuh sehat dan cerdas 💪. sumber: <a href ="https://www.badankebijakan.kemkes.go.id/en/cegah-stunting-kemenkes-fokuskan-pada-11-program-intervensi/?utm_source" target="_blank" rel="noopener noreferrer">kemenkes BKPK</a></p>
        </div>
      </div>
    </div>

    <a href="/" class="back">← Kembali ke Beranda</a>
  </div>
</body>
</html>