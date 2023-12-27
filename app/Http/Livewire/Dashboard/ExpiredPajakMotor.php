<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kendaraan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ExpiredPajakMotor extends Component
{
    public $bulan;

    protected $listeners =
    [
        'loadBulanPajak'
    ];

    public function render()
    {
        $stnk = Kendaraan::all();
        $data = [
            'tittle' => 'Dashboard Kendaraan',
            'dataStnk' => $stnk,

        ];
        return view('livewire.dashboard.expired-pajak-motor', $data);
    }
}
