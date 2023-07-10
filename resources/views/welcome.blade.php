@extends('layouts.main_template')

@section('content')

  <h3 class="bg-dark text-white text-center">CIUDADES</h3>
    <a href="cities/create" class="btn btn-dark">AGREGAR</a>

    <div style="overflow-x:auto;">
        <br>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->name }}</td>
                        
                        <td>
                            <form action="{{ route('cities.destroy', $city->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas borrar este elemento?');">
                                {{-- <a href="/cities/{{ $city->id }}/edit" class="btn btn-info">Editar</a> --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
