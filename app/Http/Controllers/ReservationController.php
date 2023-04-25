<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Agency;
use App\Models\Hotel;
use Illuminate\Http\Request;

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
        $reservations->x3 = $request->get('x3');
        $reservations->client_name = $request->get('client_name');
        $reservations->document_number = $request->get('document_number');
        $reservations->check_in = $request->get('check_in');
        $reservations->check_out = $request->get('check_out');
        $reservations->season = $request->get('season');

        // migrar value de precio publico de x1, x2, x3.... para multiplcar por total de numeros de reserva de cada tipo de habitacion y obtener total
        $hotel = Hotel::find($request->get('hotel_id'));
        $public_price_x1 = $hotel->x1_public_price;
        $public_price_x3 = $hotel->x3_public_price;
        $total_price = $public_price_x1 * $reservations->x1 + $public_price_x3 * $reservations->x3;
        $reservations->total = $total_price;

        // variable experimento numero de habitaciones
        $number_people_x3 = $reservations->x3;
        $rooms_x3 = $number_people_x3 / 3;
        dd($rooms_x3);
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

