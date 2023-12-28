<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class CheckKendaraanController extends Controller
{
    public function index()
    {
        $data = [
            'tittle' => 'Dashboard | Check Kendaraan',
            'DataKendaraan' => Kendaraan::all()
        ];
        return view('admin.check-kendaraan', $data);
    }
}
