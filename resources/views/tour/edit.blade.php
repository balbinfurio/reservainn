@extends('layouts.main_template')

@section('content')
<h1> EDIT TOUR</h1>

<form action="/tours/{{ $tour->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ $tour->name }}">
    </div>

    <div class="mb-3">
        <label for="city_id" class="form-label">Ciudad</label>
        <select id="city_id" name="city_id" class="form-control">
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>

    <a href="/tours" class="btn btn-secondary" >Cancelar</a>
    <button type="submit" class="btn btn-info" ">Guardar</button>

</form>

@endsection