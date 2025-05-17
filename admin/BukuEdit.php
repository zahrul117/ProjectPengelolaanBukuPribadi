<?php
require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id_buku = '$id'")[0];

if (isset($_POST['submit'])) {
    if (editBuku($_POST) > 0) {
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
                    text: "Buku berhasil ditambahkan!",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "dashboard.php?page=tampilBuku";
                });
            </script>
        </body>
        </html>
        ';
        exit;
    } else {
        // Alert gagal
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
                    text: "Buku gagal ditambahkan.",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    window.location.href = "dashboard.php?page=tampilBuku";
                });
            </script>
        </body>
        </html>
        ';
        exit;
    }
}

?>


<div class="max-w-4xl mx-auto bg-gray-50 p-8 rounded-2xl shadow-lg">
    <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">📚 Edit Buku</h2>
    <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input type="hidden" name="id" value="<?= $buku['id_buku'] ?>">
        <div class="col-span-1">
            <label for="judul" class="block mb-1 font-medium text-gray-700">Judul Buku</label>
            <input type="text" name="judul" id="judul" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $buku['judul'] ?>">
        </div>

        <div class="col-span-1">
            <label for="penulis" class="block mb-1 font-medium text-gray-700">Penulis</label>
            <input type="text" name="penulis" id="penulis" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $buku['penulis'] ?>">
        </div>


        <div class="col-span-1">
            <label for="tahunterbit" class="block mb-1 font-medium text-gray-700">Tahun Terbit</label>
            <input type="number" name="tahunTerbit" id="tahunterbit" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $buku['tahunTerbit'] ?>">
        </div>

        <div class="col-span-1">
            <label for="kategori" class="block mb-1 font-medium text-gray-700">Kategori</label>
            <input type="text" name="kategori" id="kategori" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $buku['kategori'] ?>">
        </div>

        <div class="col-span-1">
            <label for="status" class="block mb-1 font-medium text-gray-700">Status</label>
            <select name="status" id="status" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $buku['status'] ?>">
                <option value="Status Buku" disabled hidden selected>Status Baca</option>
                <option>Belum Dibaca</option>
                <option>Sudah Dibaca</option>
            </select>
        </div>

        <div class="col-span-1">
            <label for="gambar" class="block mb-1 font-medium text-gray-700">Gambar (URL atau nama file)</label>
            <input type="text" name="gambar" id="gambar" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $buku['gambar'] ?>">
        </div>

        <div class="col-span-2">
            <label for="deskripsi" class="block mb-1 font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"><?= htmlspecialchars($buku['deskripsi']) ?></textarea>
        </div>



        <div class="col-span-2 flex justify-center">
            <button type="submit" name="submit" class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition duration-200">➕ Edit Buku</button>
        </div>

    </form>
</div>