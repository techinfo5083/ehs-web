<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Form Tambah Kendaraan
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" />
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select class="form-control" id="department">
                            <option>--Pilih--</option>
                            <option>Stamping</option>
                            <option>Welding</option>
                            <option>PE</option>
                            <option>QA</option>
                            <option>EHS</option>
                            <option>PPIC</option>
                            <option>HR/GA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori">
                            <option>--Pilih--</option>
                            <option>Motor</option>
                            <option>Mobil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="merkKendaraan">Merk Kendaraan</label>
                        <select class="form-control" id="merkKendaraan">
                            <option>--Pilih--</option>
                            <option>Yamaha</option>
                            <option>Honda</option>
                            <option>Suzuki</option>
                            <option>Kawasaki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sim">Jenis Motor</label>
                        <input type="text" class="form-control" id="" />
                    </div>
                    <div class="form-group">
                        <label for="sim">No.Plat</label>
                        <input type="text" class="form-control" id="" />
                    </div>

                    <label for="">*Kelengkapan</label>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="">
                                <label class="form-check-label" for="">Helm</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="">
                                <label class="form-check-label" for="">Spion</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="">
                                <label class="form-check-label" for="">Knalpot</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="">
                                <label class="form-check-label" for="">Plat No</label>
                            </div>
                        </div>
                    </div>
                    <label for="" class="text-center">*Kelengkapan Surat</label>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="">
                                <label class="form-check-label" for="">SIM</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sim">Tgl Expired</label>
                                <input type="date" class="form-control" id="sim" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="">
                                <label class="form-check-label" for="">STNK</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sim">Tgl Expired</label>
                                <input type="date" class="form-control" id="" />
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">
                    Reset
                </button>
                <button type="button" class="btn btn-primary">
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>