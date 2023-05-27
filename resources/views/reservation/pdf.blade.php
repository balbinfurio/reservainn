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
            width: 200px;
        }
        /* Agrega aquí más estilos personalizados si los necesitas */
    </style>
</head>
<body>
    <h1>Reserva ID: {{ $reservation->reservation_number }}</h1>
    <div class="reservation-info">
        <span class="label">Hotel:</span>
        <span class="value">{{ $hotel->name }}</span>
    </div>
    
    <div class="reservation-info">
        <span class="label">Nombre Cliente:</span>
        <span class="value">{{ $reservation->client_name }}</span>
    </div>
    <div class="reservation-info">
        <span class="label">Check In:</span>
        <span class="value">{{ $reservation->check_in }}</span>
    </div>
    <div class="reservation-info">
        <span class="label">Acomodación:</span>
        <span class="value">{{ $rooms_x1 . 'x1 ' . $rooms_x2 . 'x2 ' . $rooms_x3 . 'x3 ' . $rooms_x4 . 'x4 ' . $rooms_x5 . 'x5 ' . $rooms_x6 . 'x6 '}}</span>
    </div>
    
    

</body>
</html>
