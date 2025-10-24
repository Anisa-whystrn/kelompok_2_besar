<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Gunakan updateOrCreate — aman dari MassAssignmentException
        $article = Article::updateOrCreate(
            ['id' => 1], // kondisi pencarian (tidak di-assign ke model)
            [
                'hero_image_url' => 'assets/images/enjoying-pleasant-walk-with-granny.jpg',
                'edukasi_content_html' => '<h2>hai moms...</h2><p>sedih karena tumbuh kembang buah hati tidak sesuai harapan? Tenang Bu, Ibu tidak sendiri. Banyak orang tua yang merasakan hal serupa, terutama ketika anak tampak lebih kecil dari teman sebayanya atau sulit makan. Namun jangan khawatir kondisi ini bisa dicegah dan diperbaiki sejak dini. Dengan memperhatikan asupan gizi seimbang, kebersihan makanan, serta kontrol rutin ke posyandu, Ibu sudah berperan besar dalam memastikan tumbuh kembang si kecil berjalan optimal. Mulailah hari ini, karena masa depan anak dimulai dari langkah kecil yang Ibu ambil sekarang. 🌱</p><p>Stunting bukan sekadar masalah tinggi badan loh, tapi juga menyangkut perkembangan otak dan masa depan anak. Anak yang mengalami stunting berisiko memiliki kemampuan belajar yang lebih rendah serta daya tahan tubuh yang lemah. Karena itu, pencegahan sejak dini sangat penting, terutama pada 1.000 hari pertama kehidupan — sejak masa kehamilan hingga anak berusia dua tahun.</p><h3>Apa Itu Stunting?</h3><p>Nah...moms pasti tidak asing lagi kan dengan kata Stunting? atau ada yang baru denger nih?</p><p>So, yang baru denger ataupun yang mau cari tau, yuk simak baik baik penjelasan di bawah!!</p><p>Menurut KBBI, Stunting memiliki arti atau makna yaitu kerdil (tidak dapat tumbuh menjadi besar); kecil (jika dibandingkan dengan pasangannya) atau bisa juga diartikan kondisi ketika anak gagal bertubuh dan berkembang</p><p>Stunting merupakan suatu keadaan di mana tinggi badan anak lebih rendah dari rata-rata untuk usianya karena kekurangan nutrisi yang berlangsung dalam jangka waktu yang lama. <a href="https://ayosehat.kemkes.go.id/penyakit/stunting" target="_blank" rel="noopener noreferrer">(Ayo Sehat – Kemenkes RI)</a></p><div class="fakta"><h4>Fakta Penting:</h4><p>Berdasarkan hasil Survei Status Gizi Indonesia 2024 yang dirilis Kemenkes, prevalensi stunting nasional berhasil turun menjadi 19,8% — menunjukkan kemajuan nyata dalam upaya percepatan penurunan stunting. Sumber: <a href="https://www.kemenkopmk.go.id/prevalensi-stunting-tahun-2024-turun-jadi-198-persen-pemerintah-terus-dorong-penguatan-gizi" target="_blank">Kemenko PMK</a>.</p></div>',
                'gambar_edukasi_url' => 'assets/images/WhatsApp Image 2025-10-21 at 14.32.03_9efaca73.jpg'
            ]
        );

        return view('pages.index', compact('article'));
    }

    public function ciri()
    {
        return view('pages.ciri');
    }

    public function penyebab()
    {
        return view('pages.penyebab');
    }

    public function pencegahan()
    {
        return view('pages.pencegahan');
    }
}