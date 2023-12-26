<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kendaraan;
use Carbon\Carbon;

class ExpiredPajakMotor extends Component
{
    public $bulan;

    public function render()
    {
        $data = [
            'tittle' => 'Dashboard Kendaraan',
            'dataKendaraan' => Kendaraan::all()
        ];
        return view('livewire.dashboard.expired-pajak-motor', $data);
    }

    public function getMonth()
    {
        $kendaraan = Kendaraan::select('*');
        $kendaraan-> whereMonth('exp_sim', Carbon::now()->month())->get();

        dd($kendaraan);
        return $this->bulan = $kendaraan;
    }
}
