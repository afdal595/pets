<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Pet Guild</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-red-500 to-indigo-600 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-4xl w-full">
        <!-- Hero Section -->
        <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 md:p-12 shadow-2xl text-center text-white mb-8">
            <div class="animate-fadeIn">
                <i class="fas fa-paw text-6xl mb-6 text-white/90"></i>
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to Pet Guild</h1>
                <p class="text-xl md:text-2xl text-white/80 mb-8">Sistem Informasi Hewan Peliharaan Terlengkap</p>
                <p class="text-xl md:text-2xl text-white/80 mb-8">DIBUAT OLEH M.AFDHAL HAMDAN AL-JAEDY</p>
                
                <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('home') }}" 
                       class="bg-white text-purple-600 hover:bg-purple-50 px-8 py-3 rounded-full text-lg font-semibold transition-all hover:shadow-lg hover:scale-105 flex items-center gap-2">
                        <i class="fas fa-home"></i>
                        Lihat Website
                    </a>
                    <a href="{{ route('admin.login') }}" 
                       class="bg-purple-600 text-white hover:bg-purple-700 px-8 py-3 rounded-full text-lg font-semibold transition-all hover:shadow-lg hover:scale-105 flex items-center gap-2">
                        <i class="fas fa-user-shield"></i>
                        Login Admin
                    </a>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-white text-center hover:transform hover:scale-105 transition-all">
                <i class="fas fa-dog text-3xl mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Informasi Ras</h3>
                <p class="text-white/80">Temukan informasi lengkap tentang berbagai ras hewan peliharaan</p>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-white text-center hover:transform hover:scale-105 transition-all">
                <i class="fas fa-store text-3xl mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Petshop</h3>
                <p class="text-white/80">Rekomendasi petshop terpercaya di sekitar Anda</p>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-white text-center hover:transform hover:scale-105 transition-all">
                <i class="fas fa-heart text-3xl mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Perawatan</h3>
                <p class="text-white/80">Tips dan panduan merawat hewan peliharaan</p>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>
</body>
</html>
