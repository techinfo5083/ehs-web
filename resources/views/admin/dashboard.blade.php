@extends('layout.app')
@section('content')

<!-- Content Row -->
@livewire('dashboard.hitung-kategori')
<!-- Content Row -->

<!-- Content Row -->
<div class="row">
  @livewire('dashboard.expired-pajak-motor')
  @livewire('dashboard.expired-sim-motor')
</div>

@endSection()