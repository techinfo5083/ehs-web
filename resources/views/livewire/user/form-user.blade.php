<div class="col-lg-5 col-md-6 col-sm-6 mb-2">
    <div class="card">
        <div class="card-header">
            <h5>Tambah User</h5>
        </div>
        <div class="card-body">
            @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form wire:submit.prevent="store">
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" wire:model="nik" value="{{ old('nik') }}" />
                    @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Pilih Role</label>
                    <select class="form-control @error('role') is-invalid @enderror" id="role" wire:model="role">
                        <option>--Pilih Role---</option>
                        <option value="Master">Master Admin</option>
                        <option value="Admin">Admin</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" wire:model="name" value="{{ old('name') }}" />
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password" value="{{ old('password') }}" />
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-danger float-end" type="reset">
                    Reset
                </button>
                <button type="submit" class="btn btn-primary float-end">
                    Tambah
                </button>
            </form>
        </div>
    </div>
</div>