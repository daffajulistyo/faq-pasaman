<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uppp;
use App\Models\Penilaian;
use App\Models\VariabelPenilaian;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();


        return view('admin.home.dashboard');
    }

    private function getPredikat($nilai)
    {
        if ($nilai >= 81) return ['A', 'success', 'Kualitas Tertinggi'];
        if ($nilai >= 49) return ['B', 'primary', 'Kualitas Tinggi'];
        if ($nilai >= 26) return ['C', 'warning', 'Kualitas Sedang'];
        return ['D', 'danger', 'Kualitas Rendah'];
    }
}
