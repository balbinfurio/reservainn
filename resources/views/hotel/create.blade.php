@extends('layouts.main_template')

@section('content')
<h4> CREAR HOTEL </h4>

<form action="/hotels" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="address" name="address" type="text" class="form-control" tabindex="2" required>
    </div>

    <div class="mb-3">
        <label for="city_id" class="form-label">Ciudad</label>
        <select id="city_id" name="city_id" class="form-control" tabindex="3">
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">X1 Precio Coste Alta</label>
        <input id="x1_cost_price_high" name="x1_cost_price_high" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Precio Coste Baja</label>
        <input id="x1_cost_price_low" name="x1_cost_price_low" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Precio Alta</label>
        <input id="x1_high_season" name="x1_high_season" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Precio Baja</label>
        <input id="x1_low_season" name="x1_low_season" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Coste Baja</label>
        <input id="x2_cost_price_high" name="x2_cost_price_high" type="number" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Coste Baja</label>
        <input id="x2_cost_price_low" name="x2_cost_price_low" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Alta</label>
        <input id="x2_high_season" name="x2_high_season" type="number" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Baja</label>
        <input id="x2_low_season" name="x2_low_season" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Coste Alta</label>
        <input id="x3_cost_price_high" name="x3_cost_price_high" type="number" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Coste Baja</label>
        <input id="x3_cost_price_low" name="x3_cost_price_low" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Alta</label>
        <input id="x3_high_season" name="x3_high_season" type="number" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Baja</label>
        <input id="x3_low_season" name="x3_low_season" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Coste Alta</label>
        <input id="x4_cost_price_high" name="x4_cost_price_high" type="number" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Coste Baja</label>
        <input id="x4_cost_price_low" name="x4_cost_price_low" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Alta</label>
        <input id="x4_high_season" name="x4_high_season" type="number" class="form-control" tabindex="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Baja</label>
        <input id="x4_low_season" name="x4_low_season" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Coste Alta</label>
        <input id="x5_cost_price_high" name="x5_cost_price_high" type="number" class="form-control" tabindex="11">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Coste Baja</label>
        <input id="x5_cost_price_low" name="x5_cost_price_low" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Alta</label>
        <input id="x5_high_season" name="x5_high_season" type="number" class="form-control" tabindex="12">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Baja</label>
        <input id="x5_low_season" name="x5_low_season" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Coste Alta</label>
        <input id="x6_cost_price_high" name="x6_cost_price_high" type="number" class="form-control" tabindex="13">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Coste Baja</label>
        <input id="x6_cost_price_low" name="x6_cost_price_low" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Alta</label>
        <input id="x6_high_season" name="x6_high_season" type="number" class="form-control" tabindex="14">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Baja</label>
        <input id="x6_low_season" name="x6_low_season" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descuento Niños</label>
        <input id="kid_discount" name="kid_discount" type="number" class="form-control" tabindex="15">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 1</label>
        <input id="season_start_1" name="season_start_1" type="date" class="form-control" tabindex="5">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 1</label>
        <input id="season_end_1" name="season_end_1" type="date" class="form-control" tabindex="6">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 2</label>
        <input id="season_start_2" name="season_start_2" type="date" class="form-control" tabindex="5">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 2</label>
        <input id="season_end_2" name="season_end_2" type="date" class="form-control" tabindex="6">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 3</label>
        <input id="season_start_3" name="season_start_3" type="date" class="form-control" tabindex="5">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 3</label>
        <input id="season_end_3" name="season_end_3" type="date" class="form-control" tabindex="6">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 4</label>
        <input id="season_start_4" name="season_start_4" type="date" class="form-control" tabindex="5">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 4</label>
        <input id="season_end_4" name="season_end_4" type="date" class="form-control" tabindex="6">
    </div>
    

    <a href="/hotels" class="btn btn-secondary" tabindex="16">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="17">Guardar</button>
</form>

@endsection
