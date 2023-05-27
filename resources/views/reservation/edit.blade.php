@extends('layouts.main_template')

@section('content')
<h1> EDITAR RESERVA </h1>

<form action="/reservations/{{ $reservation->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre Cliente</label>
        <input id="client_name" name="client_name" type="text" class="form-control" value="{{ $reservation->client_name }}">
    </div>

    <a href="/reservations" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-info">Guardar</button>

</form>

<a href="{{ route('reservations.pdf', $reservation->id) }}" target="_blank">Descargar PDF</a>

@endsection