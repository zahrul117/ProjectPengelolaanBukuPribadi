<?php
require 'functions.php';


$daftarBuku = ambilBuku("SELECT * FROM buku");
?>

<!-- Daftar Buku (Tabel) -->
<section id="daftarBuku" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Daftar Buku Saya</h2>

        <!-- Tabel Daftar Buku -->
        <div class="overflow-y-auto max-h-[500px]">
            <table class="w-5xl bg-white rounded-lg shadow-lg mx-auto">
                <thead class="bg-gradient-to-r from-indigo-600 to-indigo-500 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left">No</th>
                        <th class="px-6 py-4 text-left">Judul Buku</th>
                        <th class="px-6 py-4 text-left">Penulis</th>
                        <th class="px-6 py-4 text-left">Penerbit</th>
                        <th class="px-6 py-4 text-left">Tahun Terbit</th>
                        <th class="px-6 py-4 text-left">Kategori</th>
                        <th class="px-6 py-4 text-left">Status</th>
                        <th class="px-6 py-4 text-left">Gambar</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php $no = 1;
                    foreach ($daftarBuku as $buku) : ?>
                        <tr class="border-b border-gray-200 hover:bg-indigo-100 transition-all duration-300">
                            <td class="px-6 py-4"><?= $no++; ?></td>
                            <td class="px-6 py-4 font-semibold text-blue-700"><?= $buku['judul']; ?></td>
                            <td class="px-6 py-4"><?= $buku['penulis'] ?></td>
                            <td class="px-6 py-4"><?= $buku['penerbit'] ?></td>
                            <td class="px-6 py-4"><?= $buku['tahunTerbit'] ?></td>
                            <td class="px-6 py-4"><?= $buku['kategori'] ?></td>
                            <td class="px-6 py-4"><?= $buku['status'] ?></td>
                            <td class="px-6 py-4"><img src="../assets/img/buku/<?= $buku['gambar'] ?>" alt="" width="150"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>