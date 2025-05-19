<?php
require 'admin/functions.php';

$daftarBuku = query("SELECT * FROM buku");

if (isset($_POST['cari'])) {
    $daftarBuku = cari($_POST['keyword']);
}
?>

<!-- landing.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>RakBukuKu</title>
    <link href="./assets/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800 ">

    <!-- Header -->
    <header class="bg-gradient-to-l to-blue-500 to bg-red-500 text-white" data-aos="fade-down" data-aos-duration="1000">
        <div class="container mx-auto flex items-center justify-between px-4 py-4">
            <h1 class="text-4xl font-bold" data-aos="fade-right" data-aos-delay="200">RulBooks</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#home" class="hover:text-blue-400 font-semibold" data-aos="fade-down" data-aos-delay="300">Home</a></li>
                    <li><a href="#daftarBuku" class="hover:text-blue-400 font-semibold" data-aos="fade-down" data-aos-delay="400">Daftar Buku</a></li>
                    <li><a href="#galeriSaya" class="hover:text-blue-400 font-semibold" data-aos="fade-down" data-aos-delay="500">Galeri</a></li>
                    <li><a href="#tentangSaya" class="hover:text-blue-400 font-semibold" data-aos="fade-down" data-aos-delay="600">Tentang Saya</a></li>
                </ul>
            </nav>
            <button class="py-2 px-3 bg-blue-500 rounded hover:bg-blue-600 transition" data-aos="zoom-in" data-aos-delay="700">Login</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-white-100 py-24 h-screen" id="home" data-aos="fade-up" data-aos-duration="1200">
        <div class="container mx-auto flex flex-col lg:flex-row items-center text-center lg:text-left px-8">
            <!-- Kolom Kiri (Teks) -->
            <div class="lg:w-1/2 mb-8 lg:mb-0 ml-20" data-aos="fade-right" data-aos-delay="300">
                <h2 class="text-5xl font-bold text-blue-700 mb-4">Selamat Datang di Rak Buku Saya</h2>
                <p class="text-xl text-gray-700 mb-6 max-w-3xl mx-auto lg:mx-0">
                    Ini adalah tempat bagi saya untuk mengelola koleksi buku, wishlist, dan buku yang ingin saya baca. Jelajahi lebih lanjut dan temukan buku yang menarik untuk ditambahkan ke koleksi kamu!
                </p>
                <a href="#daftarBuku" class="py-3 px-6 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300" data-aos="zoom-in" data-aos-delay="600">
                    Lihat DaftarBuku Saya
                </a>
            </div>

            <!-- Kolom Kanan (Gambar Ikon Buku) -->
            <div class="lg:w-1/2 ml-10" data-aos="fade-left" data-aos-delay="600">
                <img src="./assets/img/buku1.png" class="w-3/4 mx-auto lg:mx-0" alt="Gambar Buku">
            </div>
        </div>
    </section>

    <!-- Daftar Buku (Tabel) -->
    <section id="daftarBuku" class="py-16 bg-gray-50" data-aos="fade-up" data-aos-duration="1000">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8" data-aos="zoom-in" data-aos-delay="200">Daftar Buku Saya</h2>
            <form method="post" action="#daftarBuku" class="flex justify-start ms-5 px-5 mb-7">
                <input
                    type="search"
                    name="keyword"
                    placeholder="Cari Buku..."
                    aria-label="Search"
                    autocomplete="off"
                    class="w-[300px] px-4 py-2 border border-gray-300 rounded-l-md
           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                <button
                    type="submit"
                    name="cari"
                    class="px-4 py-2 bg-white text-blue-600 border border-blue-600 rounded-r-md
            focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Cari
                </button>
            </form>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-5">
                <!-- Card Buku -->
                <?php foreach ($daftarBuku as $index => $buku) : ?>
                    <div class="bg-white rounded-xl shadow-md overflow-auto text-center p-4" data-aos="zoom-in" data-aos-delay="<?= 200 + $index * 100 ?>">
                        <img src="assets/img/buku/<?= $buku['gambar'] ?>" alt="Buku <?= $index + 1 ?>" class="w-48 h-48 mx-auto object-cover rounded mt-8">
                        <div class="mt-4 space-y-2">
                            <h3 class="text-lg font-semibold"><?= $buku['judul'] ?></h3>
                            <p class="text-sm text-gray-500">Penulis: <?= $buku['penulis'] ?></p>
                            <p class="text-sm text-gray-500">Tahun Terbit: <?= $buku['tahunTerbit'] ?></p>
                            <p class="text-sm text-gray-500 mb-3">Kategori: <?= $buku['kategori']; ?></p>
                            <a href="<?= $buku['judul'] ?>.php?judul=<?= $buku['judul'] ?>&penulis=<?= $buku['penulis'] ?>&tahunTerbit=<?= $buku['tahunTerbit'] ?>&kategori=<?= $buku['kategori'] ?>&deskripsi=<?= $buku['deskripsi'] ?>&gambar=<?= $buku['gambar'] ?>" class="py-1 px-3 bg-blue-500 mt-5 rounded text-white hover:bg-blue-950">Detail</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Galeri Buku (Card) -->
    <section id="galeriSaya" class="py-10 bg-gray-50 h-screen" data-aos="fade-up" data-aos-duration="1000">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8" data-aos="zoom-in" data-aos-delay="200">Galeri Saya</h2>

            <!-- Grid Galeri Buku dengan Hover Effect -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105" data-aos="flip-left" data-aos-delay="300">
                    <img src="./assets/img/galeri1.jpg" alt="Buku 1" class="w-full">
                </div>

                <div class="bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105" data-aos="flip-left" data-aos-delay="400">
                    <img src="./assets/img/galeri2.jpg" alt="Buku 2" class="w-full">
                </div>

                <div class="bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105" data-aos="flip-left" data-aos-delay="500">
                    <img src="./assets/img/galeri 3.jpg" alt="Buku 3" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="tentangSaya" class="py-16 bg-gray-50 mt-10" data-aos="fade-up" data-aos-duration="1000">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8" data-aos="zoom-in" data-aos-delay="200">Tentang Saya</h2>

            <div class="flex flex-col lg:flex-row items-center justify-between" data-aos="fade-right" data-aos-delay="300">
                <div class="lg:w-3/4 bg-white rounded-lg shadow-lg p-8 mb-8 lg:mb-0 mx-auto">
                    <p class="text-lg text-gray-600 mb-4">
                        Hai, saya Zahrul, seorang pecinta buku yang selalu mencari cara untuk mengorganisir koleksi buku pribadi saya dengan baik.
                        Buku adalah bagian penting dalam hidup saya, dan saya percaya bahwa setiap buku memiliki cerita yang unik untuk diceritakan. Di sini, saya ingin berbagi
                        koleksi buku pribadi saya melalui platform ini, dengan tujuan memudahkan pengelolaan dan berbagi cerita buku yang saya baca.
                    </p>
                    <p class="text-lg text-gray-600 mb-4">
                        Melalui website ini, saya ingin memberi kesempatan kepada Anda untuk juga mengelola koleksi buku Anda dengan cara yang lebih menyenangkan. Semoga Anda
                        bisa menemukan buku-buku menarik yang bisa menambah wawasan dan memberi inspirasi.
                    </p>
                </div>
            </div>

            <div class="text-center mt-8" data-aos="fade-left" data-aos-delay="400">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Perpustakaan Pribadi</h3>
                <p class="text-lg text-gray-600">
                    Perpustakaan pribadi saya adalah tempat yang penuh kenangan. Setiap buku di rak saya memiliki cerita tersendiri, baik itu fiksi, non-fiksi, atau buku pengetahuan yang saya baca
                    dengan tujuan meningkatkan diri. Saya berharap bisa terus mengembangkan perpustakaan ini dan berbagi dengan orang lain yang memiliki minat yang sama.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-500 to-red-500 text-white py-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-4" data-aos="zoom-in" data-aos-delay="200">
                <h3 class="text-5xl font-semibold mb-3">RulBooks</h3>
                <p class="text-md">Perpustakaan pribadi yang menyimpan koleksi buku terbaik dan informasi yang bermanfaat. Temukan buku favorit Anda di sini!</p>
            </div>

            <div class="flex justify-center space-x-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-blue-400 transition duration-300">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="https://www.twitter.com" target="_blank" class="text-white hover:text-blue-400 transition duration-300">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-pink-400 transition duration-300">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>

            <div class="text-sm" data-aos="fade-up" data-aos-delay="400">
                <p>&copy; 2025 RulBooks. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // durasi animasi dalam milidetik
            easing: 'ease-in-out',
            once: true, // animasi hanya sekali muncul
        });
    </script>
</body>

</html>