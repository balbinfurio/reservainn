@extends('layouts.main_template')

@section('content')

<h4 class="bg-dark text-white text-center">RESERVAS</h4>
    <a href="reservations/create" class="btn btn-dark">CREATE</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Número Reserva</th>
                <th scope="col">Fecha Pedido</th>
                <th scope="col">Agencia</th>
                <th scope="col">Hotel</th>
                <th scope="col">X1</th>
                <th scope="col">X3</th>
                <th scope="col">Titular</th>
                <th scope="col">Documento</th>
                <th scope="col">Ingreso</th>
                <th scope="col">Salida</th>
                <th scope="col">Temporada</th>
                <th scope="col">Total</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->reservation_number }}</td>
                    <td>{{ $reservation->purchase_date }}</td>
                    <td>{{ $reservation->agency ? $reservation->agency->name : 'Persona Natural' }}</td>
                    <td>{{ $reservation->hotel ? $reservation->hotel->name : '-' }}</td>
                    <td>{{ $reservation->x1 }}</td>
                    <td>{{ $reservation->x3 }}</td>
                    <td>{{ $reservation->client_name }}</td>
                    <td>{{ $reservation->document_number }}</td>
                    <td>{{ $reservation->check_in }}</td>
                    <td>{{ $reservation->check_out }}</td>
                    <td>{{ $reservation->season }}</td>
                    <td>{{ $reservation->total }}</td>

                    {{-- <td>
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                            <a href="/hotels/{{ $hotel->id }}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Número Reserva</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->reservation_number }}</td>
                    {{-- <td>
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                            <a href="/hotels/{{ $hotel->id }}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>

@endsection
