<?php
require 'functions.php';

$id = $_GET['id'];

$wishlist = query("SELECT * FROM wishlist WHERE id_wishlist = '$id'")[0];

if (isset($_POST['submit'])) {
    if (editWishlist($_POST) > 0) {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "Wishlist berhasil diedit!",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "dashboard.php?page=wishlistBuku";
                });
            </script>
        </body>
        </html>
        ';
        exit;
    } else {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Gagal!",
                    text: "Wishlist gagal diedit.",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    window.location.href = "dashboard.php?page=wishlistBuku";
                });
            </script>
        </body>
        </html>
        ';
        exit;
    }
}
?>

<div class="max-w-4xl mx-auto bg-gray-50 p-8 rounded-2xl shadow-lg mt-10">
    <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">📌 Edit Wishlist Buku</h2>
    <form action="" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input type="hidden" name="id" value="<?= $wishlist['id_wishlist']?>">
        <div>
            <label for="judulBuku" class="block mb-1 font-medium text-gray-700">Judul Buku</label>
            <input type="text" name="judulBuku" id="judulBuku" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $wishlist['judulBuku'] ?>">
        </div>

        <div>
            <label for="penulis" class="block mb-1 font-medium text-gray-700">Penulis</label>
            <input type="text" name="penulis" id="penulis" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                value="<?= $wishlist['penulis'] ?>">
        </div>

        <div>
            <label for="kategori" class="block mb-1 font-medium text-gray-700">Kategori</label>
            <input type="text" name="kategori" id="kategori" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                value="<?= $wishlist['kategori'] ?>">
        </div>

        <div>
            <label for="tanggalDitambahkan" class="block mb-1 font-medium text-gray-700">Tanggal Ditambahkan</label>
            <input type="date" name="tanggalDiTambahkan" id="tanggalDitambahkan" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $wishlist['tanggalDiTambahkan'] ?>">
        </div>

        <div class="md:col-span-2">
            <label for="alasan" class="block mb-1 font-medium text-gray-700">Alasan</label>
            <textarea name="alasan" id="alasan" rows="3"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"><?=($wishlist['alasan']) ?></textarea>
        </div>

        <div>
            <label for=" gambar" class="block mb-1 font-medium text-gray-700">Gambar (URL atau nama file)</label>
            <input type="text" name="gambar" id="gambar" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $wishlist['gambar'] ?>">
        </div>

        <div>
            <label for="linkBeli" class="block mb-1 font-medium text-gray-700">Link Pembelian</label>
            <input type="url" name="linkBeli" id="linkBeli" placeholder="https://contoh.com/beli" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required value="<?= $wishlist['linkBeli'] ?>">
        </div>

        <div class="md:col-span-2 flex justify-center">
            <button type="submit" name="submit" class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition duration-200">✨ Edit Wishlist</button>
        </div>

    </form>
</div>