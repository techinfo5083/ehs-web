<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kendaraan;
use Illuminate\Support\Carbon;

class ExpiredSimMotor extends Component
{
    public function render()
    {
        $sim = Kendaraan::all();
        $data = [
            'tittle' => 'Dashboard Kendaraan',
            'dataSim' => $sim,

        ];
        return view('livewire.dashboard.expired-sim-motor', $data);
    }
}
