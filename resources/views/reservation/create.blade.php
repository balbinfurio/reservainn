@extends('layouts.main_template')

@section('content')
<h4> CREAR RESERVA </h4>

<form action="/reservations" method="POST">
    @csrf
    <div class="mb-3">
        <label for="reservation_number" class="form-label">Número Reserva</label>
        <input id="reservation_number" name="reservation_number" type="number" class="form-control" tabindex="1" value="{{ $lastReservation->reservation_number + 1 }}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Fecha Pedido</label>
        <input id="purchase_date" name="purchase_date" type="date" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="agency_id" class="form-label">Agencia</label>
        <select id="agency_id" name="agency_id" class="form-control" tabindex="3">
            @foreach($agencies as $agency)
                <option value="{{ $agency->id }}">{{ $agency->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="hotel_id" class="form-label">Hotel</label>
        <select id="hotel_id" name="hotel_id" class="form-control" tabindex="4">
            @foreach($hotels as $hotel)
                <option value="{{ $hotel->id }}" data-city-id="{{ $hotel->city_id }}">{{ $hotel->name }}</option>
            @endforeach
        </select>        
    </div>
    
    <div class="mb-3">
        <label for="tour_id" class="form-label">Tour</label>
        <select id="tour_id" name="tour_id" class="form-control" tabindex="5">
            <option value="">Seleccione un tour</option>
            @foreach ($tours as $tour)
                <option value="{{ $tour->id }}">{{ $tour->name }}</option>
            @endforeach
        </select>
    </div>
    
    <script>
        // Obtener los tours disponibles en la página inicial
        var availableTours = {!! json_encode($tours->toArray()) !!};
    
        // Evento onchange del campo de selección de hoteles
        $('#hotel_id').change(function() {
            var selectedCity = $(this).find(':selected').data('city-id');
            var selectedHotelId = $(this).val();


            // console.log(selectedCity)

            var filteredTours = availableTours.filter(function(tour) {
                return tour.city_id == selectedCity;
            });
    
            // Actualizar el campo de selección de tours con las opciones filtradas
            var tourSelect = $('#tour_id');
            tourSelect.empty();
            tourSelect.append('<option value="">Seleccione un tour</option>');
            $.each(filteredTours, function(index, tour) {
                tourSelect.append($('<option></option>').attr('value', tour.id).text(tour.name));
            });
        });
    </script>
    
    
    
    
    

    <div class="mb-3">
        <label for="" class="form-label">Numero de personas para habitación tipo X1</label>
        <input id="x1" name="x1" type="number" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de personas para habitación tipo X2</label>
        <input id="x2" name="x2" type="number" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de personas para habitación tipo X3</label>
        <input id="x3" name="x3" type="number" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de personas para habitación tipo X4</label>
        <input id="x4" name="x4" type="number" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de personas para habitación tipo X5</label>
        <input id="x5" name="x5" type="number" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de personas para habitación tipo X6</label>
        <input id="x6" name="x6" type="number" class="form-control" tabindex="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"># Niños</label>
        <input id="kids_number" name="kids_number" type="number" class="form-control" tabindex="11">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Titular</label>
        <input id="client_name" name="client_name" type="text" class="form-control" tabindex="12">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Documento de Identidad</label>
        <input id="document_number" name="document_number" type="number" class="form-control" tabindex="13">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ingreso</label>
        <input id="check_in" name="check_in" type="datetime-local" class="form-control" tabindex="14">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Salida</label>
        <input id="check_out" name="check_out" type="datetime-local" class="form-control" tabindex="15">
    </div>
    {{-- <div class="mb-3">
        <label for="" class="form-label">Temporada</label>
        <select id="season" name="season" class="form-control" tabindex="16">
            <option value="alta">Alta</option>
            <option value="baja">Baja</option>
        </select>
    </div> --}}
    
    
    <button type="submit" class="btn btn-info" tabindex="17">Guardar</button>
</form>

@endsection

{{-- @section('scripts')
<script>
$(document).ready(function() {
    $('#hotel_id').change(function() {
        var hotelId = $(this).val();

        // Realiza una solicitud AJAX para obtener los tours disponibles
        $.ajax({
            url: '/reservations/' + hotelId + '/available',
            type: 'GET',
            success: function(response) {
                var tours = response.tours;

                // Actualiza el campo de selección de tours con las opciones disponibles
                var tourSelect = $('#tour_id');
                tourSelect.empty();
                $.each(tours, function(index, tour) {
                    tourSelect.append($('<option></option>').attr('value', tour.id).text(tour.name));
                });
            },
            error: function() {
                // Maneja el error de la solicitud AJAX
            }
        });
    });
});
</script>
@endsection --}}


