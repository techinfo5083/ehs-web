<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use App\Models\Kendaraan;

class UpdateKendaraan extends Component
{
    protected $listeners =
    [
        'getKendaraan'
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
        return view('livewire.kendaraan.update-kendaraan');
    }

    public function getKendaraan($kendaraan)
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

    public function update()
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

        if ($this->kendaraanId) {
            $kendaraan = Kendaraan::find($this->kendaraanId);
            $kendaraan->update(
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
                ]
            );
        }
        $this->clearInput();
        $this->emit('loadDataKendaraanUpdate', $kendaraan);
    }
}
