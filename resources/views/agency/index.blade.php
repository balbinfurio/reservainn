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
                        <a class="btn btn-info">Editar</a>
                        <button class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
                    
            @endforeach
        </tbody>
    </table>
@endsection