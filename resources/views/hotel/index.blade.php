@extends('layouts.main_template')

@section('content')

<h3 class="bg-dark text-white text-center">HOTELES</h3>
    <a href="hotels/create" class="btn btn-dark">CREATE</a>

    <div style="overflow-x:auto;">
        <br>
        <h4 class="bg-dark text-white text-center">Temporada Alta</h4>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dirección</th>
                    
                    <th scope="col">X1 Alta</th>
                    {{-- <th scope="col">X1 Baja</th> --}}
                    
                    <th scope="col">X2 Alta</th>
                    
                    <th scope="col">X3 Alta</th>
                    
                    <th scope="col">X4 Alta</th>
                    
                    <th scope="col">X5 Alta</th>
                    
                    <th scope="col">X6 Alta</th>
                    <th scope="col">Niños %</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->name }}</td>
                        <td>{{ $hotel->address }}</td>
                        
                        <td>{{ $hotel->x1_high_season }}</td>
                        {{-- <td>{{ $hotel->x1_low_season }}</td> --}}
                        
                        <td>{{ $hotel->x2_high_season }}</td>
                        
                        <td>{{ $hotel->x3_high_season }}</td>
                        
                        <td>{{ $hotel->x4_high_season }}</td>
                        
                        <td>{{ $hotel->x5_high_season }}</td>
                        
                        <td>{{ $hotel->x6_high_season }}</td>
                        <td>{{ $hotel->kid_discount }}</td>
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

        <br>
        <h4 class="bg-dark text-white text-center">Temporada Baja</h4>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    
                    <th scope="col">X1 Baja</th>
                    <th scope="col">X2 Baja</th>
                    <th scope="col">X3 Baja</th>
                    <th scope="col">X4 Baja</th>
                    <th scope="col">X5 Baja</th>
                    <th scope="col">X6 Baja</th>
                    
                    
                    {{-- <th scope="col">Niños %</th> --}}
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->name }}</td>
                        
                        <td>{{ $hotel->x1_low_season }}</td>
                        <td>{{ $hotel->x2_low_season }}</td>
                        <td>{{ $hotel->x3_low_season }}</td>
                        <td>{{ $hotel->x4_low_season }}</td>
                        <td>{{ $hotel->x5_low_season }}</td>
                        <td>{{ $hotel->x6_low_season }}</td>
                        
                        
                        {{-- <td>{{ $hotel->kid_discount }}</td> --}}
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

        <br>
        <h4 class="bg-dark text-white text-center">Precio Coste</h4>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    
                    <th scope="col">X1 P. Coste</th>
                    
                    <th scope="col">X2 P. Coste</th>
                    
                    <th scope="col">X3 P. Coste</th>
                   
                    <th scope="col">X4 P. Coste</th>
                    
                    <th scope="col">X5 P. Coste</th>
                    
                    <th scope="col">X6 P. Coste</th>
                    
                    
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->name }}</td>
                        
                        <td>{{ $hotel->x1_cost_price }}</td>
                        
                        <td>{{ $hotel->x2_cost_price }}</td>
                        
                        <td>{{ $hotel->x3_cost_price }}</td>
                        
                        <td>{{ $hotel->x4_cost_price }}</td>
                        
                        <td>{{ $hotel->x5_cost_price }}</td>
                        
                        <td>{{ $hotel->x6_cost_price }}</td>
                        
                        
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
