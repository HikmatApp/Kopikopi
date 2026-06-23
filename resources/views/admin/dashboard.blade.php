<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - KopiKopi</title>

    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex">

        <!-- SIDEBAR -->
        <aside class="w-72 bg-white border-r shadow-lg">

            <div class="p-6 border-b">
                <h1 class="text-2xl font-bold text-orange-500">☕ KopiKopi</h1>
                <p class="text-xs text-gray-500">Admin Panel</p>
            </div>

            <nav class="p-4 space-y-2">

                <a href="{{ route('admin.dashboard') }}"
                    class="block p-3 rounded-xl bg-orange-100 text-orange-600 font-semibold">
                    📊 Dashboard
                </a>

                <a href="{{ route('admin.mitra.index') }}"
                    class="bg-white p-6 rounded-xl shadow hover:bg-gray-100 block">
                    <h3 class="text-xl font-bold">Data Mitra</h3>
                    <p class="text-gray-500">Kelola data mitra</p>
                </a>

                <a href="{{ route('admin.stok.index') }}"
                    class="bg-white p-6 rounded-xl shadow hover:bg-gray-100 block">

                    <h2 class="text-xl font-bold">📦 Stok Barang</h2>
                    <p class="text-gray-500 mt-2">
                        Kelola stok barang dan persediaan.
                    </p>

                </a>

                <a href="{{ route('admin.transaksi') }}"
                    class="block p-3 rounded-xl hover:bg-gray-100 transition">
                    🔄 Transaksi
                </a>

            </nav>

        </aside>

        <!-- MAIN -->
        <div class="flex-1 flex flex-col">

            <!-- TOP BAR -->
            <header class="bg-white border-b shadow-sm px-6 py-4 flex justify-between items-center">

                <h2 class="text-xl font-bold text-gray-800">
                    Dashboard Admin ☕
                </h2>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl transition">
                        Logout
                    </button>

                </form>

            </header>

            <!-- CONTENT -->
            <main class="p-8 space-y-6">

                <!-- STATS -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                        <p class="text-gray-500">Total Mitra</p>
                        <h2 class="text-3xl font-bold text-gray-800 mt-2">120</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                        <p class="text-gray-500">Total Stok</p>
                        <h2 class="text-3xl font-bold text-gray-800 mt-2">5000 Cup</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                        <p class="text-gray-500">Stok Masuk</p>
                        <h2 class="text-3xl font-bold text-gray-800 mt-2">320</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                        <p class="text-gray-500">Stok Keluar</p>
                        <h2 class="text-3xl font-bold text-gray-800 mt-2">210</h2>
                    </div>

                </div>

                <!-- ACTIVITY -->
                <div class="bg-white p-6 rounded-2xl shadow">

                    <h3 class="text-lg font-bold text-gray-800 mb-4">
                        Aktivitas Terbaru
                    </h3>

                    <div class="space-y-3 text-sm text-gray-600">

                        <div class="p-3 bg-gray-50 rounded-xl">
                            ✔ Mitra baru mendaftar: Budi
                        </div>

                        <div class="p-3 bg-gray-50 rounded-xl">
                            ✔ Stok masuk: 100 cup kopi
                        </div>

                        <div class="p-3 bg-gray-50 rounded-xl">
                            ✔ Stok keluar ke cabang A
                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

</body>

</html>