@extends('layout.app')
@section('content')

<!-- Content Row -->
<div class="row justify-content-center">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-4 col-sm-4 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Motor
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              200
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-4 col-sm-4 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
              MOBIL
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              50
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-car fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Row -->

<!-- Content Row -->
<div class="row">
  <div class="col-lg-6 col-md-6">
    <div class="card shadow mb-4">
      <div class="card-header bg-warning py-3">
        <div class="row">
          <div class="col-10 col-sm-11 col-md-11">
            <h6 class="font-weight-bold text-light float-none">
              Peringatan Pajak Motor
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
        <div class="table table-responsive">
          <table class="table table-striped table-hover">
            <tr class="bg-info text-light text-center">
              <th>#</th>
              <th>NAMA</th>
              <th>DEPT</th>
              <th>BULAN</th>
              <th>TAHUN</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Acep Sutisna</td>
              <td>Stamping</td>
              <td>November</td>
              <td>2023</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Rizki Fauzi</td>
              <td>Stamping</td>
              <td>November</td>
              <td>2023</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Bayu</td>
              <td>Welding</td>
              <td>November</td>
              <td>2023</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Sofyan</td>
              <td>Pe</td>
              <td>November</td>
              <td>2023</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

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
        <div class="table table-responsive">
          <table class="table table-striped table-hover">
            <tr class="bg-info text-light text-center">
              <th>#</th>
              <th>NAMA</th>
              <th>DEPT</th>
              <th>BULAN</th>
              <th>TAHUN</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Acep Sutisna</td>
              <td>Stamping</td>
              <td>November</td>
              <td>2023</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Rizki Fauzi</td>
              <td>Stamping</td>
              <td>November</td>
              <td>2023</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Bayu</td>
              <td>Welding</td>
              <td>November</td>
              <td>2023</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Sofyan</td>
              <td>Pe</td>
              <td>November</td>
              <td>2023</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endSection()