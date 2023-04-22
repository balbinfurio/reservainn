<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Agency;
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
        return view('reservation.create', compact('agencies'));
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
        $reservations->client_name = $request->get('client_name');
        $reservations->document_number = $request->get('document_number');
        $reservations->check_in = $request->get('check_in');
        $reservations->check_out = $request->get('check_out');
        $reservations->season = $request->get('season');
        // $reservations->address = $request->get('address');
        // $reservations->phone = $request->get('phone');
        // $reservations->city = $request->get('city');
        // $reservations->mail = $request->get('mail');

        $reservations->save();

        return redirect('/reservations');
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
