<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>RakBukuKu</title>
    <link href="./assets/style.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800 ">
    <!-- Header -->
    <header class="bg-gradient-to-l to-blue-500 to bg-red-500 text-white">
        <div class="container mx-auto flex items-center justify-between px-4 py-4">
            <h1 class="text-4xl font-bold">RulBooks</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="index.php#home" class="hover:text-blue-400 font-semibold">Home</a></li>
                    <li><a href="#daftarBuku" class="hover:text-blue-400 font-semibold">Daftar Buku</a></li>
                    <li><a href="#galeriSaya" class="hover:text-blue-400 font-semibold">Galeri</a></li>
                    <li><a href="#tentangSaya" class="hover:text-blue-400 font-semibold">Tentang Saya</a></li>

                </ul>
            </nav>
            <button class="py-2 px-3 bg-blue-500 rounded hover:bg-blue-600 transition">Login</button>
        </div>
    </header>

    <section class="bg-white-100 py-24 h-screen" id="home">
        <div class="container mx-auto flex flex-col lg:flex-row items-center text-center lg:text-left px-8">
            <!-- Kolom Kiri (Teks) -->
            <div class="lg:w-1/2 mb-8 lg:mb-0 ml-20">
                <h2 class="text-5xl font-bold text-blue-700 mb-4"><?= $_GET['judul'] ?></h2>
                <p class="text-xl text-gray-700 mb-2 max-w-3xl mx-auto lg:mx-0">
                    Penulis : <span class="font-semibold"><?= $_GET['penulis'] ?></span>
                </p>
                <p class="text-xl text-gray-700 mb-2 max-w-3xl mx-auto lg:mx-0">
                    Tahun Terbit : <span class="font-semibold"><?= $_GET['tahunTerbit'] ?></span>
                </p>
                <p class="text-xl text-gray-700 mb-2 max-w-3xl mx-auto lg:mx-0">
                    Kategori : <span class="font-semibold"><?= $_GET['kategori'] ?></span>
                </p>
                <p class="text-xl text-gray-700 mb-4 max-w-3xl mx-auto lg:mx-0">
                    Deskripsi : <span class="font-semibold"><?= $_GET['deskripsi'] ?></span>
                </p>
            </div>

            <!-- Kolom Kanan (Gambar Ikon Buku) -->
            <div class="lg:w-1/2 ml-10">
                <img src="assets/img/buku/<?= $_GET['gambar'] ?>" class=" mx-auto lg:mx-0" width="250">
            </div>
        </div>
    </section>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-6 space-y-6">
        <h1 class="text-2xl font-bold text-center text-blue-600">Catatan Atomic Habits (Versi Saya Dalam Belajar Coding)</h1>

        <section>
            <h2 class="text-xl font-semibold text-gray-700 mb-2">1. Mulai dari yang kecil, yang penting konsisten</h2>
            <p>
                Belajar coding tidak harus langsung mahir. Cukup meningkat 1% setiap hari. Misalnya hari ini belajar <code>if else</code>,
                besok lanjut ke <code>looping</code>. Jika dilakukan terus-menerus, kemampuan kita bisa meningkat 37 kali lebih baik dalam satu tahun dibanding saat pertama mulai.
            </p>
        </section>

        <section>
            <h2 class="text-xl font-semibold text-gray-700 mb-2">2. Catat setiap perkembangan kecil</h2>
            <p>
                Agar semangat terus terjaga, biasakan mencatat setiap kemajuan. Contoh: “Hari ini berhasil memahami function”, atau
                “Sudah bisa membuat tombol yang memunculkan alert”. Bisa dicatat di sticky note, buku harian, atau aplikasi di ponsel.
            </p>
        </section>

        <section>
            <h2 class="text-xl font-semibold text-gray-700 mb-2">3. Terapkan 4 Hukum Atomic Habits</h2>

            <div class="mt-4 space-y-4">

                <div>
                    <h3 class="font-semibold text-blue-600">Obvious – Buat kebiasaan jadi jelas</h3>
                    <p>
                        Jangan hanya berkata, “Saya ingin rajin ngoding.” Tapi lebih spesifik: “Setiap malam jam 8, saya akan belajar coding selama 30 menit dengan menyelesaikan latihan JavaScript.”
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold text-blue-600">Attractive – Buat kebiasaan jadi menarik</h3>
                    <p>
                        Gabungkan kegiatan belajar coding dengan hal yang disukai. Misalnya sambil mendengarkan musik yang menyenangkan atau sambil menikmati secangkir kopi.
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold text-blue-600">Easy – Buat kebiasaan jadi mudah</h3>
                    <p>
                        Permudah langkah awal. Misalnya, siapkan laptop dan buka file project dari sore hari. Atau gunakan modul belajar yang sudah terstruktur agar tidak bingung mulai dari mana.
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold text-blue-600">Satisfying – Buat kebiasaan terasa memuaskan</h3>
                    <p>
                        Setelah berhasil menyelesaikan sesi belajar, berikan hadiah kecil untuk diri sendiri. Misalnya menonton video sebentar, bermain game ringan, atau sekadar menikmati camilan favorit.
                    </p>
                </div>

            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Penutup</h2>
            <p>
                Tidak perlu langsung menjadi ahli. Yang penting adalah memiliki kebiasaan kecil yang dilakukan secara konsisten. Mulai dari peningkatan 1% per hari, maka seiring waktu, kemampuan akan terus berkembang. Pelan-pelan tapi pasti — itu kunci utamanya.
            </p>
        </section>
    </div>
</body>

</html>