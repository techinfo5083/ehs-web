@extends('layout.app')
@section('content')

<div class="row">
    @livewire('kendaraan.form-kendaraan')
    @livewire('kendaraan.table-kendaraan')
</div>

@endSection()