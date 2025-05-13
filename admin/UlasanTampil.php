<?php
require 'functions.php';


$daftarUlasan = query("SELECT * FROM ulasan");

?>
<h1 class="text-center text-5xl my-4 font-semibold">Ulasan Buku Saya</h1>
<div class="max-w-4xl mx-auto p-6">
    <div class="text-right mb-4">
        <a href="tambahUlasan.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">Tambah Ulasan</a>
    </div>
    <?php foreach ($daftarUlasan as $ulasan) : ?>
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6 transform hover:scale-105 transition-all">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2"><?= $ulasan['judulBuku'] ?></h3>
            <p class="text-gray-600 mb-4">
                <?= $ulasan['komentar'] ?>
            </p>
            <div class="flex items-center mb-4">
                <span class="text-yellow-500 text-lg">⭐ <?= $ulasan['rating'] ?></span>
            </div>
            <p class="text-sm text-gray-400 text-right"><?= $ulasan['tanggal'] ?></p>
        </div>
    <?php endforeach; ?>
</div>