<?php
require 'functions.php';

$daftarWishlist = query("SELECT * FROM wishlist")

?>
<h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Daftar Wishlist Saya</h2>
<div class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <?php foreach($daftarWishlist as $wishlist) : ?>
    <!-- Wishlist Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 card">
      <img src="../assets/img/wishlist/<?= $wishlist['gambar']?>" alt="Catatan Seorang Demonstran" class="w-full h-48 object-cover">
      <div class="p-4 flex flex-col">
        <h2 class="text-xl font-semibold text-gray-800 mb-1"><?= $wishlist['judulBuku'];?></h2>
        <p class="text-gray-600 text-sm mb-2"><?= $wishlist['penulis']?></p>
        <p class="text-sm text-gray-700 mb-4"><?= $wishlist['alasan'];?></p>
        <div class="flex justify-between items-center mt-auto">
          <span class="text-sm text-gray-400">Ditambahkan: <?= $wishlist['tanggalDiTambahkan'];?></span>
          <a href="<?= $wishlist['linkBeli']?>" class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">Beli</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<style>
  /* Mengatur Grid dan memastikan card memiliki tinggi yang sama */
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1.5rem;
  }

  .card {
    display: flex;
    flex-direction: column;
    min-height: 350px; /* Menjaga agar card memiliki tinggi minimal */
    transition: all 0.3s ease;
  }

  .card img {
    height: 200px; /* Menetapkan tinggi gambar */
    object-fit: cover;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .card .p-4 {
    display: flex;
    flex-direction: column;
    flex-grow: 1; /* Membuat konten fleksibel untuk mengisi sisa ruang */
  }

  .card .flex {
    margin-top: auto;
  }

  .card .text-gray-400 {
    font-size: 0.875rem;
  }

  .card button {
    background-color: #2563eb; /* Warna biru */
    color: white;
    padding: 0.5rem 1.25rem;
    border-radius: 0.375rem;
    font-size: 0.875rem;
    transition: background-color 0.3s ease;
  }

  .card button:hover {
    background-color: #1d4ed8; /* Warna biru lebih gelap */
  }
</style>
