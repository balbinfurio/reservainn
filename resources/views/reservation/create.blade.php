@extends('layouts.main_template')

@section('content')
<h4> CREAR RESERVA </h4>

<form action="/reservations" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Número Reserva</label>
        <input id="reservation_number" name="reservation_number" type="number" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Pedido</label>
        <input id="purchase_date" name="purchase_date" type="date" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="agency_id" class="form-label">Agencia</label>
        <select id="agency_id" name="agency_id" class="form-control" tabindex="3">
            @foreach($agencies as $agency)
                <option value="{{ $agency->id }}">{{ $agency->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="hotel_id" class="form-label">Hotel</label>
        <select id="hotel_id" name="hotel_id" class="form-control" tabindex="4">
            @foreach($hotels as $hotel)
                <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1</label>
        <input id="x1" name="x1" type="number" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2</label>
        <input id="x2" name="x2" type="number" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3</label>
        <input id="x3" name="x3" type="number" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4</label>
        <input id="x4" name="x4" type="number" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5</label>
        <input id="x5" name="x5" type="number" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6</label>
        <input id="x6" name="x6" type="number" class="form-control" tabindex="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"># Niños</label>
        <input id="kids_number" name="kids_number" type="number" class="form-control" tabindex="11">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Titular</label>
        <input id="client_name" name="client_name" type="text" class="form-control" tabindex="12">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Documento de Identidad</label>
        <input id="document_number" name="document_number" type="number" class="form-control" tabindex="13">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ingreso</label>
        <input id="check_in" name="check_in" type="datetime-local" class="form-control" tabindex="14">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Salida</label>
        <input id="check_out" name="check_out" type="datetime-local" class="form-control" tabindex="15">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Temporada</label>
        <select id="season" name="season" class="form-control" tabindex="16">
            <option value="alta">Alta</option>
            <option value="baja">Baja</option>
        </select>
    </div>
    
    
    <button type="submit" class="btn btn-info" tabindex="17">Guardar</button>
</form>

@endsection
{{--<div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="phone" name="phone" type="number" class="form-control" tabindex="4">
</div>
<div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="city" name="city" type="text" class="form-control" tabindex="5">
</div>
<div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="mail" name="mail" type="text" class="form-control" tabindex="6">
</div>
<a href="/agencies" class="btn btn-secondary" tabindex="7">Cancelar</a> --}}
