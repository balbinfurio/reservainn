@extends('layouts.main_template')

@section('content')
<h1> EDIT AGENCY</h1>

<form action="/agencies/{{ $agency->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ $agency->name }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">NIT</label>
        <input id="NIT" name="NIT" type="text" class="form-control" value="{{ $agency->NIT }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="address" name="address" type="text" class="form-control" value="{{ $agency->address }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Teléfono</label>
        <input id="phone" name="phone" type="number" class="form-control" value="{{ $agency->phone }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ciudad</label>
        <input id="city" name="city" type="text" class="form-control" value="{{ $agency->city }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="mail" name="mail" type="text" class="form-control" value="{{ $agency->mail }}">
    </div>
    <a href="/agencies" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="8">Guardar</button>
</form>
@endsection