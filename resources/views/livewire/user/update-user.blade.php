<div class="card">
    <div class="card-header">
        <h5>Update User</h5>
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
        <form wire:submit.prevent="update">
            @csrf
            <input type="hidden" wire:model="userId">
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
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" wire:model="name" />
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger float-end" type="reset">
                Reset
            </button>
            <button type="submit" class="btn btn-primary float-end">
                Ubah
            </button>
        </form>
    </div>
</div>