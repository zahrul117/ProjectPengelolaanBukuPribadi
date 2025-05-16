<?php
require 'functions.php';

$daftarBuku = query("SELECT * FROM buku");
?>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Daftar Buku (Tabel) -->
<section id="daftarBuku" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Daftar Buku Saya</h2>

        <div class="text-right mb-4">
            <a href="?page=tambahBuku" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">Tambah Buku</a>
        </div>

        <!-- Tabel Daftar Buku -->
        <div class="overflow-y-auto max-h-[500px]">
            <table class="w-5xl bg-white rounded-lg shadow-lg mx-auto">
                <thead class="bg-gradient-to-r from-indigo-600 to-indigo-500 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left">No</th>
                        <th class="px-6 py-4 text-left">Judul Buku</th>
                        <th class="px-6 py-4 text-left">Penulis</th>
                        <th class="px-6 py-4 text-left">Tahun Terbit</th>
                        <th class="px-6 py-4 text-left">Kategori</th>
                        <th class="px-6 py-4 text-left">Status</th>
                        <th class="px-6 py-4 text-left">Gambar</th>
                        <th class="px-6 py-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php $no = 1;
                    foreach ($daftarBuku as $buku) : ?>
                        <tr class="border-b border-gray-200 hover:bg-indigo-100 transition-all duration-300">
                            <td class="px-6 py-4"><?= $no++; ?></td>
                            <td class="px-6 py-4 font-semibold text-blue-700"><?= $buku['judul']; ?></td>
                            <td class="px-6 py-4"><?= $buku['penulis'] ?></td>
                            <td class="px-6 py-4"><?= $buku['tahunTerbit'] ?></td>
                            <td class="px-6 py-4"><?= $buku['kategori'] ?></td>
                            <td class="px-6 py-4"><?= $buku['status'] ?></td>
                            <td class="px-6 py-4">
                                <img src="../assets/img/buku/<?= $buku['gambar'] ?>" alt="" width="70">
                            </td>
                            <td class="px-6 py-4">
                                <a href="" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white text-sm px-3 py-1 rounded mr-2 transition">Edit</a>
                                <a href="#" onclick="confirmDelete(<?= $buku['id_buku'] ?>)" class="inline-block bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded transition">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- SweetAlert2 Delete Confirm Script -->
<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Yakin ingin menghapus buku ini?',
        text: "Data buku yang dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e3342f',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `?page=hapusBuku&id=${id}`;
        }
    });
}
</script>
