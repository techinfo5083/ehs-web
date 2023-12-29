<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use App\Models\Kendaraan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class FormKendaraan extends Component
{
    use LivewireAlert;

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
    public $status = "Terdaftar";

    public $statusForm = true;

    public function render()
    {
        return view('livewire.kendaraan.form-kendaraan');
    }

    private function clearInput()
    {
        $this->nama = null;
        $this->dept = null;
        $this->kategori = null;
        $this->merk = null;
        $this->jenis = null;
        $this->no_plat = null;
        $this->helm = null;
        $this->knalpot = null;
        $this->spion = null;
        $this->plat = null;
        $this->sim = null;
        $this->exp_sim = null;
        $this->stnk = null;
        $this->exp_stnk = null;
        $this->sticker = null;
    }
    public function store()
    {
        $this->validate([
            'nama'          => 'required',
            'dept'          => 'required',
            'kategori'      => 'required',
            'merk'          => 'required',
            'jenis'         => 'required',
            'no_plat'       => 'required|max:10',
            'helm'          => 'required',
            'knalpot'       => 'required',
            'spion'         => 'required',
            'plat'          => 'required',
            'sim'           => 'required',
            'exp_sim'       => 'required',
            'stnk'          => 'required',
            'exp_stnk'      => 'required',
            'sticker'       => 'required',
        ]);

        // dd();
        $kendaraan = Kendaraan::create(
            [
                'nama'      => $this->nama,
                'dept'      => $this->dept,
                'kategori'  => $this->kategori,
                'merk'      => $this->merk,
                'jenis'     => $this->jenis,
                'no_plat'   => $this->no_plat,
                'helm'      => $this->helm,
                'knalpot'   => $this->knalpot,
                'spion'     => $this->spion,
                'plat'      => $this->plat,
                'sim'       => $this->sim,
                'exp_sim'   => $this->exp_sim,
                'stnk'      => $this->stnk,
                'exp_stnk'  => $this->exp_stnk,
                'sticker'   => $this->sticker,
                'status'   => $this->status,
            ]
        );
        
        $this->clearInput();
        $this->emit('loadDataKendaraan', $kendaraan);
    }

    public function statusFormFalse()
    {
        $this->statusForm = false;
    }

    public function statusFormTrue()
    {
        $this->statusForm = true;
    }
}
