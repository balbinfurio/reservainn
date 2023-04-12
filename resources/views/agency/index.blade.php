@extends('layouts.main_template')

@section('content')
<h4 class="bg-dark text-white text-center">AGENCIAS</h4>
    <a href="agencies/create" class="btn btn-dark">CREATE</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">NIT</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agencies as $agency)
                <tr>
                    <td>{{ $agency->id }}</td>
                    <td>{{ $agency->name }}</td>
                    <td>{{ $agency->NIT }}</td>
                    <td>{{ $agency->address }}</td>
                    <td>{{ $agency->phone }}</td>
                    <td>{{ $agency->city }}</td>
                    <td>{{ $agency->mail }}</td>
                    <td>
                        <form action="{{ route('agencies.destroy', $agency->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                            <a href="/agencies/{{ $agency->id }}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection