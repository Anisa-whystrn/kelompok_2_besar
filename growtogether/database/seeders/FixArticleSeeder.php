<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class FixArticleSeeder extends Seeder
{
    public function run()
    {
        Article::updateOrCreate(
            ['id' => 1],
            [
                'hero_image_url' => 'assets/images/enjoying-pleasant-walk-with-granny.jpg',
                'edukasi_content_html' => '<h2>hai moms...</h2>
<p>sedih karena tumbuh kembang buah hati tidak sesuai harapan?<br>
Tenang Bu, Ibu tidak sendiri. Banyak orang tua yang merasakan hal serupa, terutama ketika anak tampak lebih kecil dari teman sebayanya atau sulit makan. Namun jangan khawatir — kondisi ini bisa dicegah dan diperbaiki sejak dini.</p>

<p>Dengan memperhatikan asupan gizi seimbang, kebersihan makanan, serta kontrol rutin ke posyandu, Ibu sudah berperan besar dalam memastikan tumbuh kembang si kecil berjalan optimal. Mulailah hari ini, karena masa depan anak dimulai dari langkah kecil yang Ibu ambil sekarang. 🌱</p>

<div class="gambar">
  <img src="assets/images/334111-PAAXCF-974.jpg" alt="Ilustrasi ibu dan anak">
  <p class="gambar-pertumbuhan">
    sumber gambar : <a href="https://www.freepik.com/free-vector/asian-women-collection-different-ages_2433247.htm" target="_blank" rel="noopener noreferrer">freepik</a>
  </p>
</div>

<p>Stunting bukan sekadar masalah tinggi badan loh, tapi juga menyangkut perkembangan otak dan masa depan anak. Anak yang mengalami stunting berisiko memiliki kemampuan belajar yang lebih rendah serta daya tahan tubuh yang lemah. Karena itu, pencegahan sejak dini sangat penting, terutama pada <strong>1.000 Hari Pertama Kehidupan (HPK)</strong> — sejak masa kehamilan hingga anak berusia dua tahun.</p>

<h3>Apa Itu Stunting?</h3>
<p>Nah...moms pasti tidak asing lagi kan dengan kata Stunting? atau ada yang baru denger nih?</p>
<p>So, yang baru denger ataupun yang mau cari tau, yuk simak baik baik penjelasan di bawah!!</p>
<p>Menurut KBBI, Stunting memiliki arti atau makna yaitu kerdil (tidak dapat tumbuh menjadi besar); kecil (jika dibandingkan dengan pasangannya); atau bisa juga diartikan kondisi ketika anak gagal bertubuh dan berkembang.</p>
<p>Stunting merupakan suatu keadaan di mana tinggi badan anak lebih rendah dari rata-rata untuk usianya karena kekurangan nutrisi yang berlangsung dalam jangka waktu yang lama. <a href="https://ayosehat.kemkes.go.id/penyakit/stunting" target="_blank" rel="noopener noreferrer">(Ayo Sehat – Kemenkes RI)</a></p>

<div class="fakta">
  <h4>Fakta Penting:</h4>
  <p>Berdasarkan hasil <strong>Survei Status Gizi Indonesia (SSGI) 2024</strong> yang dirilis Kementerian Kesehatan, prevalensi stunting nasional berhasil turun menjadi <strong>19,8%</strong> — menunjukkan kemajuan nyata dalam upaya percepatan penurunan stunting. Sumber: <a href="https://www.kemenkopmk.go.id/prevalensi-stunting-tahun-2024-turun-jadi-198-persen-pemerintah-terus-dorong-penguatan-gizi" target="_blank" rel="noopener noreferrer">Kemenko PMK</a>.</p>
  
  <p>Pemerintah Indonesia menjadikan percepatan penurunan stunting sebagai salah satu program prioritas nasional. Sumber: <a href="https://www.bps.go.id/id/publication/2024/12/19/b87a8f73426081075be407fe/laporan-indeks-khusus-penanganan-stunting--ikps--2022-2023.html" target="_blank" rel="noopener noreferrer">Laporan Indeks Khusus Penanganan Stunting (IKPS) 2022-2023 – BPS</a></p>
  
  <p>Dalam tiga tahun terakhir, Indonesia menunjukkan kemajuan dalam menurunkan angka stunting pada anak balita. Berdasarkan hasil SSGI dari Kementerian Kesehatan, prevalensi stunting turun dari 21,6% pada tahun 2022, menjadi 21,5% pada 2023, dan kembali menurun menjadi <strong>19,8% pada tahun 2024</strong>. Sumber: <a href="https://www.kemenkopmk.go.id/prevalensi-stunting-tahun-2024-turun-jadi-198-persen-pemerintah-terus-dorong-penguatan-gizi" target="_blank" rel="noopener noreferrer">Kemenko PMK (2024)</a> dan <a href="https://www.badankebijakan.kemkes.go.id/ssgi-2024-prevalensi-stunting-nasional-turun-menjadi-198/" target="_blank" rel="noopener noreferrer">Badan Kebijakan Pembangunan Kesehatan (BKPK)</a></p>
  
  <p>Penurunan ini menunjukkan bahwa upaya pemerintah dan masyarakat dalam memperbaiki gizi anak mulai membuahkan hasil. Namun, angka ini masih perlu terus ditekan agar anak-anak Indonesia dapat tumbuh sehat, cerdas, dan produktif di masa depan.</p>
</div>',
                'gambar_edukasi_url' => 'assets/images/WhatsApp Image 2025-10-21 at 14.32.03_9efaca73.jpg'
            ]
        );
    }
}