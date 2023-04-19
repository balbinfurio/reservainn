@extends('layouts.main_template')

@section('content')
<h1> EDITAR RESERVA </h1>

<form action="/hotels/{{ $hotel->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ $hotel->name }}">
    </div>
    <a href="/hotels" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-info">Guardar</button>
</form>
@endsection