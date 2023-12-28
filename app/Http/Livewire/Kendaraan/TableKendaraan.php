<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use App\Models\Kendaraan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class TableKendaraan extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $search;
    public $statusUpdate = false;
    public $statusCardInfo = false;

    protected $listeners = [
        'loadDataKendaraan',
        'loadDataKendaraanUpdate',
        'statusCardClose'
    ];

    public function render()
    {
        $kendaraan = $this->search === null ?
            Kendaraan::latest()->paginate($this->paginate) :
            Kendaraan::all()->paginate($this->paginate);
        $data = [
            'tittle' => 'Kendaraan',
            'dataKendaraan' => $kendaraan
        ];
        return view('livewire.kendaraan.table-kendaraan', $data);
    }

    public function loadDataKendaraan($kendaraan)
    {
        $this->alert('success', 'Data ' . $kendaraan['nama'] . ' Berhasil Ditambahkan!', [
            'position' => 'center',
            // 'timer' => 3000,
            'toast' => false,
            'timerProgressBar' => false,
        ]);
    }

    public function loadDataKendaraanUpdate($kendaraan)
    {
        $this->statusUpdate = false;
        $this->alert('success', 'Data ' . $kendaraan['nama'] . ' Berhasil Ditambahkan!', [
            'position' => 'center',
            // 'timer' => 3000,
            'toast' => false,
            'timerProgressBar' => false,
        ]);
    }

    public function statusCardClose()
    {
        $this->statusCardInfo = false;
    }

    public function getKendaraan($id)
    {
        $this->statusUpdate = true;
        $kendaraan = Kendaraan::find($id);
        $this->emit('getKendaraan', $kendaraan);
    }

    public function getDetailKendaraan($id)
    {
        $this->statusCardInfo = true;
        $kendaraan = Kendaraan::find($id);
        $this->emit('getDetailKendaraan', $kendaraan);
    }

    public function destroy($id)
    {
        Kendaraan::find($id)->delete();
        $this->alert('success', 'Data Kendaraan Berhasil Dihapus!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]);

           redirect('/dashboard/kendaraan');
    }
}
