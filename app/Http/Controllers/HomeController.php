<?php

namespace App\Http\Controllers;

use App\Models\Ambulans;
use App\Models\Puskesmas;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index' );
    }
}
