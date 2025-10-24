<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GrowTogether - Edukasi Stunting</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-[Poppins] bg-white text-gray-800">

  <!-- Navbar -->
  <header class="navbar shadow-md bg-white sticky top-0 z-30">
    <div class="container mx-auto flex justify-between items-center px-5 py-4">
      <div class="flex items-center gap-2 font-bold text-pink-600 text-lg">
        <i class="ri-leaf-fill text-xl"></i> GrowTogether
      </div>
      <nav class="space-x-6 font-medium">
        <a href="#beranda" class="hover:text-pink-600">Beranda</a>
        <a href="#edukasi" class="hover:text-pink-600">Edukasi</a>
        <a href="#topik" class="hover:text-pink-600">Topik</a>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section id="beranda" class="hero bg-gradient-to-br from-pink-50 to-white py-12 px-5">
    <div class="container mx-auto flex flex-wrap items-center gap-10 max-w-6xl">
      <div class="flex-1">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Edukasi Stunting untuk Masa Depan Anak yang Lebih Sehat</h1>
        <p class="text-gray-600 text-lg">Pahami stunting sejak dini, kenali tanda dan penyebabnya, serta ambil langkah pencegahan yang tepat.</p>
      </div>
      <div class="flex-1">
        <img src="{{ $article->hero_image_url }}" class="rounded-2xl shadow-lg" alt="Ibu memeluk anak">
        <p class="text-sm text-gray-500 text-center mt-2">Sumber gambar: <a href="https://www.freepik.com" class="text-pink-600" target="_blank">Freepik</a></p>
      </div>
    </div>
  </section>

  <!-- Edukasi -->
  <section id="edukasi" class="py-16 px-5 bg-white">
    <div class="container mx-auto max-w-4xl leading-relaxed">
      {!! $article->edukasi_content_html !!}
      <div class="mt-10 text-center">
        <img src="{{ $article->gambar_edukasi_url }}" class="rounded-2xl shadow-md inline-block max-w-full" alt="Infografis Stunting">
        <p class="text-sm text-gray-500 mt-2"><em>Sumber: <a href="https://www.badankebijakan.kemkes.go.id/en/potret-stunting-di-indonesia/" class="text-pink-600" target="_blank">Kemenkes BKPK</a></em></p>
      </div>
    </div>
  </section>

  <!-- Topik -->
  <section id="topik" class="bg-pink-50 py-16 px-5 text-center">
    <h2 class="text-2xl font-bold text-pink-600 mb-10">Topik Edukasi</h2>
    <div class="flex flex-wrap justify-center gap-6">
      <a href="/ciri" class="bg-white p-8 rounded-2xl shadow-md w-60 hover:-translate-y-1 hover:shadow-lg transition">
        <i class="ri-question-line text-3xl text-pink-600 mb-3 block"></i>
        <h3 class="font-semibold text-gray-800">Ciri-Ciri Stunting</h3>
      </a>
      <a href="/penyebab" class="bg-white p-8 rounded-2xl shadow-md w-60 hover:-translate-y-1 hover:shadow-lg transition">
        <i class="ri-virus-line text-3xl text-pink-600 mb-3 block"></i>
        <h3 class="font-semibold text-gray-800">Penyebab Stunting</h3>
      </a>
      <a href="/pencegahan" class="bg-white p-8 rounded-2xl shadow-md w-60 hover:-translate-y-1 hover:shadow-lg transition">
        <i class="ri-shield-check-line text-3xl text-pink-600 mb-3 block"></i>
        <h3 class="font-semibold text-gray-800">Pencegahan Stunting</h3>
      </a>
    </div>
  </section>

  <!-- Floating Buttons -->
  @if(session('admin_logged_in'))
    <button onclick="showEditModal()" class="fixed bottom-20 right-6 bg-pink-600 hover:bg-pink-700 text-white p-4 rounded-full shadow-lg text-lg"><i class="ri-edit-2-line"></i></button>
    <form method="POST" action="/admin/logout" class="fixed bottom-6 right-6">
      @csrf
      <button type="submit" class="bg-gray-700 hover:bg-gray-800 text-white rounded-lg px-4 py-2 font-medium shadow-md">Logout</button>
    </form>
  @else
    <a href="/admin/login" class="fixed bottom-6 right-6 bg-green-600 hover:bg-green-700 text-white rounded-lg px-4 py-2 font-medium shadow-md">🔐 Login Admin</a>
  @endif

  <!-- Modal Edit -->
  <div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex justify-center items-center z-50">
    <div class="bg-white rounded-2xl shadow-2xl w-11/12 max-w-2xl p-8 relative animate-[fadeIn_0.3s_ease]">
      <button onclick="closeEditModal()" class="absolute top-4 right-6 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
      <h3 class="text-2xl font-semibold text-pink-600 mb-4 flex items-center gap-2"><i class="ri-edit-2-line"></i> Edit Artikel</h3>

      <form id="editForm" class="space-y-3">
        <textarea id="contentHtml" rows="8" class="w-full border border-gray-300 rounded-lg p-3 text-gray-700">{{ $article->edukasi_content_html }}</textarea>
        <input type="text" id="heroImg" value="{{ $article->hero_image_url }}" class="w-full border border-gray-300 rounded-lg p-3" placeholder="URL Gambar Hero">
        <input type="text" id="edukasiImg" value="{{ $article->gambar_edukasi_url }}" class="w-full border border-gray-300 rounded-lg p-3" placeholder="URL Gambar Edukasi">
        <button type="submit" class="w-full bg-pink-600 hover:bg-pink-700 text-white font-semibold py-2 rounded-lg shadow-md">💾 Simpan Perubahan</button>
      </form>
    </div>
  </div>

  <script>
    function showEditModal() {
      document.getElementById('editModal').style.display = 'flex';
    }
    function closeEditModal() {
      document.getElementById('editModal').style.display = 'none';
    }

    document.getElementById('editForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const res = await fetch('/admin/update', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
          edukasi_content_html: document.getElementById('contentHtml').value,
          hero_image_url: document.getElementById('heroImg').value,
          gambar_edukasi_url: document.getElementById('edukasiImg').value
        })
      });
      if (res.ok) {
        alert('✅ Artikel berhasil diperbarui!');
        closeEditModal();
        location.reload();
      } else {
        alert('❌ Gagal menyimpan perubahan.');
      }
    });
  </script>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

</body>
</html>
