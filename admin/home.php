<?php
require 'functions.php';

$jumlah = totalBuku();
$totalBelumDibaca = hitungBukuBelumDibaca();
$totalSudahDibaca = hitungBukuSudahDibaca();
$daftarBuku = query("SELECT * FROM buku");
$daftarWishlist = query("SELECT * FROM wishlist")

?>
<!-- Content -->
<main class="flex-1 p-6">
    <!-- Info Cards -->
    <div class="grid grid-cols-2 gap-10 mb-6">
        <div class="bg-white p-4 rounded-lg shadow text-center">
            <h2 class="text-sm text-gray-500">Total Buku</h2>
            <p class="text-3xl font-bold text-blue-700"><?= $jumlah ?></p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow text-center">
            <h2 class="text-sm text-gray-500">Sudah Dibaca</h2>
            <p class="text-3xl font-bold text-blue-700"><?= $totalSudahDibaca ?></p>
        </div>
    </div>

    <!-- Buku Terbaru -->
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">📘 Buku Terbaru</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Judul</th>
                        <th class="px-4 py-2 text-left">Penulis</th>
                        <th class="px-4 py-2 text-left">Status</th>
                    </tr>
                </thead>
                <?php foreach ($daftarBuku as $buku) : ?>
                    <tbody class="text-gray-700">
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2"><?= $buku['judul']; ?></td>
                            <td class="px-4 py-2"><?= $buku['penulis'] ?></td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 rounded text-white
        <?= $buku['status'] === 'Sudah Dibaca' ? 'bg-green-500' : 'bg-red-500'; ?>">
                                    <?= $buku['status']; ?>
                                </span>
                            </td>

                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <!-- Wishlist Buku -->
    <!-- Wishlist Buku -->
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">⭐ Wishlist Buku</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($daftarWishlist as $wishlist) : ?>
                <div class="bg-white rounded-lg shadow p-3 text-center">
                    <img src="../assets/img/wishlist/<?= $wishlist['gambar'] ?>" alt="<?= $wishlist['judulBuku'] ?>" class="w-full h-48 object-cover rounded">
                    <p class="mt-2 font-medium text-gray-800"><?= $wishlist['judulBuku']; ?></p>
                    <p class="mt-2 text-sm text-gray-800"><?= $wishlist['kategori']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Pengingat -->
    <div class="bg-yellow-100 p-4 border-l-4 border-yellow-400 text-yellow-700 rounded shadow">
        <p>📢 Kamu masih memiliki <strong><?= $totalBelumDibaca ?> buku</strong> yang belum dibaca. Yuk mulai hari ini!</p>
    </div>
</main>-