@extends('layouts.main_template')

@section('content')

<h4> Agregar ticket </h4>

<form action="/tickets" method="POST">
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
        <label for="agency_id" class="form-label">Agencia</label>
        <select id="agency_id" name="agency_id" class="form-control" tabindex="3">
            @foreach($agencies as $agency)
                <option value="{{ $agency->id }}">{{ $agency->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Viaje</label>
        <input id="travel_date" name="travel_date" type="date" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Número Viaje</label>
        <input id="travel_number" name="travel_number" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Estado de Viaje</label>
        <select id="status" name="status" class="form-control">
            <option value="VENCIDO">VENCIDO</option>
            <option value="POR VENCER">POR VENCER</option>
            <option value="CON TIEMPO">CON TIEMPO</option>
            <option value="VIAJÓ">VIAJÓ</option>
        </select>
    </div>
    
    
    <a href="/tickets" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-info">Guardar</button>
</form>

@endsection