@extends('layouts.main_template')

@section('content')
<h4> CREAR HOTEL </h4>

<form action="/hotels" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/hotels" class="btn btn-secondary" tabindex="2">Cancelar</a>
    <button type="submit" class="btn btn-info" tabindex="3">Guardar</button>
</form>

@endsection