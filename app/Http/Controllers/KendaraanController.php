<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KendaraanController extends Controller
{
    public function index()
    {
        $data = [
            'tittle' => 'Dashboard | Kendaraan',
            'DataUser' => user::all()
        ];

        return view('admin.kendaraan', $data);
    }
}
