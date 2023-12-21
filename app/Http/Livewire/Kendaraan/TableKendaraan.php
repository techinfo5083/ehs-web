<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use App\Models\Kendaraan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TableKendaraan extends Component
{
    use LivewireAlert;
    public $statusUpdate = false;

    protected $listeners = [
        'loadDataKendaraan',
        'loadDataKendaraanUpdate'
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
        $this->alert('success', 'Data '. $kendaraan['nama'] .' Berhasil Ditambahkan!', [
            'position' => 'center',
            // 'timer' => 3000,
            'toast' => false,
            'timerProgressBar' => false,
        ]);
    }

    public function loadDataKendaraanUpdate($kendaraan)
    {
        $this->statusUpdate = true;
        $this->alert('success', 'Data '. $kendaraan['nama'] .' Berhasil Ditambahkan!', [
            'position' => 'center',
            // 'timer' => 3000,
            'toast' => false,
            'timerProgressBar' => false,
        ]);
    }

    public function getKendaraan($id)
    {
        $this->statusUpdate = true;
        $kendaraan = Kendaraan::find($id);
        $this->emit('getKendaraan', $kendaraan);
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
