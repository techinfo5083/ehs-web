<div class="col-lg-7 col-md-6 col-sm-6 mb-2">
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-light">Data User</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr class="text-center bg-warning text-light">
                        <th>#</th>
                        <th>NIK</th>
                        <th>ROLE</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>AKSI</th>
                    </tr>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($DataUser as $data)
                    <tr class="text-center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->role}}</td>
                        <td>{{ $data->name }}</td>
                        <td><button class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button></td>
                        <td>
                            <button class="btn btn-danger btn-sm" id="" wire:click="destroy({{ $data->id }})">
                                <i class="fas fa-trash"></i>
                            </button>
                            |
                            <button class="btn btn-info btn-sm" wire:click="getUserId( {{ $data->id  }} )">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>