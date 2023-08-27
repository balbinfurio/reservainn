<!DOCTYPE html>
<html>
<head>
    <title>Reservation PDF</title>
    <style>
        /* Estilos para el encabezado */
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
            color: #333;
            /* line-height: 1.5; */
        }
        #header-content {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        text-align: right;
        padding: 20px;
        background-color: #f0f0f0; /* Puedes ajustar el color de fondo según tu diseño */
        }

        #header-content h1, #header-content h2 {
        margin: 0;
        color: #333;
        }

        #header-content h1 {
        font-size: 24px;
        margin-bottom: 10px;
        }

        #header-content h2 {
        font-size: 18px;
        margin-bottom: 10px;
        }
        #hotel_logo {
            position: absolute;
            top: 0;
            left: 0;
        }
        #hotel_logo img {
            width: 150px;
            height: 100px;
        }
        #scape_logo {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            text-align: center; /* Para centrar el contenido horizontalmente */
        }

        #scape_logo img {
            width: 150px;
            height: 100px;
        }

        /* #agency-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        } */

        #agency-info .label {
            font-weight: bold;
            display: inline-block;
            width: 80px;
        }

        #agency-info .value {
            display: inline-block;
        }
        #agency-info {
            float: left;
            width: 50%;
        }

        #reservation-price {
            float: right;
            width: 50%;
            text-align: right;
        }

        /* Limpieza de floats */
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        #reservation-info {
            float: left;
            width: 50%;
            clear: left;
            margin-top: 33%;
        }
        #check-in-info {
            float: right;
            width: 50%;
            clear: right;
            margin-top: 40%;
            text-align: right;
        }

        



    </style>
</head>
<body>
    <div id="header-content">
        <div>
            <h2>Reserva Hotelera: {{ $reservation->reservation_number }}</h2>
        </div>
        <div>
            <h2>Solicitado el: {{ $reservation->purchase_date }}</h2>
        </div>
        <div>   
            <h2>Titular Reserva: {{ $reservation->client_name }}</h2>
        </div>
        <div>
            <h2>Identificación: {{ $reservation->document_number }}</h2>
        </div>
    </div>

    <div id="hotel_logo">
        <img src="{{ $logo }}" alt="Logo" style="width: 150px; height: 100px;">
    </div>

    <div id="scape_logo">
        <img src="{{ $setLogo }}" alt="setLogo" style="width: 150px; height: 100px;">
    </div>

    <div id="agency-info">
        <div class="reservation-content">
            <h2>AGENCIA: {{ $agency->name }}</h2>
        </div>
        <div>
            <h2>NIT: {{ $agency->NIT }}</h2>
        </div>
        <div>
            <h2>CONTACTO: {{ $agency->phone }}</h2>
        </div>
        <div>
            <h2>DIRECCIÓN: {{ $agency->address }}</h2>
        </div>
        <div>
            <h2>CIUDAD: {{ $agency->city }}</h2>
        </div>
    </div>

    <div id="reservation-price">
        <div>
            <h2>TOTAL ALOJAMIENTO: ${{ $reservation->total }}</h2>
        </div>
        <div>
            <h2>TOTAL ADICIONALES: - </h2>
        </div>
    </div>

    <div id="reservation-info">
        <h1>ALOJAMIENTO</h1>
        <div>
            <h2>ACOMODACIÓN: {{ $rooms_x1 . 'x1 ' . $rooms_x2 . 'x2 ' . $rooms_x3 . 'x3 ' . $rooms_x4 . 'x4 ' . $rooms_x5 . 'x5 ' . $rooms_x6 . 'x6 '}}</h2>
        </div>
        <div>
            <h2>TOTAL ${{ $reservation->total }}</h2>
        </div>
    </div>

    <div id="check-in-info">
        <div>
            <h2>INGRESO: {{$reservation->check_in}}</h2>
        </div>
        <div>
            <h2>SALIDA: {{$reservation->check_out}}</h2>
        </div>

    </div>

    <div id="add-ons">
        <h1>SERVICIOS ADICIONALES Y RECEPTIVOS</h1>
        <div>
            <h2>Tour: Borondo PAX: 6 TOTAL: $759635</h2>
        </div>

    </div>
    


    {{-- <div class="reservation-info" style="position: relative; top: 180; left: 0;">
        <span class="label">Correo:</span>
        <span class="value">{{ $reservation->agency->mail }}</span>
    </div>

    <div class="reservation-info" style="position: absolute; top: 210; left: 0;">
        <span class="label">Hotel:</span>
        <span class="value">{{ $hotel->name }}</span>
    </div>


    <div class="reservation-info" style="position: absolute; top: 270; left: 0;">
        <span class="label">Ciudad:</span>
        <span class="value">{{ $hotel->city->name }}</span>
    </div>
    
    
    
    <div class="reservation-info" style="position: absolute; top: 330; left: 0;">
        <span class="label">Check In:</span>
        <span class="value">{{ $reservation->check_in }}</span>
    </div>
    
    
    --}}
    
    

    {{-- <div class="reservation-info" style="position: absolute; top: 70; right: 0;">
        <h1>DIEGO E. USUGA ARBELÁEZ</h1>
    </div>
    
    <div class="reservation-info" style="position: absolute; top: 100; right: 0;">
        <h2>1128423585-8</h2>
    </div> --}}
    



    
    

</body>
</html>
