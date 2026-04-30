<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Penilaian Pelayanan Publik - Kabupaten Pasaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #60a5fa 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-building text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">Portal Penilaian</h1>
                        <p class="text-sm text-gray-600">Kabupaten Pasaman</p>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#beranda" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                    <a href="#layanan" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Layanan</a>
                    <a href="#statistik" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Statistik</a>
                    <a href="#kontak" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Kontak</a>
                </nav>
                <button class="md:hidden">
                    <i class="fas fa-bars text-gray-700"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="hero-gradient text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center fade-in-up">
                <h2 class="text-5xl font-bold mb-6">Portal Penilaian Pelayanan Publik</h2>
                <p class="text-xl mb-8 opacity-90">Kabupaten Pasaman</p>
                <p class="text-lg mb-12 max-w-3xl mx-auto opacity-80">
                    Wujudkan pelayanan publik yang berkualitas melalui penilaian dan feedback dari masyarakat.
                    Bersama membangun Pasaman yang lebih baik.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">
                        <i class="fas fa-star mr-2"></i>
                        Beri Penilaian
                    </button>
                    <button class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all transform hover:scale-105">
                        <i class="fas fa-chart-bar mr-2"></i>
                        Lihat Hasil
                    </button>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1200 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1200 120L0 120V0C400 0 800 120 1200 0V120Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center card-hover p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-blue-600 mb-2">2,847</h3>
                    <p class="text-gray-600">Total Responden</p>
                </div>
                <div class="text-center card-hover p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-xl">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-green-600 mb-2">24</h3>
                    <p class="text-gray-600">Jenis Layanan</p>
                </div>
                <div class="text-center card-hover p-6 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl">
                    <div class="w-16 h-16 bg-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-yellow-600 mb-2">4.2</h3>
                    <p class="text-gray-600">Rating Rata-rata</p>
                </div>
                <div class="text-center card-hover p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-purple-600 mb-2">87%</h3>
                    <p class="text-gray-600">Tingkat Kepuasan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Layanan yang Dapat Dinilai</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berikan penilaian Anda terhadap berbagai layanan publik di Kabupaten Pasaman
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-id-card text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Kartu Identitas</h3>
                    <p class="text-sm text-gray-600">KTP, KK, Akta Kelahiran</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-medical text-green-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Kesehatan</h3>
                    <p class="text-sm text-gray-600">Puskesmas, RSUD</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Pendidikan</h3>
                    <p class="text-sm text-gray-600">Sekolah, Beasiswa</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-alt text-red-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Perizinan</h3>
                    <p class="text-sm text-gray-600">IMB, SIUP, TDP</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-hand-holding-heart text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Sosial</h3>
                    <p class="text-sm text-gray-600">Bantuan Sosial, PKH</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-car text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Transportasi</h3>
                    <p class="text-sm text-gray-600">SIM, STNK</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-coins text-teal-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Pajak</h3>
                    <p class="text-sm text-gray-600">PBB, Retribusi</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md card-hover">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-plus text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Lainnya</h3>
                    <p class="text-sm text-gray-600">Layanan lainnya</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Cara Memberikan Penilaian</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Proses penilaian yang mudah dan transparan untuk meningkatkan kualitas layanan
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 pulse-animation">
                        <span class="text-white font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pilih Layanan</h3>
                    <p class="text-gray-600">Pilih jenis layanan yang telah Anda terima dari pemerintah Kabupaten Pasaman</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Isi Kuesioner</h3>
                    <p class="text-gray-600">Berikan penilaian berdasarkan pengalaman Anda dengan layanan tersebut</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Kirim & Lihat Hasil</h3>
                    <p class="text-gray-600">Kirim penilaian Anda dan lihat hasil evaluasi secara real-time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Suara Anda Sangat Berharga</h2>
            <p class="text-xl mb-8 opacity-90">
                Mari bersama-sama membangun pelayanan publik yang lebih baik di Kabupaten Pasaman
            </p>
            <button class="bg-white text-blue-600 px-10 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-xl">
                <i class="fas fa-star mr-2"></i>
                Mulai Beri Penilaian Sekarang
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-building text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold">Portal Penilaian</h3>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Sistem penilaian pelayanan publik Kabupaten Pasaman untuk meningkatkan kualitas pelayanan kepada masyarakat.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-blue-400"></i>
                            <span class="text-gray-300">Jl. Lintas Sumatera, Lubuk Sikaping</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span class="text-gray-300">(0753) 21XXX</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span class="text-gray-300">info@pasamankab.go.id</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Link Terkait</h4>
                    <div class="space-y-2">
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">Website Pemkab Pasaman</a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">LAPOR!</a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">Mal Pelayanan Publik</a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">Satu Data Indonesia</a>
                    </div>
                </div>
            </div>
            <hr class="border-gray-700 my-8">
            <div class="text-center text-gray-400">
                <p>&copy; 2025 Pemerintah Kabupaten Pasaman. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('bg-opacity-95');
            } else {
                header.classList.remove('bg-opacity-95');
            }
        });

        // Add animation to stats when they come into view
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card-hover').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>
