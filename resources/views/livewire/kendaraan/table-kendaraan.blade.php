<div class="container-fluid">
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
                        <td>{{$kendaraan->sim}}</td>
                        <td>{{$kendaraan->sim}}</td>
                        <td>{{$kendaraan->exp_sim}}</td>
                        <td>{{$kendaraan->stnk}}</td>
                        <td>{{$kendaraan->exp_stnk}}</td>
                        <td>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>