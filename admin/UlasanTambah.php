<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (tambahUlasan($_POST) > 0) {
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
                    text: "Ulasan berhasil ditambahkan!",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "dashboard.php?page=tampilUlasan";
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
                    text: "Ulasan gagal ditambahkan.",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    window.location.href = "dashboard.php?page=tampilUlasan";
                });
            </script>
        </body>
        </html>
        ';
        exit;
    }
}

?>


<div class="max-w-3xl mx-auto bg-white p-8 mt-10 rounded-2xl shadow-xl">
    <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">📝 Tambah Ulasan Buku</h2>
    <form action="" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="col-span-2">
            <label for="judulBuku" class="block mb-1 font-medium text-gray-700">Judul Buku</label>
            <select name="judulBuku" id="judulBuku" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option value="">-- Pilih Buku --</option>
                <?php
                $buku = mysqli_query($konek, "SELECT id_buku, judul FROM buku");
                while($row = mysqli_fetch_assoc($buku)){
                    echo "<option value='{$row['judul']}'>{$row['judul']}</option>";
                }
                ?>
            </select>
        </div>

        <div class="col-span-2">
            <label for="komentar" class="block mb-1 font-medium text-gray-700">Komentar</label>
            <textarea name="komentar" id="komentar" rows="4" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
        </div>

        <div class="col-span-1">
            <label for="rating" class="block mb-1 font-medium text-gray-700">Rating</label>
            <select name="rating" id="rating" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option value="">-- Pilih Rating --</option>
                <option value="1">⭐ 1</option>
                <option value="2">⭐⭐ 2</option>
                <option value="3">⭐⭐⭐ 3</option>
                <option value="4">⭐⭐⭐⭐ 4</option>
                <option value="5">⭐⭐⭐⭐⭐ 5</option>
            </select>
        </div>

        <div class="col-span-1">
            <label for="tanggal" class="block mb-1 font-medium text-gray-700">Tanggal & Waktu</label>
            <input type="datetime-local" name="tanggal" id="tanggal" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>

        <div class="col-span-2 flex justify-center">
            <button type="submit" name="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-xl hover:bg-indigo-700 transition duration-200">
                💬 Tambahkan Ulasan
            </button>
        </div>

    </form>
</div>