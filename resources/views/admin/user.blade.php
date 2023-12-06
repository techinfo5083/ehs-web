@extends('layout.app')
@section('content')

<div class="row">
    @livewire('user.table-user')
    @livewire('user.form-user')
</div>

@endSection()