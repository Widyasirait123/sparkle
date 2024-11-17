<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 text-white">
    <div class="w-full max-w-md p-8 space-y-6 bg-gray-800 rounded-lg shadow-lg">
        <!-- Logo -->
        <div class="flex justify-center">
            <img src="{{ asset('storage/logo/icon_logo.png') }}" alt="Logo" class="w-40 h-40">
        </div>

        <!-- Judul -->
        <h2 class="text-3xl font-bold text-center">MASUK</h2>

        <!-- Form Login -->
        <form class="space-y-4" action="{{ route('login-proses') }}" method="POST">
            @csrf

            <!-- Input Username -->
            <div>
                <label for="username" class="sr-only">Nama Pengguna</label>
                <input id="username" type="text" name="username" placeholder="Nama Pengguna" required 
                    aria-label="Nama Pengguna"
                    class="w-full px-4 py-2 text-gray-900 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Input Password -->
            <div class="relative">
                <label for="password" class="sr-only">Kata Sandi</label>
                <input id="password" type="password" name="password" placeholder="Kata Sandi" required 
                    aria-label="Kata Sandi"
                    class="w-full px-4 py-2 text-gray-900 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" onclick="togglePassword()">
                    <i id="toggle-password" class="fa fa-eye text-gray-500"></i>
                </span>
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" 
                        class="w-full py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Masuk
                </button>
            </div>
        </form>

        <!-- Link Registrasi -->
        <div class="text-center text-sm text-gray-400">
            Sudah memiliki akun? 
            <a href="{{ route('registrasi') }}" class="font-semibold text-blue-400 hover:underline">DAFTAR</a>
        </div>
    </div>

    <!-- Script Toggle Password -->
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = document.getElementById('toggle-password');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>