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
    
        // Le asigno el año actual a las variables de temporada alta
        $seasonStart1 = Carbon::parse($season_start_1)->setYear($currentYear)->startOfDay();
        $seasonEnd1 = Carbon::parse($season_end_1)->setYear($currentYear)->startOfDay();
        $seasonStart2 = Carbon::parse($season_start_2)->setYear($currentYear)->startOfDay();
        $seasonEnd2 = Carbon::parse($season_end_2)->setYear($currentYear)->startOfDay();
        $seasonStart3 = Carbon::parse($season_start_3)->setYear($currentYear)->startOfDay();
        $seasonEnd3 = Carbon::parse($season_end_3)->setYear($currentYear)->startOfDay();
        $seasonStart4 = Carbon::parse($season_start_4)->setYear($currentYear)->startOfDay();
        $seasonEnd4 = Carbon::parse($season_end_4)->setYear($currentYear)->startOfDay();

        // Le asigno el año siguiente al actual, a las variables de temporada alta
        $nextSeasonStart1 = Carbon::parse($season_start_1)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd1 = Carbon::parse($season_end_1)->setYear($nextYear)->startOfDay();
        $nextSeasonStart2 = Carbon::parse($season_start_2)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd2 = Carbon::parse($season_end_2)->setYear($nextYear)->startOfDay();
        $nextSeasonStart3 = Carbon::parse($season_start_3)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd3 = Carbon::parse($season_end_3)->setYear($nextYear)->startOfDay();
        $nextSeasonStart4 = Carbon::parse($season_start_4)->setYear($nextYear)->startOfDay();
        $nextSeasonEnd4 = Carbon::parse($season_end_4)->setYear($nextYear)->startOfDay();

        
        // Crear un array/matriz con los rangos de fechas de temporada alta
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

        // Calcular el precio en función de la temporada
        if ($inHighSeason) {
            dd('Alta');
            $reservations->total = $high_season_x1 * $reservations->x1 + $high_season_x2 * $reservations->x2 + $high_season_x3 * $reservations->x3
                                    + $high_season_x4 * $reservations->x4 + $high_season_x5 * $reservations->x5 + $high_season_x6 * $reservations->x6
                                    + $kid_price_high * $reservations->kids_number;
        } else {
            dd('Baja');
            $reservations->total = $defaultPrice;
        }


        
        
        
        
        
        
        // if(($checkIn->year == $currentYear && $checkIn->between($seasonStart1, $seasonEnd1))
        //     || ($checkIn->year == $currentYear && $checkIn->between($seasonStart2, $seasonEnd2))
        //     || ($checkIn->year == $currentYear && $checkIn->between($seasonStart3, $seasonEnd3))
        //     || ($checkIn->year == $currentYear && $checkIn->between($seasonStart4, $seasonEnd4))
        //     || ($checkIn->year == $nextYear && $checkIn->between($nextSeasonStart1, $nextSeasonEnd1)) 
        //     || ($checkIn->year == $nextYear && $checkIn->between($nextSeasonStart2, $nextSeasonEnd2))
        //     || ($checkIn->year == $nextYear && $checkIn->between($nextSeasonStart3, $nextSeasonEnd3)) 
        //     || ($checkIn->year == $nextYear && $checkIn->between($nextSeasonStart4, $nextSeasonEnd4)) ){
        //         // dd('Alta');
        //         $high_season_price = $high_season_x1 * $reservations->x1 + $high_season_x2 * $reservations->x2 + $high_season_x3 * $reservations->x3
        //                     + $high_season_x4 * $reservations->x4 + $high_season_x5 * $reservations->x5 + $high_season_x6 * $reservations->x6
        //                     + $kid_price_high * $reservations->kids_number;
        //         $reservations->total = $high_season_price;
        //     } else {
        //         // dd('Baja');
        //         $low_season_price =  $low_season_x1 * $reservations->x1 + $low_season_x2 * $reservations->x2 + $low_season_x3 * $reservations->x3
        //                     + $low_season_x4 * $reservations->x4 + $low_season_x5 * $reservations->x5 + $low_season_x6 * $reservations->x6
        //                     + $kid_price_low * $reservations->kids_number;
        //         $reservations->total = $low_season_price;
        //     }

        

       



        // bloque experimento para sacar numero de habitaciones por cada tipo de habitacion "2x1 3x2 5x3" 

        $number_people_x1 = $reservations->x1;
        $rooms_x1 = ceil($number_people_x1 / 1);
        $number_people_x2 = $reservations->x2;
        $rooms_x2 = ceil($number_people_x2 / 2);
        $number_people_x3 = $reservations->x3;
        $rooms_x3 = ceil($number_people_x3 / 3);

        // dd($rooms_x1.'x1 '  .  $rooms_x2.'x2 ' . $rooms_x3.'x3 ');

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
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/reservations');
    }
}

