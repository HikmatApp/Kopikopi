<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Stok Barang Admin</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100">

    <div class="min-h-screen p-6">

        <!-- HEADER -->
        <div class="bg-white shadow rounded-lg p-4 mb-4 flex justify-between items-center">

            <h1 class="text-xl font-bold">📦 Stok Barang (Admin)</h1>

            <div class="flex gap-2">

                <a href="{{ route('admin.dashboard') }}"
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white text-gray-700
                    hover:bg-gray-50 hover:border-gray-300 transition shadow-sm">

                    <!-- ICON -->
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">

                        <path d="M15 18l-6-6 6-6" />
                    </svg>

                    <span class="text-sm font-medium">Kembali</span>

                </a>

                <button type="button"
                    onclick="openModal()"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg">
                    + Tambah Barang
                </button>

            </div>

        </div>

        <!-- SEARCH & FILTER -->
        <div class="bg-white shadow rounded-lg p-4 mb-4">

            <form method="GET" action="{{ route('admin.stok.index') }}" class="flex gap-3">

                <input type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari nama barang..."
                    class="border rounded-lg px-3 py-2 w-full focus:ring-2 focus:ring-orange-400">

                <select name="kategori"
                    class="border rounded-lg px-3 py-2">

                    <option value="">Semua Kategori</option>
                    <option value="bahan baku" {{ request('kategori') == 'bahan baku' ? 'selected' : '' }}>
                        bahan baku
                    </option>
                    <option value="mesin" {{ request('kategori') == 'mesin' ? 'selected' : '' }}>
                        mesin
                    </option>

                </select>

                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg">
                    Cari
                </button>

                <a href="{{ route('admin.stok.index') }}"
                    class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg">
                    Reset
                </a>

            </form>

        </div>

        <!-- TABLE -->
        <div class="bg-white shadow rounded-lg overflow-hidden">

            <table class="w-full text-left">

                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3">No</th>
                        <th class="p-3">Nama Barang</th>
                        <th class="p-3">Kategori</th>
                        <th class="p-3">Satuan</th>
                        <th class="p-3">Stok</th>
                        <th class="p-3">Stok Minimum</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($barang as $item)
                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $item->nama_barang }}</td>
                        <td class="p-3">{{ $item->kategori }}</td>
                        <td class="p-3">{{ $item->satuan }}</td>
                        <td class="p-3">{{ $item->stok }}</td>
                        <td class="p-3">{{ $item->stok_minimum }}</td>

                        <td class="p-3 flex gap-2">

                            <a href="{{ route('admin.stok.edit', $item->id) }}"
                                class="bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded">
                                Edit
                            </a>

                            <form action="{{ route('admin.stok.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin hapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="p-4 text-center text-gray-500">
                            Tidak ada data stok barang
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>

    </div>

    <div id="modal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm flex justify-center items-center p-4">

        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden">

            <!-- HEADER -->
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-500 px-6 py-5 text-white">

                <h2 class="text-xl font-semibold tracking-wide">
                    Tambah Barang
                </h2>

                <p class="text-sm text-indigo-100 mt-1">
                    Isi data stok barang untuk menambahkan ke sistem inventori
                </p>

            </div>

            <!-- FORM -->
            <form action="{{ route('admin.stok.store') }}" method="POST" class="p-6 space-y-4">
                @csrf

                <!-- Nama Barang -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Nama Barang
                    </label>
                    <input type="text" name="nama_barang"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
                        placeholder="Contoh: Kopi Arabika">
                </div>

                <!-- Kategori & Satuan -->
                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Kategori
                        </label>
                        <input type="text" name="kategori"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
                            placeholder="bahan baku / mesin">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Satuan
                        </label>
                        <input type="text" name="satuan"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
                            placeholder="kg / pcs">
                    </div>

                </div>

                <!-- Stok -->
                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Stok
                        </label>
                        <input type="number" name="stok"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
                            placeholder="0">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Stok Minimum
                        </label>
                        <input type="number" name="stok_minimum"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
                            placeholder="0">
                    </div>

                </div>

                <!-- BUTTON -->
                <div class="flex justify-end gap-3 pt-4">

                    <button type="button"
                        onclick="closeModal()"
                        class="px-5 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-700 transition">
                        Batal
                    </button>

                    <button type="submit"
                        class="px-5 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium transition">
                        Simpan Data
                    </button>

                </div>

            </form>

        </div>
    </div>

    <!-- JS MODAL -->
    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>

</body>

</html>