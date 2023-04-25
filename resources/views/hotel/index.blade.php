@extends('layouts.main_template')

@section('content')

<h4 class="bg-dark text-white text-center">HOTELES</h4>
    <a href="hotels/create" class="btn btn-dark">CREATE</a>

    <div style="overflow-x:auto;">
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">X1 PC</th>
                    <th scope="col">X1 PP</th>
                    <th scope="col">X3 PC</th>
                    <th scope="col">X3 PP</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->name }}</td>
                        <td>{{ $hotel->address }}</td>
                        <td>{{ $hotel->x1_cost_price }}</td>
                        <td>{{ $hotel->x1_public_price }}</td>
                        <td>{{ $hotel->x3_cost_price }}</td>
                        <td>{{ $hotel->x3_public_price }}</td>
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
    </div>

@endsection
