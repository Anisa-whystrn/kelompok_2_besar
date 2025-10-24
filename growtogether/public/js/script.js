// Smooth scroll untuk tautan navigasi
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80, // offset untuk navbar
                behavior: 'smooth'
            });
        }
    });
});

// Opsional: Tambahkan efek saat scroll (misalnya animasi fade-in)
// Anda bisa tambahkan nanti jika butuh

console.log("GrowTogether - Edukasi Stunting siap digunakan! 💚");