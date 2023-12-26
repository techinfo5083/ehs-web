<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'tittle' => 'Dashboard',
            'DataKendaraan' => Kendaraan::all()
        ];
        return view('admin.dashboard', $data);
    }
}
