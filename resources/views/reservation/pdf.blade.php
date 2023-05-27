<!DOCTYPE html>
<html>
<head>
    <title>Reservation PDF</title>
    <style>
        /* Estilos CSS para el PDF */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            line-height: 1.5;
        }
        h1 {
            font-size: 24px;
            color: #555;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }
        .reservation-info {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 120px;
        }
        .value {
            display: inline-block;
            width: 250px;
        }
        .total {
            font-size: 18px;
            display: inline-block;
            width: 250px;
        }
        /* Agrega aquí más estilos personalizados si los necesitas */
    </style>
</head>
<body>
    <div>
        <img src="{{ $logo }}" alt="Logo" style="width: 150px; height: 100px;">
    </div>

    <div style="position: absolute; top: 0; right: 0;">
        <img src="{{ $setLogo }}" alt="setLogo" style="width: 150px; height: 100px;">
    </div>
    
    <div class="reservation-info" style="position: absolute; top: 70; left: 0;">
        <h1>Reserva ID: {{ $reservation->reservation_number }}</h1>
    </div>
    
    <div class="reservation-info" style="position: absolute; top: 120; left: 0;">
        <span class="label">Agencia:</span>
        <span class="value">{{ $reservation->agency->name }}</span>
    </div>

    <div class="reservation-info" style="position: absolute; top: 150; left: 0;">
        <span class="label">NIT:</span>
        <span class="value">{{ $reservation->agency->NIT }}</span>
    </div>

    <div class="reservation-info" style="position: absolute; top: 180; left: 0;">
        <span class="label">Correo:</span>
        <span class="value">{{ $reservation->agency->mail }}</span>
    </div>

    <div class="reservation-info" style="position: absolute; top: 210; left: 0;">
        <span class="label">Hotel:</span>
        <span class="value">{{ $hotel->name }}</span>
    </div>

    <div class="reservation-info" style="position: absolute; top: 240; left: 0;">
        <span class="label">Dirección:</span>
        <span class="value">{{ $hotel->address }}</span>
    </div>

    <div class="reservation-info" style="position: absolute; top: 270; left: 0;">
        <span class="label">Ciudad:</span>
        <span class="value">{{ $hotel->city->name }}</span>
    </div>
    
    
    <div class="reservation-info" style="position: absolute; top: 300; left: 0;">
        <span class="label">Nombre Cliente:</span>
        <span class="value">{{ $reservation->client_name }}</span>
    </div>
    <div class="reservation-info" style="position: absolute; top: 330; left: 0;">
        <span class="label">Check In:</span>
        <span class="value">{{ $reservation->check_in }}</span>
    </div>
    <div class="reservation-info" style="position: absolute; top: 360; left: 0;">
        <span class="label">Acomodación:</span>
        <span class="value">{{ $rooms_x1 . 'x1 ' . $rooms_x2 . 'x2 ' . $rooms_x3 . 'x3 ' . $rooms_x4 . 'x4 ' . $rooms_x5 . 'x5 ' . $rooms_x6 . 'x6 '}}</span>
    </div>
    
    

    <div class="reservation-info" style="position: absolute; top: 70; right: 0;">
        <h1>DIEGO E. USUGA ARBELÁEZ</h1>
    </div>
    
    <div class="reservation-info" style="position: absolute; top: 100; right: 0;">
        <h2>1128423585-8</h2>
    </div>
    
    <div class="total" style="position: absolute; top: 300; right: 0;">
        <br>
        <span class="label">Total:</span>
        <span >{{ $reservation->total }}</span>
    </div>



    
    

</body>
</html>
