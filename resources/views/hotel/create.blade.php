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
    <div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Coste</label>
        <input id="x2_cost_price" name="x2_cost_price" type="number" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X2 Precio Público</label>
        <input id="x2_public_price" name="x2_public_price" type="number" class="form-control" tabindex="6">
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Coste</label>
        <input id="x3_cost_price" name="x3_cost_price" type="number" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X3 Precio Público</label>
        <input id="x3_public_price" name="x3_public_price" type="number" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Coste</label>
        <input id="x3_cost_price" name="x4_cost_price" type="number" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X4 Precio Público</label>
        <input id="x4_public_price" name="x4_public_price" type="number" class="form-control" tabindex="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Coste</label>
        <input id="x5_cost_price" name="x5_cost_price" type="number" class="form-control" tabindex="11">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X5 Precio Público</label>
        <input id="x5_public_price" name="x5_public_price" type="number" class="form-control" tabindex="12">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Coste</label>
        <input id="x6_cost_price" name="x6_cost_price" type="number" class="form-control" tabindex="13">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">X6 Precio Público</label>
        <input id="x6_public_price" name="x6_public_price" type="number" class="form-control" tabindex="14">
    </div>
    <a href="/hotels" class="btn btn-secondary" tabindex="15">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="16">Guardar</button>
</form>

@endsection
