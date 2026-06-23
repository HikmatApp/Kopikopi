<div class="min-h-screen bg-gray-100">

    <!-- HEADER -->
    <div class="flex justify-between items-center p-6 bg-white shadow">

        <h1 class="text-2xl font-bold text-gray-800">
            Dashboard Mitra ☕
        </h1>

        <!-- LOGOUT -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
                Logout
            </button>
        </form>

    </div>

    <!-- CONTENT -->
    <div class="p-8">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- CARD 1 -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <p class="text-gray-500">Stok Saya</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">170 Cup</h2>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <p class="text-gray-500">Paket Saya</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">Paket A</h2>
            </div>

        </div>

    </div>

</div>