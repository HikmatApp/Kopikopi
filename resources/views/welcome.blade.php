<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>CoffeeKopi System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f6f1eb] text-gray-800">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-6 py-4 shadow-md bg-white/80 backdrop-blur-md border-b border-gray-200">
    <h1 class="text-xl font-bold text-orange-500">KopiKopi</h1>

    <div class="space-x-3">
        <a href="/login" class="px-4 py-2 border rounded hover:bg-gray-100">Login</a>
        <a href="/register" class="px-4 py-2 bg-orange-500 text-white rounded">Register</a>
    </div>
</nav>

<!-- HERO -->
<section class="h-[90vh] flex items-center justify-center text-white text-center px-6 relative">

    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <div class="relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">
            Sistem Informasi Persediaan Barang KopiKopi
        </h1>

        <p class="max-w-2xl mx-auto text-gray-200">
            Mengelola stok, distribusi kopi, dan data mitra dalam satu sistem modern berbasis web.
        </p>
    </div>

</section>

<!-- MARKETING (UPDATED EMBOSS STYLE) -->
<section class="py-24 px-6 flex justify-center bg-[#f6f1eb]">

    <div class="max-w-5xl w-full text-center">

        <div class="inline-block px-4 py-1 bg-orange-100 text-orange-600 rounded-full text-sm mb-4 shadow-sm">
            🚀 Peluang Bisnis Kopi
        </div>

        <h2 class="text-4xl font-bold text-gray-800 mb-6 drop-shadow-sm">
            Bangun Usaha Kopi dari Nol ☕
        </h2>

        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
            Web ini juga menyediakan untuk Anda yang ingin memulai usaha jualan kopi dari 0,
            mulai dari peralatan, bahan baku, hingga sistem bisnis yang siap dijalankan dengan mudah.
        </p>

        <!-- EMBOSS BOX -->
        <div class="mt-10 grid md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition">
                💰 Modal Terjangkau
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition">
                🚀 Siap Jalan
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition">
                📦 Sistem Lengkap
            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="py-10 text-center bg-[#efe6dd]">

    <h2 class="text-2xl font-bold mb-4 text-gray-800">Tertarik?</h2>

    <a href="#paket"
        class="px-6 py-3 bg-orange-500 text-white rounded-full shadow-md hover:shadow-lg transition">
        Lihat Paket Usaha
    </a>
</section>

<!-- PAKET -->
<section id="paket" class="relative py-24 px-6 overflow-hidden">

    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348"
            class="w-full h-full object-cover scale-110">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <div class="relative z-10">

        <h2 class="text-3xl font-bold text-center text-white mb-12 drop-shadow-lg">
            Paket Usaha Motor Coffee ☕
        </h2>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">

            <!-- CARD EMBOSS -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 flex flex-col hover:shadow-2xl transition">
                <h3 class="font-bold text-xl">Paket A</h3>
                <p class="text-orange-500 font-bold">Rp 1.500.000</p>

                <ul class="text-sm mt-3 space-y-2 mb-6 text-gray-600">
                    <li>✔ 170 cup kopi</li>
                    <li>✔ Alat basic</li>
                </ul>

                <a href="/register"
                    class="mt-auto bg-orange-500 text-white py-2 rounded text-center shadow-md hover:shadow-lg">
                    Pilih Paket
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 flex flex-col hover:shadow-2xl transition">
                <h3 class="font-bold text-xl">Paket B</h3>
                <p class="text-orange-500 font-bold">Rp 3.500.000</p>

                <ul class="text-sm mt-3 space-y-2 mb-6 text-gray-600">
                    <li>✔ Booth</li>
                    <li>✔ 300 cup kopi</li>
                </ul>

                <a href="/register"
                    class="mt-auto bg-orange-500 text-white py-2 rounded text-center shadow-md hover:shadow-lg">
                    Pilih Paket
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 flex flex-col hover:shadow-2xl transition">
                <h3 class="font-bold text-xl">Paket C</h3>
                <p class="text-orange-500 font-bold">Rp 9.000.000</p>

                <ul class="text-sm mt-3 space-y-2 mb-6 text-gray-600">
                    <li>✔ Gerobak motor</li>
                    <li>✔ 600 cup kopi</li>
                </ul>

                <a href="/register"
                    class="mt-auto bg-orange-500 text-white py-2 rounded text-center shadow-md hover:shadow-lg">
                    Pilih Paket
                </a>
            </div>

        </div>
    </div>
</section>

<!-- KENAPA PILIH KAMI -->
<section class="py-20 text-center bg-[#f6f1eb]">

    <h2 class="text-3xl font-bold mb-10 text-gray-800">Kenapa Pilih Kami?</h2>

    <div class="grid md:grid-cols-3 gap-6 px-10">

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">💰 Modal Terjangkau</div>
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">🚀 Langsung Siap Jualan</div>
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">📦 Sistem Lengkap</div>

    </div>
</section>

<!-- FOOTER -->
<footer class="bg-[#efe6dd] py-6 text-center border-t border-gray-200">

    <div class="flex justify-center items-center space-x-6">

        <a href="https://chat.whatsapp.com/J6OLboiX5yA4xXBHPVmEIf?mlu=0&s=cl&p=a">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png"
                class="w-8 h-8 hover:scale-110 transition">
        </a>

        <a href="https://www.instagram.com/hikmatapp_?igsh=MWl2c3dwbXExb3phaQ==">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"
                class="w-8 h-8 hover:scale-110 transition">
        </a>

    </div>

    <p class="mt-3 text-xs text-gray-600">
        © 2026 CoffeeKopi System
    </p>

</footer>

</body>

</html>