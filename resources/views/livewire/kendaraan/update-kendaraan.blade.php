<div class="container mb-3">
    <div class="card">
        <div class="card-header">
            <h5>Form Ubah Kendaraan</h5>
        </div>
        <div class="card body p-2">
            <form wire:submit.prevent="update">
                @csrf
                <input type="hidden" wire:model="kendaraanId">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" wire:model="nama" />
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="department">Department</label>
                                <select class="form-control @error('dept') is-invalid @enderror" id="department" wire:model="dept">
                                    <option>--Pilih--</option>
                                    <option value="Stamping">Stamping</option>
                                    <option value="Welding">Welding</option>
                                    <option value="PE">PE</option>
                                    <option value="QA">QA</option>
                                    <option value="EHS">EHS</option>
                                    <option value="PPIC">PPIC</option>
                                    <option value="HR/GA">HR/GA</option>
                                    <option value="Maintenance">HR/GA</option>
                                </select>
                                @error('dept')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="kategori">Kategori</label>
                                <select class="form-control @error('kategori') is-invalid @enderror" id="kategori" wire:model="kategori">
                                    <option>--Pilih--</option>
                                    <option value="Motor">Motor</option>
                                    <option value="Mobil">Mobil</option>
                                </select>
                                @error('kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="merkKendaraan">Merk Kendaraan</label>
                                <select class="form-control @error('merk') is-invalid @enderror" id="merkKendaraan" wire:model="merk">
                                    <option>--Pilih--</option>
                                    <option value="Yamaha">Yamaha</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Kawasaki">Kawasaki</option>
                                </select>
                                @error('merk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-4">
                                <label for="sim">Jenis Motor</label>
                                <input type="text" class="form-control" id="" wire:model="jenis" />
                            </div>
                            <div class="form-group col-4">
                                <label for="sim">No.Plat</label>
                                <input type="text" class="form-control" id="" wire:model="no_plat" />
                            </div>
                            <div class="form-group col-4">
                                <label for="sticker">Kondisi Sticker</label>
                                <select class="form-control" id="sticker" wire:model="sticker">
                                    <option>--Pilih--</option>
                                    <option value="OK">OK</option>
                                    <option value="NG">NG</option>
                                    <option value="Belum">Belum Terpasang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="">*Kelengkapan</label>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" value="ok" id="" wire:model="helm">
                                    <label class="form-check-label" for="">Helm</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="" value="ok" wire:model="spion">
                                    <label class="form-check-label" for="">Spion</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="" value="ok" wire:model="knalpot">
                                    <label class="form-check-label" for="">Knalpot</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="" value="ok" wire:model="plat">
                                    <label class="form-check-label" for="">Plat No</label>
                                </div>
                            </div>
                        </div>

                        <label for="" class="text-center">*Kelengkapan Surat</label>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="" value="ok" wire:model="sim">
                                    <label class="form-check-label" for="">SIM</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="" value="ok" wire:model="stnk">
                                    <label class="form-check-label" for="">STNK</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="sim">Tgl Expired</label>
                                    <input type="date" class="form-control" id="sim" wire:model="exp_sim" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="sim">Tgl Expired</label>
                                    <input type="date" class="form-control" id="" wire:model="exp_stnk" />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">
                            Ubah
                        </button>
                        <button type="reset" class="btn btn-danger float-right mr-2">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>