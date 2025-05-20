<?php
session_start();
$hasil = $_SESSION['hasil'] ?? [];
?>


<h1 class="text-2xl font-bold text-center mb-6">Rekomendasi Buku Wishlist Terbaik (SPK)</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($hasil as $b): ?>
        <div class="bg-white rounded shadow p-4">
            <h2 class="text-lg font-bold"><?= $b['judul'] ?></h2>
            <p class="text-sm text-gray-600">Tahun: <?= $b['tahun'] ?> | Halaman: <?= $b['halaman'] ?></p>
            <p class="text-sm text-gray-600">Harga: Rp<?= number_format($b['harga'], 0, ',', '.') ?></p>
            <p class="text-sm text-gray-600">Rating: <?= $b['rating'] ?></p>
            <p class="mt-2 text-sm font-semibold text-blue-700">Skor: <?= round($b['skor'], 4) ?></p>
        </div>
    <?php endforeach; ?>
</div>

<div class="text-center mt-6">
    <a href="dashboard.php?page=formInputBobot" class="text-blue-600 underline">Ulangi Perhitungan</a>
</div>