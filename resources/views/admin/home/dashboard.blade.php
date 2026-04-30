@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <!-- Welcome Header dengan Animasi -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card bg-gradient-primary text-white overflow-hidden">
                        <div class="card-body p-5">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h1 id="current-time" class="display-3 fw-bold mb-2">00:00:00</h1>
                                    <h2 id="current-date" class="h4 mb-4">Hari, DD MMMM YYYY</h2>
                                    <h3 class="mb-3">Selamat Datang, {{ auth()->user()->name }}!</h3>
                                    <p class="lead mb-0">Sistem Penilaian Pelayanan Publik Kabupaten Pasaman</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="floating-icon">
                                        <i class="bi bi-graph-up-arrow display-1 opacity-25"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    }
    .bg-gradient-success {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%) !important;
    }
    .bg-gradient-info {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%) !important;
    }
    .bg-gradient-warning {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%) !important;
    }
    .bg-gradient-secondary {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
    }

    .card-statistic {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-statistic:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .ranking-item {
        padding: 10px;
        border-radius: 10px;
        background: #f8f9fa;
    }

    .rank-number {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #6c757d;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .rank-number.top-three {
        background: #ffc107;
    }

    .rank-number:first-child {
        background: #ff6b6b;
    }

    .rank-number:nth-child(2) {
        background: #4ecdc4;
    }

    .rank-number:nth-child(3) {
        background: #45b7d1;
    }

    .floating-icon {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .display-3 {
        font-size: 3.5rem;
        font-weight: 300;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Update waktu real-time
    function updateDateTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds}`;
        
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        
        const day = days[now.getDay()];
        const date = now.getDate();
        const month = months[now.getMonth()];
        const year = now.getFullYear();
        
        document.getElementById('current-date').textContent = `${day}, ${date} ${month} ${year}`;
    }

    setInterval(updateDateTime, 1000);
    updateDateTime();

    // Chart untuk variabel penilaian
    @if(in_array(auth()->user()->role, ['super admin', 'penilai']) && isset($variabel_data))
    const ctx = document.getElementById('variabelChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($variabel_data->pluck('nama_variabel')) !!},
            datasets: [{
                label: 'Rata-rata Nilai',
                data: {!! json_encode($variabel_data->pluck('rata_rata')) !!},
                backgroundColor: [
                    '#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', 
                    '#ffeaa7', '#fd79a8', '#fdcb6e', '#00b894',
                    '#6c5ce7', '#a29bfe', '#dfe6e9', '#b2bec3'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    title: {
                        display: true,
                        text: 'Nilai'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Variabel Penilaian'
                    }
                }
            }
        }
    });
    @endif
</script>
@endsection