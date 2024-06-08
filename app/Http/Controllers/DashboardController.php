<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Bus;
use App\Models\Rute;
use App\Models\Pesanan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = Pengguna::count();
        $totalBus = Bus::count();
        $totalRoutes = Rute::count();
        $totalOrders = Pesanan::count();
        $totalRevenue = Rute::sum('harga');

        return view('layout/dashboard', compact('totalUsers', 'totalBus', 'totalRoutes', 'totalOrders', 'totalRevenue'));
    }
}