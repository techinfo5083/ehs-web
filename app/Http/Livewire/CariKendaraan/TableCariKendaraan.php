<?php

namespace App\Http\Livewire\CariKendaraan;

use Livewire\Component;
use App\Models\Kendaraan;
use Livewire\WithPagination;

class TableCariKendaraan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $search = "";
    public $statusUpdate;

    public function render()
    {
        $kendaraan = $this->search === null ?
            Kendaraan::latest()->paginate($this->paginate) :
            Kendaraan::where('no_plat', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        $data = [
            'tittle' => 'Dashboard | Check Kendaraan',
            'DataKendaraan' => $kendaraan,
            'currentPage' => $kendaraan->currentPage()
        ];
        return view('livewire.cari-kendaraan.table-cari-kendaraan', $data);
    }

    public function getKendaraan($id)
    {
        $this->statusUpdate = true;
        $kendaraan = Kendaraan::find($id);
        $this->emit('getKendaraan', $kendaraan);
    }


}
