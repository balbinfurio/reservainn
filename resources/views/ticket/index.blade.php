@extends('layouts.main_template')

@section('content')

<h4 class="bg-dark text-white text-center">TICKETS</h4>
    <a href="tickets/create" class="btn btn-dark">CREATE</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Número de Reserva</th>
                <th scope="col">Titular Reserva</th>
                <th scope="col">Agencia</th>
                <th scope="col">Fecha Viaje</th>
                <th scope="col">Numero Viaje</th>
                <th scope="col">Estado Viaje</th>

                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->reservation ? $ticket->reservation->reservation_number : 'ERROR' }}</td>

                    <td>{{ $ticket->reservation ? $ticket->reservation->client_name : 'ERROR' }}</td>

                    <td>{{ $ticket->agency ? $ticket->agency->name : 'ERROR' }}</td>

                    <td>{{ $ticket->travel_date }}</td>

                    <td>{{ $ticket->travel_number }}</td>

                    <td>{{ $ticket->status }}</td>

                    <td>
                        <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                            <a href="/tickets/{{ $ticket->id }}/edit" class="btn btn-info">Editar</a>
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