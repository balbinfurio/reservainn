@extends('layouts.main_template')

@section('content')
<h4> CREAR ABONOS </h4>

<form action="/deposits" method="POST">
    @csrf
    <div class="mb-3">
        <label for="reservation_id" class="form-label">Numero de Reserva</label>
        <select id="reservation_id" name="reservation_id" class="form-control" tabindex="3">
            @foreach($reservations as $reservation)
                <option value="{{ $reservation->id }}">{{ $reservation->reservation_number }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #1</label>
        <input id="deposit_1" name="deposit_1" type="number" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Abono #2</label>
        <input id="deposit_2" name="deposit_2" type="number" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Abono #3</label>
        <input id="deposit_3" name="deposit_3" type="number" class="form-control" tabindex="2">
    </div>

    <a href="/deposits" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="8">Guardar</button>
</form>

@endsection