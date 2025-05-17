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
    <section class="bg-gray-100 px-6 py-12 sm:px-12 lg:px-32 font-sans">
        <div class="max-w-5xl mx-auto">
            <!-- Judul Utama -->
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">
                📘 Prinsip Utama dari Buku <span class="text-blue-600">Atomic Habits</span>
            </h1>

            <!-- Prinsip Card -->
            <div class="bg-white rounded-xl shadow-md p-6 md:p-8 mb-8">
                <h2 class="text-2xl font-bold text-blue-700 mb-4">🔍 Prinsip Utama</h2>
                <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
                    <div>
                        <h4 class="text-xl font-semibold text-blue-600">1. Perubahan Kecil → Hasil Besar</h4>
                        <p class="mt-2">➤ Perubahan 1% setiap hari mungkin tidak terasa, tapi dalam jangka panjang hasilnya luar biasa.</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-blue-600">2. Identitas Lebih Penting daripada Tujuan</h4>
                        <p class="mt-2">➤ Fokus bukan hanya pada <em>“aku ingin lulus”</em>, tapi <em>“aku adalah orang yang disiplin belajar setiap hari”</em>.</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-blue-600">📏 Empat Hukum Perubahan Perilaku</h4>
                        <ol class="list-decimal ml-6 mt-2 space-y-1">
                            <li>Buatlah kebiasaan <strong>terlihat</strong> <em>(make it obvious)</em></li>
                            <li>Buatlah <strong>menarik</strong> <em>(make it attractive)</em></li>
                            <li>Buatlah <strong>mudah</strong> <em>(make it easy)</em></li>
                            <li>Buatlah <strong>memuaskan</strong> <em>(make it satisfying)</em></li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Catatan Inspiratif Card -->
            <div class="bg-white rounded-xl shadow-md p-6 md:p-8 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">📚 Catatan & Kutipan Inspiratif</h2>
                <ul class="list-disc ml-6 text-gray-700 space-y-2 text-base">
                    <li>Setiap tindakan kecil membentuk siapa kamu nantinya.</li>
                    <li>Jangan terlalu fokus pada hasil sekarang. Lihat arahmu, bukan posisimu.</li>
                    <li>Ritual kecil seperti menyiapkan meja belajar bisa memicu konsentrasi tinggi.</li>
                </ul>
            </div>

            <!-- Tips Praktis Card -->
            <div class="bg-white rounded-xl shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">🛠️ Tips Praktis dari Buku</h2>
                <div class="space-y-6 text-gray-700 text-base">
                    <div>
                        <h3 class="text-lg font-semibold text-blue-600">✔️ Gunakan Habit Stacking</h3>
                        <p class="ml-4 mt-1">Contoh: Setelah aku <em>mandi pagi</em>, aku akan <em>membaca buku selama 10 menit</em>.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-blue-600">⏱️ Gunakan Aturan 2 Menit</h3>
                        <p class="ml-4 mt-1">Alih-alih “mengerjakan coding project”, mulailah dengan “buka Visual Studio Code dan buka folder proyek”.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>