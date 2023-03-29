@extends('layouts.main_template')

@section('content')
<h4> CREAR AGENCIA </h4>

<form action="/agencies" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">NIT</label>
        <input id="NIT" name="NIT" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="address" name="address" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
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
    <a href="/agencies" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="8">Guardar</button>
</form>

@endsection