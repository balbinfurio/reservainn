<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Scape</title>
  </head>
  <body class="dark-mode">
    <h1 class="bg-dark text-white text-center">SCAPE</h1>

    <div class="container">
        @yield('content')
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="flex">
      <nav class="w-screen lg:w-64 border-r bg-ruta-project-blue border-gray-200 fixed lg:h-screen text-white z-50 overflow-y-hidden lg:overflow-y-auto">
        <h6 class="font-bold mb-4 pl-6 pt-4 menu-title">
          <a href="{{ route('dashboard') }}">
            <img src="{{ asset('img/app.png') }}" alt="Logo" id="logo" style="border-radius: 50%; width: 150px;">
          </a>
        </h6>        
                <ul class="h-half-screen lg:h-auto overflow-y-auto">
                    
                        <li><a href="{{ route('agencies.index') }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                          <div class="text-lg font-medium">
                            Agencias
                          </div>
                        </a></li>

                        <li><a href="{{ route('hotels.index') }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                          <div class="text-lg font-medium">
                            Hoteles
                          </div>
                        </a></li>

                        <li><a href="{{ route('tours.index') }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                          <div class="text-lg font-medium">
                            Tours
                          </div>
                        </a></li>

                        <li><a href="{{ route('deposits.index') }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                          <div class="text-lg font-medium">
                            Abonos
                          </div>
                        </a></li>

                        <li><a href="{{ route('tickets.index') }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                          <div class="text-lg font-medium">
                            Tickets
                          </div>
                        </a></li>

                        <li><a href="{{ route('reservations.index') }}" class="block bg-indigo-500 text-white rounded-lg shadow-lg py-3 px-4">
                          <div class="text-lg font-medium">
                            Reservas
                          </div>
                        </a></li>
                        
                </ul>
            </div>
        </div>
    </nav>
  </div>

  @yield('scripts')
  </body>
</html>