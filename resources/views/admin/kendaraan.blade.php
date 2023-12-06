@extends('layout.app')
@section('content')

<div class="row">
    @livewire('kendaraan.table-kendaraan')
    @livewire('kendaraan.form-kendaraan')
</div>

@endSection()