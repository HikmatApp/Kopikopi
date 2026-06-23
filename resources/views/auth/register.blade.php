<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - KopiKopi</title>

    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen bg-black">

    <!-- Background -->
    <div class="fixed inset-0">
        <img
            src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1920"
            class="w-full h-full object-cover"
            alt="Coffee">

        <div class="absolute inset-0 bg-black/70"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-4">

        <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-8 shadow-2xl">

            <!-- Logo -->
            <div class="text-center">

                <div class="text-6xl mb-3">☕</div>

                <h1 class="text-5xl font-bold text-white">KopiKopi</h1>

                <p class="text-gray-300 mt-2">Buat akun baru untuk memulai</p>

            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}" class="mt-8">
                @csrf

                <!-- Nama -->
                <div class="mb-4">
                    <label class="text-white block mb-2">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="text-white block mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="text-white block mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-6">
                    <label class="text-white block mb-2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>

                <!-- ROLE HIDDEN (TIDAK DIPILIH USER) -->
                <input type="hidden" name="role" value="mitra">

                <!-- BUTTON -->
                <button type="submit"
                    class="w-full bg-amber-600 hover:bg-amber-700 text-white py-4 rounded-xl font-semibold transition">
                    Register
                </button>

            </form>

            <!-- LOGIN -->
            <div class="text-center mt-6">

                <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">
                    Sudah punya akun?
                    <span class="text-amber-400">Login sekarang</span>
                </a>

            </div>

            <!-- SOSMED -->
            <div class="flex justify-center gap-5 mt-8">

                <!-- WhatsApp -->
                <a href="https://chat.whatsapp.com/J6OLboiX5yA4xXBHPVmEIf?mlu=0&s=cl&p=a"
                    target="_blank"
                    class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:scale-110 transition">

                    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png"
                        class="w-6 h-6" alt="WhatsApp">

                </a>

                <!-- Instagram -->
                <a href="https://www.instagram.com/hikmatapp_?igsh=MWl2c3dwbXExb3phaQ=="
                    target="_blank"
                    class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:scale-110 transition">

                    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"
                        class="w-6 h-6" alt="Instagram">

                </a>

            </div>

        </div>

    </div>

</body>

</html>