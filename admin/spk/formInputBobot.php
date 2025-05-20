<!-- Form Bobot Kriteria -->
<form class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md space-y-4" method="POST" action="spk/proses.php">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Masukkan Bobot Kriteria</h2>

    <div>
        <label for="bobotTahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit (Benefit)</label>
        <input type="number" step="0.01" name="bobotTahun" id="bobotTahun" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div>
        <label for="bobotHarga" class="block text-sm font-medium text-gray-700 mb-1">Harga (Cost)</label>
        <input type="number" step="0.01" name="bobotHarga" id="bobotHarga" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div>
        <label for="bobotRating" class="block text-sm font-medium text-gray-700 mb-1">Popularitas / Rating (Benefit)</label>
        <input type="number" step="0.01" name="bobotRating" id="bobotRating" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div>
        <label for="bobotHalaman" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Halaman (Cost)</label>
        <input type="number" step="0.01" name="bobotHalaman" id="bobotHalaman" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <button type="submit" name="kirim" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-md transition duration-200">
        Hitung SPK
    </button>
</form>