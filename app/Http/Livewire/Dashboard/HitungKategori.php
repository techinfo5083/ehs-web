<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kendaraan;

class HitungKategori extends Component
{
    public function render()
    {
        $motor = Kendaraan::select('kategori')->where('kategori', 'Motor')->count();
        $mobil = Kendaraan::select('kategori')->where('kategori', 'Mobil')->count();
        // dd($JumlahKategori);
        $data = [
            'JumlahMotor' => $motor,
            'JumlahMobil' => $mobil
        ];
        return view('livewire.dashboard.hitung-kategori', $data);
    }
}
