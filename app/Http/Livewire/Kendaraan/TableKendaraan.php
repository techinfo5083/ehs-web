<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use App\Models\Kendaraan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TableKendaraan extends Component
{
    use LivewireAlert;

    protected $listeners = [
        'loadDataKendaraan'
    ];

    public function render()
    {
        $data = [
            'tittle' => 'Kendaraan',
            'dataKendaraan' => Kendaraan::all()
        ];
        return view('livewire.kendaraan.table-kendaraan', $data);
    }

    public function loadDataKendaraan($kendaraan)
    {
    }

    public function destroy($id)
    {
        Kendaraan::find($id)->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'warning',
            'showCancelButton' => true,
            'message' => "Category Deleted Successfully!!"
        ]);
    }
}
