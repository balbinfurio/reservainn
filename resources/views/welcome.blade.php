@extends('layouts.main_template')

@section('content')

    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-800">
        <div class="bg-indigo-600 dark:bg-indigo-500">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-white">
                    Reserva Inn
                </h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                  <a href="{{ 'clientes.index' }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                    <div class="text-lg font-medium">
                      Clientes
                    </div>
                  </a>
                  <a href="{{ 'reservas.index' }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                    <div class="text-lg font-medium">
                      Reservas
                    </div>
                  </a>
                  <a href="{{ 'tickets.index' }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                    <div class="text-lg font-medium">
                      Tickets
                    </div>
                  </a>
                </div>
            </div>
              
        </div> --}}

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
