<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Agency;
use App\Models\Hotel;
use App\Models\Tour;
use App\Models\City;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use DateTime;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with('deposit')->get();
        return view('reservation.index', compact('reservations'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agencies = Agency::all();
        $hotels = Hotel::all();
        $tours = Tour::all();

        // Obtener el último registro de reserva
        $lastReservation = Reservation::latest()->first();

        return view('reservation.create', compact('agencies', 'hotels', 'tours', 'lastReservation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservations = new Reservation();
        $reservations->reservation_number = $request->get('reservation_number');
        $reservations->purchase_date = $request->get('purchase_date');
        $reservations->agency_id = $request->get('agency_id');
        $reservations->hotel_id = $request->get('hotel_id');
        $reservations->tour_id = $request->get('tour_id');
        $reservations->x1 = $request->get('x1');
        $reservations->x2 = $request->get('x2');
        $reservations->x3 = $request->get('x3');
        $reservations->x4 = $request->get('x4');
        $reservations->x5 = $request->get('x5');
        $reservations->x6 = $request->get('x6');
        $reservations->kids_number = $request->get('kids_number');
        $reservations->client_name = $request->get('client_name');
        $reservations->document_number = $request->get('document_number');
        $reservations->check_in = $request->get('check_in');
        $reservations->check_out = $request->get('check_out');
        $reservations->season = $request->get('season');

        // migrar value de precio publico de x1, x2, x3.... para multiplcar por total de numeros de reserva de cada tipo de habitacion y obtener total
        $hotel = Hotel::find($request->get('hotel_id'));
        // dd($hotel);
        $high_season_x1 = $hotel->x1_high_season;
        $high_season_x2 = $hotel->x2_high_season;
        $high_season_x3 = $hotel->x3_high_season;
        $high_season_x4 = $hotel->x4_high_season;
        $high_season_x5 = $hotel->x5_high_season;
        $high_season_x6 = $hotel->x6_high_season;
        $kid_discount = $hotel->kid_discount; // porcentaje precio niño "30%"
        $kid_price_high = $high_season_x1 - ($high_season_x1 * ($kid_discount / 100));

        $low_season_x1 = $hotel->x1_low_season;
        $low_season_x2 = $hotel->x2_low_season;
        $low_season_x3 = $hotel->x3_low_season;
        $low_season_x4 = $hotel->x4_low_season;
        $low_season_x5 = $hotel->x5_low_season;
        $low_season_x6 = $hotel->x6_low_season;
        $kid_discount = $hotel->kid_discount; // porcentaje precio niño "30%"
        $kid_price_low = $low_season_x1 - ($low_season_x1 * ($kid_discount / 100));

        


        // formulita para sacar la fecha de temporada alta o baja

        $season_start_1 = $hotel->season_start_1;
        $season_end_1 = $hotel->season_end_1;

        $season_start_2 = $hotel->season_start_2;
        $season_end_2 = $hotel->season_end_2;

        $season_start_3 = $hotel->season_start_3;
        $season_end_3 = $hotel->season_end_3;

        $season_start_4 = $hotel->season_start_4;
        $season_end_4 = $hotel->season_end_4;

        $checkIn = Carbon::parse($request->input('check_in'));

        
        $currentYear = date('Y'); //año actual
        $nextYear = Carbon::now()->addYear()->year; // año siguiente
    
        // Le asigno el año actual a las variables de temporada 
        $seasonStart1 = Carbon::parse($season_start_1)->setYear($currentYear)->startOfDay();
        $seasonEnd1 = Carbon::parse($season_end_1)->setYear($currentYear)->startOfDay();
        $seasonStart2 = Carbon::parse($season_start_2)->setYear($currentYear)->startOfDay();
        $seasonEnd2 = Carbon::parse($season_end_2)->setYear($currentYear)->startOfDay();
        $seasonStart3 = Carbon::parse($season_start_3)->setYear($currentYear)->startOfDay();
        $seasonEnd3 = Carbon::parse($season_end_3)->setYear($currentYear)->startOfDay();
        $seasonStart4 = Carbon::parse($season_start_4)->setYear($currentYear)->startOfDay();
        $seasonEnd4 = Carbon::parse($season_end_4)->setYear($currentYear)->startOfDay();

        // Le asigno el año siguiente al actual, a las variables de temporada 
        $nextSeasonStart1 = Carbon::parse($season_start_1)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd1 = Carbon::parse($season_end_1)->setYear($nextYear)->startOfDay();
        $nextSeasonStart2 = Carbon::parse($season_start_2)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd2 = Carbon::parse($season_end_2)->setYear($nextYear)->startOfDay();
        $nextSeasonStart3 = Carbon::parse($season_start_3)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd3 = Carbon::parse($season_end_3)->setYear($nextYear)->startOfDay();
        $nextSeasonStart4 = Carbon::parse($season_start_4)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd4 = Carbon::parse($season_end_4)->setYear($nextYear)->startOfDay();

        
        // Crear un array/matriz con los rangos de fechas de temporada 
        $seasons = [
            [$seasonStart1, $seasonEnd1],
            [$seasonStart2, $seasonEnd2],
            [$seasonStart3, $seasonEnd3],
            [$seasonStart4, $seasonEnd4],
            [$nextSeasonStart1, $nextSeasonEnd1],
            [$nextSeasonStart2, $nextSeasonEnd2],
            [$nextSeasonStart3, $nextSeasonEnd3],
            [$nextSeasonStart4, $nextSeasonEnd4],
        ];


        // Establecer el precio predeterminado como temporada baja
        $defaultPrice = $low_season_x1 * $reservations->x1 + $low_season_x2 * $reservations->x2 + $low_season_x3 * $reservations->x3
                        + $low_season_x4 * $reservations->x4 + $low_season_x5 * $reservations->x5 + $low_season_x6 * $reservations->x6
                        + $kid_price_low * $reservations->kids_number;

        // Verificar si la fecha de check-in está dentro de algún rango de temporada alta
        $inHighSeason = false;
        foreach ($seasons as [$start, $end]) {
            if ($checkIn->between($start, $end)) {
                $inHighSeason = true;
                break;
            }
        }

        // Bloque para contar el numero de noches en la reserva

        $check_in = new DateTime($reservations->check_in);
        $check_out = new DateTime($reservations->check_out);

        $interval = $check_in->diff($check_out);
        $numNights = $interval->days;

        // El valor de $numNights representa el número de noches entre las fechas de check-in y check-out

        // Calcular el precio en función de la temporada
        if ($inHighSeason) {
            // dd('Alta');
            $reservations->total = ($high_season_x1 * $reservations->x1 + $high_season_x2 * $reservations->x2 + $high_season_x3 * $reservations->x3
                                    + $high_season_x4 * $reservations->x4 + $high_season_x5 * $reservations->x5 + $high_season_x6 * $reservations->x6
                                    + $kid_price_high * $reservations->kids_number) * $numNights;
        } else {
            // dd('Baja');
            $reservations->total = $defaultPrice * $numNights;
        }


        
        /// bloque para traer el precio de cada tour

        // $tourId = request()->input('tour_id');
        // $tour = Tour::find($tourId);
        // $tour_name = $tour->name;

        // dd($tour_name);
        
        
        
        
        
        
        

       



        // bloque experimento para sacar numero de habitaciones por cada tipo de habitacion "2x1 3x2 5x3" 

        $number_people_x1 = $reservations->x1;
        $rooms_x1 = ceil($number_people_x1 / 1);
        $number_people_x2 = $reservations->x2;
        $rooms_x2 = ceil($number_people_x2 / 2);
        $number_people_x3 = $reservations->x3;
        $rooms_x3 = ceil($number_people_x3 / 3);

        // dd($rooms_x1.'x1 '  .  $rooms_x2.'x2 ' . $rooms_x3.'x3 ');

        //

        
        
        // Obtén el ID del hotel seleccionado (puedes obtenerlo de la solicitud o desde el formulario)
        $hotelId = request()->input('hotel_id');

        // Obtén la ciudad correspondiente al hotel
        $hotel = Hotel::find($hotelId);
        $cityId = $hotel->city_id;

        // Obtén los tours disponibles para esa ciudad
        $tours = Tour::where('city_id', $cityId)->get();

        // dd($tours);

        $cityId = $hotel->city_id;



        $reservations->save();

        return redirect('/reservations')->with(compact('tours'));

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $reservation = reservation::find($id);
        // return view('reservation.edit')->with('reservation', $reservation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $reservation = Reservation::find($id);
        // $reservation->client_name = $request->get('client_name');

        // $reservation->save();

        // return redirect('/reservation.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/reservations');
    }


    // public function getAvailableTours($hotelId)
    // {
    //     $hotel = Hotel::find($hotelId);
    //     if (!$hotel) {
    //         return response()->json(['error' => 'Hotel not found'], 404);
    //     }

    //     $cityId = $hotel->city_id;
    //     $tours = Tour::where('city_id', $cityId)->get();

    //     return response()->json(['tours' => $tours]);
    // }

    public function generatePDF($reservationId)
    {
        // Obtener los datos de la reserva desde la base de datos
        $reservation = Reservation::find($reservationId);
        $hotel = Hotel::find($reservation->hotel_id);
        // $city = City::all();
        // $agency = Agency::all();

        // Obtener el base64 de la imagen subida
        $imageBase64 = $hotel->logo;

        // Verificar si la imagen existe
        if ($imageBase64) {
            $logo = $imageBase64;
            $logo = 'data:image/jpeg;base64,' . $logo;

        } else {
            // Establecer una imagen de reemplazo en caso de que la imagen no exista
            $logo = 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('img/app.png')));
        }

        $setLogo = 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('img/star.png')));

        $number_people_x1 = $reservation->x1;
        $rooms_x1 = ceil($number_people_x1 / 1);
        $number_people_x2 = $reservation->x2;
        $rooms_x2 = ceil($number_people_x2 / 2);
        $number_people_x3 = $reservation->x3;
        $rooms_x3 = ceil($number_people_x3 / 3);
        $number_people_x4 = $reservation->x4;
        $rooms_x4 = ceil($number_people_x4 / 4);
        $number_people_x5 = $reservation->x5;
        $rooms_x5 = ceil($number_people_x5 / 5);
        $number_people_x6 = $reservation->x6;
        $rooms_x6 = ceil($number_people_x6 / 6);
        
        // Crear una instancia de Dompdf con las opciones de configuración
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
        
        // Generar el contenido HTML del PDF
        $html = view('reservation.pdf', compact('reservation', 'hotel', 'rooms_x1', 'rooms_x2', 'rooms_x3', 'rooms_x4', 'rooms_x5', 'rooms_x6', 'logo', 'setLogo'))->render();

        // Cargar el contenido HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderizar el PDF
        $dompdf->render();

        // Generar el nombre del archivo PDF
        $fileName = 'reservation_' . $reservationId . '.pdf';

        // Descargar el PDF en el navegador del usuario
        return $dompdf->stream($fileName);
    }

}


