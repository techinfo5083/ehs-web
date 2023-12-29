<div class="container-fluid">
    @if($statusUpdate)
    @livewire('cari-kendaraan.update-kendaraan')
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <h4>Cari Data Kendaraan</h4>
                </div>
                <div class="col-lg-5">
                    <input type="text" class="form-control" wire:model="search" placeholder="Cari PLat Nomor.......">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col mb-2">
                <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-sm" style="width: 100%;">
                    <tr class="text-center">
                        <th rowspan="2">#</th>
                        <th rowspan="2">NAMA</th>
                        <th rowspan="2">DEPT</th>
                        <th rowspan="2">JENIS MOTOR</th>
                        <th rowspan="2">NO PLAT</th>
                        <th colspan="4">KELENGKAPAN SURAT</th>
                        <th rowspan="2">STATUS</th>
                        <th rowspan="2">AKSI</th>
                        <tr class="text-center">
                            <th class="bg-primary text-light">SIM</th>
                            <th class="bg-primary text-light">EXP</th>
                            <th class="bg-success text-light">STNK</th>
                            <th class="bg-success text-light">EXP</th>
                        </tr>
                    </tr>
                    @php $i = 1 + ($paginate * ($currentPage - 1)); @endphp
                    @foreach($DataKendaraan as $kendaraan)
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
                        <td>{{date('d/m/Y', strtotime($kendaraan->exp_sim))}}</td>
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
                        <td>{{date('d/m/Y', strtotime($kendaraan->exp_stnk))}}</td>
                        @if($kendaraan->status == "Terdaftar")
                        <td class="bg-success text-light font-weight-bold">Terdaftar</td>
                        @else
                        <td class="bg-danger text-light font-weight-bold">Tidak Terdaftar</td>
                        @endif
                        <td>
                            <button class="btn btn-info btn-sm" wire:click="getKendaraan({{ $kendaraan->id }})"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>                    
                    @endforeach
                </table>
                {{ $DataKendaraan->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>