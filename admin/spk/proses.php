<?php
session_start();  // Memulai sesi untuk menyimpan data hasil nanti

require 'data.php';  // Memuat data buku dari file data.php, diasumsikan berisi array $buku

// Mendapatkan bobot kriteria dari form POST dan mengubahnya ke tipe float
$bobot = [
    'tahun' => (float) $_POST['bobotTahun'],    // Bobot untuk kriteria tahun terbit buku
    'harga' => (float) $_POST['bobotHarga'],    // Bobot untuk kriteria harga buku
    'rating' => (float) $_POST['bobotRating'],  // Bobot untuk kriteria rating buku
    'halaman' => (float) $_POST['bobotHalaman'] // Bobot untuk kriteria jumlah halaman buku
];

// Mengambil nilai maksimum dan minimum dari masing-masing kriteria untuk normalisasi
$max_tahun   = max(array_column($buku, 'tahun'));    // Nilai tahun terbit tertinggi dari semua buku
$min_harga   = min(array_column($buku, 'harga'));    // Harga terendah dari semua buku
$max_rating  = max(array_column($buku, 'rating'));   // Rating tertinggi dari semua buku
$min_halaman = min(array_column($buku, 'halaman'));  // Jumlah halaman terendah dari semua buku

// Melakukan normalisasi dan perhitungan skor untuk setiap buku
foreach ($buku as &$item) {
    // Normalisasi setiap kriteria berdasarkan bobot dan nilai maksimum/minimum
    $normal = [
        'tahun'   => $item['tahun'] / $max_tahun,   // Normalisasi tahun: semakin besar semakin baik
        'harga'   => $min_harga / $item['harga'],   // Normalisasi harga: semakin kecil harga semakin baik
        'rating'  => $item['rating'] / $max_rating, // Normalisasi rating: semakin besar semakin baik
        'halaman' => $min_halaman / $item['halaman'] // Normalisasi halaman: semakin sedikit halaman semakin baik
    ];

    // Hitung skor akhir buku berdasarkan bobot dan nilai normalisasi
    $item['skor'] =
        ($normal['tahun']   * $bobot['tahun']) +
        ($normal['harga']   * $bobot['harga']) +
        ($normal['rating']  * $bobot['rating']) +
        ($normal['halaman'] * $bobot['halaman']);
}

// Mengurutkan array buku berdasarkan skor dari yang terbesar ke terkecil
usort($buku, fn($a, $b) => $b['skor'] <=> $a['skor']);

// Simpan hasil ranking buku ke dalam session agar bisa diakses di halaman lain
$_SESSION['hasil'] = $buku;

// Redirect ke halaman dashboard untuk menampilkan hasil ranking buku
header("Location: ../dashboard.php?page=tampilBukuSPK");
exit;