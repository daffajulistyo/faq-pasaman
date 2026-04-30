<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    <div class="text-center max-w-md mx-auto">
        <!-- 404 Number -->
        <div class="mb-8">
            <h1 class="text-8xl md:text-9xl font-bold text-indigo-600 mb-4">404</h1>
            <div class="w-24 h-1 bg-indigo-600 mx-auto rounded-full"></div>
        </div>
        
        <!-- Error Message -->
        <div class="mb-8">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">
                Halaman Tidak Ditemukan
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                Maaf, halaman yang Anda cari tidak dapat ditemukan. 
                Mungkin halaman telah dipindahkan atau URL tidak valid.
            </p>
        </div>
        
        <!-- Action Buttons -->
        <div class="space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center">
            <button 
                onclick="history.back()" 
                class="w-full md:w-auto px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
                Kembali
            </button>
            <button 
                onclick="window.location.href='/'" 
                class="w-full md:w-auto px-6 py-3 bg-white text-indigo-600 font-medium rounded-lg border-2 border-indigo-600 hover:bg-indigo-50 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
                Ke Beranda
            </button>
        </div>
        
        <!-- Decorative Elements -->
        <div class="mt-12 opacity-30">
            <div class="flex justify-center space-x-2">
                <div class="w-3 h-3 bg-indigo-400 rounded-full animate-bounce"></div>
                <div class="w-3 h-3 bg-indigo-400 rounded-full animate-bounce" style="animation-delay: 0.1s;"></div>
                <div class="w-3 h-3 bg-indigo-400 rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
            </div>
        </div>
    </div>
</body>
</html>