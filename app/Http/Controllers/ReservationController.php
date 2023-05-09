<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Agency;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation.index',)->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agencies = Agency::all();
        $hotels = Hotel::all();
        return view('reservation.create', compact('agencies', 'hotels'));
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
        $high_season_x1 = $hotel->x1_high_season;
        $high_season_x2 = $hotel->x2_high_season;
        $high_season_x3 = $hotel->x3_high_season;
        $high_season_x4 = $hotel->x4_high_season;
        $high_season_x5 = $hotel->x5_high_season;
        $high_season_x6 = $hotel->x6_high_season;
        $kid_discount = $hotel->kid_discount; // porcentaje precio niño "30%"
        $kid_price = $high_season_x1 - ($high_season_x1 * ($kid_discount / 100));


        // formulita para sacar la fecha de temporada alta o baja

        $season_start_1 = $hotel->season_start_1;
        $season_end_1 = $hotel->season_end_1;
        $checkIn = Carbon::createFromFormat('Y-m-d', $request->input('purchase_date'));
        $year = date('Y'); // Obtener el año actual
        $seasonStart1 = Carbon::createFromFormat('m-d-Y', substr($season_start_1, 5) . '-' . $year);
        $seasonEnd1 = Carbon::createFromFormat('m-d-Y', substr($season_end_1, 5) . '-' . $year);

        if ($checkIn->between($seasonStart1, $seasonEnd1)) {
            $high_season_price = $high_season_x1 * $reservations->x1 + $high_season_x2 * $reservations->x2 + $high_season_x3 * $reservations->x3
                        + $high_season_x4 * $reservations->x4 + $high_season_x5 * $reservations->x5 + $high_season_x6 * $reservations->x6
                        + $kid_price * $reservations->kids_number;
            $reservations->total = $high_season_price;
        } else {
            // aqui lo que hago es igualarlo a cero si la fecha esta por fuera de temp alta para ver si funciona
            $low_season_price =  0;
            $reservations->total = $low_season_price;
        }
        


        


        //

        
        // $high_season_price = $high_season_x1 * $reservations->x1 + $high_season_x2 * $reservations->x2 + $high_season_x3 * $reservations->x3
        //                 + $high_season_x4 * $reservations->x4 + $high_season_x5 * $reservations->x5 + $high_season_x6 * $reservations->x6
        //                 + $kid_price * $reservations->kids_number;
        // $reservations->total = $high_season_price;



        // bloque experimento para sacar numero de habitaciones por cada tipo de habitacion "2x1 3x2 5x3" 

        $number_people_x1 = $reservations->x1;
        $rooms_x1 = ceil($number_people_x1 / 1);
        $number_people_x2 = $reservations->x2;
        $rooms_x2 = ceil($number_people_x2 / 2);
        $number_people_x3 = $reservations->x3;
        $rooms_x3 = ceil($number_people_x3 / 3);

        dd($rooms_x1.'x1 '  .  $rooms_x2.'x2 ' . $rooms_x3.'x3 ');

        //



        $reservations->save();

        return redirect('/reservations');
        // return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

