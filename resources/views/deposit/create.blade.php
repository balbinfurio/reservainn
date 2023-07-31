@extends('layouts.main_template')

@section('content')
<h4> CREAR ABONOS </h4>

<form action="/deposits" method="POST">
    @csrf
    <div class="mb-3">
        <label for="reservation_id" class="form-label">Numero de Reserva</label>
        <select id="reservation_id" name="reservation_id" class="form-control">
            @foreach($reservations as $reservation)
                <option value="{{ $reservation->id }}">{{ $reservation->reservation_number }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #1</label>
        <input id="deposit_1" name="deposit_1" type="number" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Abono #2</label>
        <input id="deposit_2" name="deposit_2" type="number" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Abono #3</label>
        <input id="deposit_3" name="deposit_3" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #4</label>
        <input id="deposit_4" name="deposit_4" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #5</label>
        <input id="deposit_5" name="deposit_5" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #6</label>
        <input id="deposit_6" name="deposit_6" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #7</label>
        <input id="deposit_7" name="deposit_7" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #8</label>
        <input id="deposit_8" name="deposit_8" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #9</label>
        <input id="deposit_9" name="deposit_9" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Abono #10</label>
        <input id="deposit_10" name="deposit_10" type="number" class="form-control">
    </div>

    <a href="/deposits" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-info">Guardar</button>
</form>

@endsection