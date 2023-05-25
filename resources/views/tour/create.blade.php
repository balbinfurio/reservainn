@extends('layouts.main_template')

@section('content')

<h4> AGREGAR TOUR </h4>

<form action="/tours" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="city_id" class="form-label">Ciudad</label>
        <select id="city_id" name="city_id" class="form-control" tabindex="3">
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>
    
    <a href="/tours" class="btn btn-secondary" tabindex="2">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="3">Guardar</button>
</form>

@endsection