@extends('layouts.main_template')

@section('content')

<h4> AGREGAR CIUDAD </h4>

<form action="/cities" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    
    <a href="/cities" class="btn btn-secondary" tabindex="2">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="3">Guardar</button>
</form>

@endsection