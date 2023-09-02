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

        #add-ons {
            float: left;
            width: 50%;
            clear: left;
            margin-top: 60%;
        }

        



    </style>
</head>
<body>
    <div id="header-content">
        <div>
            <h2>DIEGO E. USUGA ARBELÁEZ</h2>
        </div>
        <div>
            <h2>NIT: 1128423585-8</h2>
        </div>
        <div>   
            <h2>Régimen Simplificado</h2>
        </div>
        <div>
            <h2>Teléfono: 322 6769192</h2>
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
            <h2>TOTAL RESERVA: ${{ $reservation->total }}</h2>
        </div>
        <div>
            <h2>ABONOS: ${{ $totalDeposits = $deposit->deposit_1 + $deposit->deposit_2 + $deposit->deposit_3 + $deposit->deposit_4 + $deposit->deposit_5 +
                            $deposit->deposit_5 + $deposit->deposit_7 + $deposit->deposit_8 + $deposit->deposit_9 + $deposit->deposit_10  }}</h2>
        </div>
        <div>
            <h2>SALDO: ${{ $reservation->total - $totalDeposits }}</h2>
        </div>
    </div>

    <div id="reservation-info">
        <div>
            <h2>Titular Reserva: {{ $reservation->client_name }}</h2>
        </div>
        <div>
            <h2>Identificación: {{ $reservation->document_number }}</h2>
        </div>
    </div>

    

    

    
    


    

    {{-- <div class="reservation-info" style="position: absolute; top: 70; right: 0;">
        <h1>DIEGO E. USUGA ARBELÁEZ</h1>
    </div>
    
    <div class="reservation-info" style="position: absolute; top: 100; right: 0;">
        <h2>1128423585-8</h2>
    </div> --}}
    



    
    

</body>
</html>
