@extends('layouts.main_template')

@section('content')
<h1> EDIT HOTEL </h1>

<form action="/hotels/{{ $hotel->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ $hotel->name }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="address" name="address" type="text" class="form-control" value="{{ $hotel->address }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Precio Coste Alta</label>
        <input id="x1_cost_price_high" name="x1_cost_price_high" type="text" class="form-control" value="{{ $hotel->x1_cost_price_high }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Precio Coste Baja</label>
        <input id="x1_cost_price_low" name="x1_cost_price_low" type="text" class="form-control" value="{{ $hotel->x1_cost_price_low }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Alta</label>
        <input id="x1_high_season" name="x1_high_season" type="text" class="form-control" value="{{ $hotel->x1_high_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Baja</label>
        <input id="x1_low_season" name="x1_low_season" type="text" class="form-control" value="{{ $hotel->x1_low_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Coste Alta</label>
        <input id="x2_cost_price_high" name="x2_cost_price_high" type="text" class="form-control" value="{{ $hotel->x2_cost_price_high }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Coste Baja</label>
        <input id="x2_cost_price_low" name="x2_cost_price_low" type="text" class="form-control" value="{{ $hotel->x2_cost_price_low }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Alta</label>
        <input id="x2_high_season" name="x2_high_season" type="text" class="form-control" value="{{ $hotel->x2_high_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Baja</label>
        <input id="x2_low_season" name="x2_low_season" type="text" class="form-control" value="{{ $hotel->x2_low_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Coste Alta</label>
        <input id="x3_cost_price_high" name="x3_cost_price_high" type="text" class="form-control" value="{{ $hotel->x3_cost_price_high }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Coste Baja</label>
        <input id="x3_cost_price_low" name="x3_cost_price_low" type="text" class="form-control" value="{{ $hotel->x3_cost_price_low }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Alta</label>
        <input id="x3_high_season" name="x3_high_season" type="text" class="form-control" value="{{ $hotel->x3_high_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Baja</label>
        <input id="x3_low_season" name="x3_low_season" type="text" class="form-control" value="{{ $hotel->x3_low_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Coste Alta</label>
        <input id="x4_cost_price_high" name="x4_cost_price_high" type="text" class="form-control" value="{{ $hotel->x4_cost_price_high }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Coste Baja</label>
        <input id="x4_cost_price_low" name="x4_cost_price_low" type="text" class="form-control" value="{{ $hotel->x4_cost_price_low }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Alta</label>
        <input id="x4_high_season" name="x4_high_season" type="text" class="form-control" value="{{ $hotel->x4_high_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Baja</label>
        <input id="x4_low_season" name="x4_low_season" type="text" class="form-control" value="{{ $hotel->x4_low_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Coste Alta</label>
        <input id="x5_cost_price_high" name="x5_cost_price_high" type="text" class="form-control" value="{{ $hotel->x5_cost_price_high }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Coste Baja</label>
        <input id="x5_cost_price_low" name="x5_cost_price_low" type="text" class="form-control" value="{{ $hotel->x5_cost_price_low }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Alta</label>
        <input id="x5_high_season" name="x5_high_season" type="text" class="form-control" value="{{ $hotel->x5_high_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Baja</label>
        <input id="x5_low_season" name="x5_low_season" type="text" class="form-control" value="{{ $hotel->x5_low_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Coste Alta</label>
        <input id="x6_cost_price_high" name="x6_cost_price_high" type="text" class="form-control" value="{{ $hotel->x6_cost_price_high }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Coste Baja</label>
        <input id="x6_cost_price_low" name="x6_cost_price_low" type="text" class="form-control" value="{{ $hotel->x6_cost_price_low }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Alta</label>
        <input id="x6_high_season" name="x6_high_season" type="text" class="form-control" value="{{ $hotel->x6_high_season }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Baja</label>
        <input id="x6_low_season" name="x6_low_season" type="text" class="form-control" value="{{ $hotel->x6_low_season }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descuento Niños</label>
        <input id="kid_discount" name="kid_discount" type="number" class="form-control" value="{{ $hotel->kid_discount }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 1</label>
        <input id="season_start_1" name="season_start_1" type="date" class="form-control" value="{{ $hotel->season_start_1 }}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 1</label>
        <input id="season_end_1" name="season_end_1" type="date" class="form-control" value="{{ $hotel->season_end_1 }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 2</label>
        <input id="season_start_2" name="season_start_2" type="date" class="form-control" value="{{ $hotel->season_start_2 }}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 2</label>
        <input id="season_end_2" name="season_end_2" type="date" class="form-control" value="{{ $hotel->season_end_2 }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 3</label>
        <input id="season_start_3" name="season_start_3" type="date" class="form-control" value="{{ $hotel->season_start_3 }}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 3</label>
        <input id="season_end_3" name="season_end_3" type="date" class="form-control" value="{{ $hotel->season_end_3 }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio Temporada Alta 4</label>
        <input id="season_start_4" name="season_start_4" type="date" class="form-control" value="{{ $hotel->season_start_4 }}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin Temporada Alta 4</label>
        <input id="season_end_4" name="season_end_4" type="date" class="form-control" value="{{ $hotel->season_end_4 }}">
    </div>

    <a href="/hotels" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-info">Guardar</button>
</form>
@endsection
