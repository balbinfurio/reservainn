@extends('layouts.main_template')

@section('content')
<h1> EDIT DEPOSIT</h1>

<form action="/deposits/{{ $deposit->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Abono #1</label>
        <input id="deposit_1" name="deposit_1" type="number" class="form-control" tabindex="1" value="{{ $deposit->deposit_1 }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Abono #2</label>
        <input id="deposit_2" name="deposit_2" type="number" class="form-control" tabindex="2" value="{{ $deposit->deposit_2 }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Abono #3</label>
        <input id="deposit_3" name="deposit_3" type="number" class="form-control" tabindex="3" value="{{ $deposit->deposit_3 }}">
    </div>

    <a href="/deposits" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="5">Guardar</button>
</form>

{{-- <form action="{{ route('deposit.pdf', $agency->id) }}" method="POST">
    @csrf
    <button type="submit">Descargar PDF</button>
</form> --}}

@endsection