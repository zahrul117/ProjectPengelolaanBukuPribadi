<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Wrapper -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-blue-800 text-white hidden md:block sticky top-0 self-start h-screen overflow-y-auto">
            <div class="p-6 text-2xl font-bold border-b border-blue-600">📚 RulBooks</div>
            <nav class="p-4 space-y-2">
                <a href="?page=home" class="block px-4 py-2 rounded hover:bg-blue-700">Dashboard</a>
                <a href="?page=tampilBuku" class="block px-4 py-2 rounded hover:bg-blue-700">Kelola Buku 📚</a>
                <a href="?page=wishlistBuku" class="block px-4 py-2 rounded hover:bg-blue-700">Wishlist Buku ❤️</a>
                <a href="?page=tampilUlasan" class="block px-4 py-2 rounded hover:bg-blue-700">Ulasan</a>
                <a href="?page=formInputBobot" class="block px-4 py-2 rounded hover:bg-blue-700">SPK</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="bg-white shadow p-4 flex items-center justify-between sticky top-0 z-50">
                <h1 class="text-xl font-bold text-gray-700">📘 RulBooks Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">👋 Halo, Zahrul</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Keluar</button>
                </div>
            </header>

         <!-- Konten yang berubah -->
    <main class="p-6">
        <?php include "isiFile.php"; ?>
    </main>
        </div>
    </div>

</body>

</html>