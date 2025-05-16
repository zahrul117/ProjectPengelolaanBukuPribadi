<?php
require 'functions.php';

$daftarWishlist = query("SELECT * FROM wishlist")

?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Daftar Wishlist Saya</h2>
<div class="text-right mb-4">
  <a href="?page=tambahWishlist" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">Tambah Wishlist Buku</a>
</div>
<div class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <?php foreach ($daftarWishlist as $wishlist) : ?>
    <!-- Wishlist Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 card">
      <img src="../assets/img/wishlist/<?= $wishlist['gambar'] ?>" alt="<?= $wishlist['judulBuku']; ?>" class="w-full h-48 object-cover">

      <div class="p-4 flex flex-col h-full">
        <h2 class="text-xl font-semibold text-gray-800 mb-1"><?= $wishlist['judulBuku']; ?></h2>
        <p class="text-gray-600 text-sm mb-2"><?= $wishlist['penulis'] ?></p>
        <p class="text-sm text-gray-700 mb-4"><?= $wishlist['alasan']; ?></p>

        <div class="flex justify-between items-center text-sm text-gray-400 mt-auto mb-2">
          <span>Ditambahkan: <?= $wishlist['tanggalDiTambahkan']; ?></span>

        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-end space-x-2 mt-2">
          <a href="?page=editWishlist&id=<?= $wishlist['id_wishlist'] ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">Edit</a>
          <a href="#" onclick="confirmDelete(<?= $wishlist['id_wishlist'] ?>)" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Delete</a>
          <a href="<?= $wishlist['linkBeli'] ?>" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Beli</a>
        </div>
      </div>
    </div>

  <?php endforeach; ?>
</div>

<script>
  function confirmDelete(id) {
    Swal.fire({
      title: 'Yakin ingin menghapus wishlist ini?',
      text: "Data wishlist yang dihapus tidak bisa dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#e3342f',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Ya, Hapus',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = `?page=hapusWishlist&id=${id}`;
      }
    });
  }
</script>

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
    min-height: 350px;
    /* Menjaga agar card memiliki tinggi minimal */
    transition: all 0.3s ease;
  }

  .card img {
    height: 200px;
    /* Menetapkan tinggi gambar */
    object-fit: cover;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .card .p-4 {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    /* Membuat konten fleksibel untuk mengisi sisa ruang */
  }

  .card .flex {
    margin-top: auto;
  }

  .card .text-gray-400 {
    font-size: 0.875rem;
  }

  .card button {
    background-color: #2563eb;
    /* Warna biru */
    color: white;
    padding: 0.5rem 1.25rem;
    border-radius: 0.375rem;
    font-size: 0.875rem;
    transition: background-color 0.3s ease;
  }

  .card button:hover {
    background-color: #1d4ed8;
    /* Warna biru lebih gelap */
  }
</style>
