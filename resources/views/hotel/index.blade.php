@extends('layouts.main_template')

@section('content')

<h4 class="bg-dark text-white text-center">HOTELES</h4>
    <a href="hotels/create" class="btn btn-dark">CREATE</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->name }}</td>
                    <td>
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                            <a href="/hotels/{{ $hotel->id }}/edit" class="btn btn-info">Editar</a>
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