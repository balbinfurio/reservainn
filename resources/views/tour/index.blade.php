@extends('layouts.main_template')

@section('content')
<h4 class="bg-dark text-white text-center">TOURS</h4>
    <a href="tours/create" class="btn btn-dark">CREATE</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Nombre</th>

                <th scope="col">Ciudad</th>

                <th scope="col">Precio</th>

                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->name }}</td>
                    
                    <td>{{ $tour->city->name }}</td>
                    
                    <td>{{ $tour->price }}</td>
                    <td>
                        <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                            <a href="/tours/{{ $tour->id }}/edit" class="btn btn-info">Editar</a>
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
