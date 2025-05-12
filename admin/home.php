  <!-- Content -->
    <main class="flex-1 p-6">
        <!-- Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <h2 class="text-sm text-gray-500">Total Buku</h2>
                <p class="text-3xl font-bold text-blue-700">120</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <h2 class="text-sm text-gray-500">Pengguna</h2>
                <p class="text-3xl font-bold text-blue-700">35</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <h2 class="text-sm text-gray-500">Kategori</h2>
                <p class="text-3xl font-bold text-blue-700">10</p>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full text-sm text-gray-700">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="text-left px-6 py-3">Judul</th>
                        <th class="text-left px-6 py-3">Penulis</th>
                        <th class="text-left px-6 py-3">Kategori</th>
                        <th class="text-left px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="px-6 py-4">Belajar Tailwind CSS</td>
                        <td class="px-6 py-4">Rul</td>
                        <td class="px-6 py-4">Pemrograman</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-500 hover:underline">Edit</button>
                            <button class="text-red-500 hover:underline ml-3">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambah baris lain -->
                </tbody>
            </table>
        </div>
    </main>