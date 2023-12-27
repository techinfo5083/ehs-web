<div class="col-lg-6 col-md-6">
    <div class="card shadow mb-4">
        <div class="card-header bg-warning py-3">
            <div class="row">
                <div class="col-10 col-sm-11 col-md-11">
                    <h6 class="font-weight-bold text-light float-none">
                        Peringatan Berakhirnya SIM
                    </h6>
                </div>
                <div class="col-2 col-sm-1 col-md-1">
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-file-download"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            @foreach($dataSim as $data)
            @if(\Carbon\Carbon::parse($data->exp_sim)->diffForHumans() == "1 bulan dari sekarang")
            <div class="table table-responsive">
                <table class="table table-striped table-hover">
                    <tr class="bg-info text-light text-center">
                        <th>#</th>
                        <th>NAMA</th>
                        <th>DEPT</th>
                        <th>BULAN/TANGGAL</th>
                        <th>TAHUN</th>
                    </tr>
                    <tr class="text-center">
                        <td>1</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->dept }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->exp_sim)->diffForHumans() }}</td>
                        <td>{{ date('Y', strtotime($data->exp_sim)) }}</td>
                    </tr>
                </table>
            </div>
            @else
            @endif
            @endforeach
            <div class="alert alert-danger text-center" role="alert">
                Data Tidak Ditemukan!
            </div>
        </div>
    </div>
</div>