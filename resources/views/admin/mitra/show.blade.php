@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100 py-10 px-8">

    <!-- HEADER -->
    <div class="flex justify-between items-start mb-8">

        <!-- LEFT TEXT (seperti halaman tabel) -->
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Detail Mitra 👤
            </h1>

            <p class="text-gray-500 mt-1">
                Informasi lengkap data mitra
            </p>
        </div>

        <!-- RIGHT BUTTON -->
        <a href="{{ route('admin.mitra.index') }}"
            class="bg-gray-900 text-white px-5 py-3 rounded-xl shadow hover:bg-black transition">
            ← Kembali
        </a>

    </div>

    <!-- CARD PROFILE -->
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- HEADER CARD -->
        <div class="bg-gray-900 p-6 text-white">
            <h2 class="text-xl font-bold">
                {{ $mitra->name ?? $mitra->nama ?? 'Tanpa Nama' }}
            </h2>

            <p class="text-gray-300 text-sm">
                {{ $mitra->email ?? '-' }}
            </p>
        </div>

        <!-- BODY -->
        <div class="p-6 space-y-4">

            <!-- STATUS -->
            <div class="flex justify-between items-center">

                <span class="text-gray-600 font-medium">Status</span>

                @if(($mitra->is_active ?? 0) == 1)
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                    Aktif
                </span>
                @else
                <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">
                    Non Aktif
                </span>
                @endif

            </div>

            <!-- EMAIL -->
            <div class="flex justify-between items-center border-t pt-4">

                <span class="text-gray-600 font-medium">Email</span>
                <span class="text-gray-800">{{ $mitra->email ?? '-' }}</span>

            </div>

            <!-- NAMA -->
            <div class="flex justify-between items-center border-t pt-4">

                <span class="text-gray-600 font-medium">Nama Lengkap</span>
                <span class="text-gray-800 font-semibold">
                    {{ $mitra->name ?? $mitra->nama ?? '-' }}
                </span>

            </div>

            <!-- TANGGAL DAFTAR -->
            <div class="flex justify-between items-center border-t pt-4">

                <span class="text-gray-600 font-medium">Terdaftar</span>
                <span class="text-gray-800">
                    {{ $mitra->created_at ? $mitra->created_at->format('d M Y') : '-' }}
                </span>

            </div>

        </div>

    </div>

</div>

@endsection