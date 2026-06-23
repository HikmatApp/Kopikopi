@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100 py-8 px-8">

    <!-- FLASH MESSAGE -->
    @if(session('success'))
        <div class="mb-6 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl shadow">
            {{ session('success') }}
        </div>
    @endif

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                ☕ Data Mitra
            </h1>

            <p class="text-gray-500 mt-1">
                Kelola semua mitra yang terdaftar dalam sistem
            </p>
        </div>

        <a href="{{ route('admin.dashboard') }}"
           class="bg-gray-900 text-white px-5 py-2 rounded-xl shadow hover:bg-black transition">
            ← Dashboard
        </a>

    </div>

    <!-- STATISTIK -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition border-l-4 border-gray-800">
            <p class="text-gray-500 text-sm">Total Mitra</p>
            <h2 class="text-3xl font-bold text-gray-900 mt-1">
                {{ $totalMitra ?? 0 }}
            </h2>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition border-l-4 border-green-500">
            <p class="text-gray-500 text-sm">Mitra Aktif</p>
            <h2 class="text-3xl font-bold text-green-600 mt-1">
                {{ $mitraAktif ?? 0 }}
            </h2>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition border-l-4 border-blue-500">
            <p class="text-gray-500 text-sm">Mitra Baru Bulan Ini</p>
            <h2 class="text-3xl font-bold text-blue-600 mt-1">
                {{ $mitraBaruBulanIni ?? 0 }}
            </h2>
        </div>

    </div>

    <!-- SEARCH -->
    <form method="GET"
          action="{{ route('admin.mitra.index') }}"
          class="mb-6 flex gap-2">

        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Cari nama / email..."
               class="w-72 px-4 py-2 border rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400">

        <button type="submit"
                class="bg-gray-800 text-white px-4 py-2 rounded-xl hover:bg-black transition">
            Cari
        </button>

        <a href="{{ route('admin.mitra.index') }}"
           class="bg-gray-300 px-4 py-2 rounded-xl hover:bg-gray-400 transition">
            Reset
        </a>

    </form>

    <!-- TABLE CARD -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <table class="w-full text-left">

            <thead class="bg-gray-900 text-white">
                <tr>
                    <th class="p-4">No</th>
                    <th class="p-4">Nama</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y">

                @forelse($mitra as $item)

                <tr class="hover:bg-gray-50 transition">

                    <td class="p-4">
                        {{ $loop->iteration }}
                    </td>

                    <td class="p-4 font-semibold text-gray-800">
                        {{ $item->name ?? $item->nama ?? '-' }}
                    </td>

                    <td class="p-4 text-gray-600">
                        {{ $item->email ?? '-' }}
                    </td>

                    <td class="p-4">

                        @if(($item->is_active ?? 0) == 1)
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Aktif
                            </span>
                        @else
                            <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">
                                Non Aktif
                            </span>
                        @endif

                    </td>

                    <td class="p-4 flex gap-2 justify-center">

                        <!-- DETAIL -->
                        <a href="{{ route('admin.mitra.show', $item->id) }}"
                           class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition text-sm">
                            Detail
                        </a>

                        <!-- TOGGLE -->
                        <form action="{{ route('admin.mitra.toggle', $item->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            @if($item->is_active)
                                <button type="submit"
                                    class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition text-sm">
                                    Non Aktif
                                </button>
                            @else
                                <button type="submit"
                                    class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 transition text-sm">
                                    Aktif
                                </button>
                            @endif

                        </form>

                        <!-- DELETE -->
                        <form action="{{ route('admin.mitra.delete', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin hapus mitra ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="bg-gray-800 text-white px-3 py-1 rounded-lg hover:bg-black transition text-sm">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" class="p-6 text-center text-gray-500">
                        Tidak ada data mitra
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection