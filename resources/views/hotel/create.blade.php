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
        <label for="" class="form-label">X1 Precio Coste</label>
        <input id="x1_cost_price" name="x1_cost_price" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X1 Precio Público</label>
        <input id="x1_public_price" name="x1_public_price" type="number" class="form-control" tabindex="4">
    </div>
    <a href="/hotels" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="6">Guardar</button>
</form>

@endsection
