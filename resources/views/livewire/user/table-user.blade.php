<div class="row">
    <div class="col-lg-7  mb-2">
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
                            <th>USERNAME</th>
                            <th>ROLE</th>
                            <th>AKSI</th>
                        </tr>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($DataUser as $data)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->role }}</td>
                            <td>
                                @if($data->name == Auth()->user()->name)
                                <button class="btn btn-danger btn-sm"><i class="fas fa-lock"></i></button>
                                @else
                                <button type="button" class="btn btn-danger" wire:click="destroy({{ $data->id }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                                @endif
                                |
                                <button class="btn btn-info btn-sm" wire:click="getUser({{ $data['id'] }})">
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
    <div class="col-lg-5  mb-2">
        @if($statusUpdate)
        @livewire('user.update-user')
        @else
        @livewire('user.form-user')
        @endif
    </div>
</div>