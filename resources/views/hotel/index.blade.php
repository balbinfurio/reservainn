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
                        
                            <a class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection