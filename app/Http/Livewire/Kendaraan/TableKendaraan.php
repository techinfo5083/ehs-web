<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use App\Models\Kendaraan;
class TableKendaraan extends Component
{
    protected $listeners = [
        'loadDataKendaraan'
    ];
    public function render()
    {   
        $data = [
            'dataKendaraan' => Kendaraan::all()
        ];
        return view('livewire.kendaraan.table-kendaraan', $data);
    }

    public function loadDataKendaraan($kendaraan){
        
    }
}
