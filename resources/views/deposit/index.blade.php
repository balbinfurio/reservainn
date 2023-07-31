@extends('layouts.main_template')

@section('content')

<h4 class="bg-dark text-white text-center">ABONOS</h4>
    <a href="deposits/create" class="btn btn-dark">CREATE</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Número de Reserva</th>
                <th scope="col">Abono #1</th>
                <th scope="col">Abono #2</th>
                <th scope="col">Abono #3</th>
                <th scope="col">Abono #4</th>
                <th scope="col">Abono #5</th>
                <th scope="col">Abono #6</th>
                <th scope="col">Abono #7</th>
                <th scope="col">Abono #8</th>
                <th scope="col">Abono #9</th>
                <th scope="col">Abono #10</th>
                <th scope="col">Total Actualizado</th>
                
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deposits as $deposit)
                <tr>
                    <td>{{ $deposit->reservation ? $deposit->reservation->reservation_number : 'ERROR' }}</td>
                    <td>{{ $deposit->deposit_1 }}</td>
                    <td>{{ $deposit->deposit_2 }}</td>
                    <td>{{ $deposit->deposit_3 }}</td>
                    <td>{{ $deposit->deposit_4 }}</td>
                    <td>{{ $deposit->deposit_5 }}</td>
                    <td>{{ $deposit->deposit_6 }}</td>
                    <td>{{ $deposit->deposit_7 }}</td>
                    <td>{{ $deposit->deposit_8 }}</td>
                    <td>{{ $deposit->deposit_9 }}</td>
                    <td>{{ $deposit->deposit_10 }}</td>
                    <td>{{ $deposit->updated_total }}</td>
                    
                    <td>
                        <form action="{{ route('deposits.destroy', $deposit->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                            <a href="/deposits/{{ $deposit->id }}/edit" class="btn btn-info">Editar</a>
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