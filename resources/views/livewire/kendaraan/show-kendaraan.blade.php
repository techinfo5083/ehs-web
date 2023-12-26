<div class="container mb-3">
    <div class="card">
        <div class="card-header">
        <div class="row">
                <div class="col-lg-10">
                    <h5>Detail Kendaraan</h5>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-danger float-end" wire:click="statusCardClose()">Tutup</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama : <b>{{$nama}}</b></li>
                        <li class="list-group-item">Department : <b>{{$dept}}</b></li>
                        <li class="list-group-item">kategori : <b>{{$kategori}}</b></li>
                        <li class="list-group-item">Merk Kendaraan : <b>{{$merk}}</b></li>
                        <li class="list-group-item">Jenis Motor : <b>{{$jenis}}</b></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Plat Nomor : <b>{{$no_plat}}</b></li>
                        <li class="list-group-item">Jenis Motor : <b>{{$jenis}}</b></li>
                        <li class="list-group-item">Kondisi Sticker : <b>{{$sticker}}</b></li>
                        <li class="list-group-item">Helm : <b>{{$helm}}</b></li>
                        <li class="list-group-item">Spion : <b>{{$spion}}</b></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Knalpot : <b>{{$knalpot}}</b></li>
                        <li class="list-group-item">PLat Nomor : <b>{{$plat}}</b></li>
                        <li class="list-group-item">SIM: <b>{{$sim}}</b></li>
                        <li class="list-group-item">EXP SIM: <b>{{$exp_sim}}</b></li>
                        <li class="list-group-item">STNK: <b>{{$stnk}}</b></li>
                        <li class="list-group-item">EXP STNK: <b>{{$exp_stnk}}</b></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>