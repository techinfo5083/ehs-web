<div class="container-fluid">
    @if($statusUpdate)
    @livewire('kendaraan.update-kendaraan')
    @else
    @livewire('kendaraan.form-kendaraan')
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Data Kendaraan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-sm" style="width: 100%;">
                    <tr class="text-center">
                        <th rowspan="2">#</th>
                        <th rowspan="2">NAMA</th>
                        <th rowspan="2">DEPT</th>
                        <th rowspan="2">JENIS MOTOR</th>
                        <th rowspan="2">NO PLAT</th>
                        <th colspan="4">KELENGKAPAN SURAT</th>
                        <th rowspan="2">AKSI</th>
                    <tr class="text-center">
                        <th class="bg-primary text-light">SIM</th>
                        <th class="bg-primary text-light">EXP</th>
                        <th class="bg-success text-light">STNK</th>
                        <th class="bg-success text-light">EXP</th>
                    </tr>
                    </tr>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($dataKendaraan as $kendaraan)
                    <tr class="text-center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $kendaraan->nama}}</td>
                        <td>{{ $kendaraan->dept}}</td>
                        <td>{{ $kendaraan->jenis}}</td>
                        <td>{{$kendaraan->no_plat}}</td>
                        <td>
                            @php
                                $sim = $kendaraan->sim;
                                if($sim == "ok")
                                {
                                    echo '<i class="fas fa-check"></i>';
                                }else
                                {
                                    echo '<i class="fas fa-times"></i>';
                                }
                            @endphp
                        </td>
                        <td>{{$kendaraan->exp_sim}}</td>
                        <td>
                            @php
                                $stnk = $kendaraan->stnk;
                                if($stnk == "ok")
                                {
                                    echo '<i class="fas fa-check"></i>';
                                }else
                                {
                                    echo '<i class="fas fa-times"></i>';
                                }
                            @endphp
                        </td>
                        <td>{{$kendaraan->exp_stnk}}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" wire:click="destroy({{ $kendaraan->id }})" onclick="return confirm('Yakin Ingin Menghapus data ini?');"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-info btn-sm" wire:click="getKendaraan({{ $kendaraan->id }})"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>