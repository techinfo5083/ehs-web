<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use App\Models\Kendaraan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShowKendaraan extends Component
{
    use LivewireAlert;

    protected $listeners = [
        'loadDataKendaraanUpdate',
        'getDetailKendaraan'
    ];


    public $nama;
    public $dept;
    public $kategori;
    public $merk;
    public $jenis;
    public $no_plat;
    public $helm;
    public $knalpot;
    public $spion;
    public $plat;
    public $sim;
    public $exp_sim;
    public $stnk;
    public $exp_stnk;
    public $sticker;
    public $kendaraanId;

    public function render()
    {
        $data = [
            'tittle' => 'Detail Kendaraan',
            'dataKendaraan' => Kendaraan::all()
        ];
        return view('livewire.kendaraan.show-kendaraan', $data);
    }

    public function getDetailKendaraan($kendaraan)
    {
        $this->nama         = $kendaraan['nama'];
        $this->dept         = $kendaraan['dept'];
        $this->kategori     = $kendaraan['kategori'];
        $this->merk         = $kendaraan['merk'];
        $this->jenis        = $kendaraan['jenis'];
        $this->no_plat      = $kendaraan['no_plat'];
        $this->helm         = $kendaraan['helm'];
        $this->knalpot      = $kendaraan['knalpot'];
        $this->spion        = $kendaraan['spion'];
        $this->plat         = $kendaraan['plat'];
        $this->sim          = $kendaraan['sim'];
        $this->exp_sim      = $kendaraan['exp_sim'];
        $this->stnk         = $kendaraan['stnk'];
        $this->exp_stnk     = $kendaraan['exp_stnk'];
        $this->sticker      = $kendaraan['sticker'];
        $this->kendaraanId  = $kendaraan['id'];
    }

    public function statusCardClose()
    {
        $this->emit('statusCardClose');
    }

    
}
