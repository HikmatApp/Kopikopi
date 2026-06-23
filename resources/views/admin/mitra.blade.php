<x-app-layout>

    <div class="py-8 px-8">

        <div class="flex justify-between items-start mb-8">

            <!-- LEFT SIDE -->
            <div>
                <h1 class="text-4xl font-bold text-gray-800">
                    Data Mitra ☕
                </h1>

                <p class="text-gray-500 mt-2">
                    Kelola mitra yang terdaftar di sistem
                </p>
            </div>

            <!-- RIGHT SIDE (TOP CORNER BUTTON) -->
            <div class="flex items-start gap-3">

                <!-- BACK BUTTON -->
                <a href="{{ route('admin.dashboard') }}"
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white
                  text-gray-700 hover:bg-gray-50 hover:border-gray-300 transition shadow-sm">

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

                    Kembali

                </a>
            </div>

        </div>

        <!-- CARD STATISTIK -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

            <div class="bg-white p-6 rounded-3xl shadow-md">
                <h3 class="text-gray-500">Total Mitra</h3>
                <h1 class="text-4xl font-bold text-blue-600 mt-3">
                    {{ $mitra->count() }}
                </h1>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-md">
                <h3 class="text-gray-500">Mitra Aktif</h3>
                <h1 class="text-4xl font-bold text-green-600 mt-3">
                    {{ $mitra->count() }}
                </h1>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-md">
                <h3 class="text-gray-500">Mitra Baru</h3>
                <h1 class="text-4xl font-bold text-yellow-500 mt-3">
                    {{ $mitra->count() }}
                </h1>
            </div>

        </div>

        <!-- TABLE -->
        <div class="bg-white rounded-3xl shadow-md overflow-hidden">

            <table class="w-full">

                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-4">No</th>
                        <th class="p-4">Nama Mitra</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Role</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($mitra as $item)

                    <tr class="border-b hover:bg-gray-100">

                        <td class="p-4">
                            {{ $loop->iteration }}
                        </td>

                        <td class="p-4">
                            {{ $item->name }}
                        </td>

                        <td class="p-4">
                            {{ $item->email }}
                        </td>

                        <td class="p-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-xl">
                                {{ $item->role }}
                            </span>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</x-app-layout>