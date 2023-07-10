<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Reservation;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deposits = Deposit::all();
        return view('deposit.index')->with('deposits', $deposits);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservations = Reservation::all();
        return view('deposit.create', compact('reservations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $deposits = new Deposit();
        $deposits->reservation_id = $request->get('reservation_id');
        $deposits->deposit_1 = $request->get('deposit_1');
        $deposits->deposit_2 = $request->get('deposit_2');
        $deposits->deposit_3 = $request->get('deposit_3');

        $reservation = Reservation::find($request->get('reservation_id'));
        $total_price = $reservation->total;

        $deposit_1 = $request->input('deposit_1');
        $deposit_2 = $request->input('deposit_2');
        $deposit_3 = $request->input('deposit_3');


        $deposits_minus_total = $total_price - ($deposit_1 + $deposit_2 + $deposit_3);

        $deposits->updated_total = $deposits_minus_total;

        $deposits->save();

        return redirect('/deposits');
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
        $deposit = Deposit::find($id);
        return view('deposit.edit')->with('deposit', $deposit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $deposit = Deposit::find($id);

        $deposit->deposit_1 = $request->get('deposit_1');
        $deposit->deposit_2 = $request->get('deposit_2');
        $deposit->deposit_3 = $request->get('deposit_3');

        
        $reservation = Reservation::find($deposit->reservation_id);
        $total_price = $reservation->total;
        
        $deposit_1 = $request->input('deposit_1');
        $deposit_2 = $request->input('deposit_2');
        $deposit_3 = $request->input('deposit_3');
        
        
        $deposits_minus_total = $total_price - ($deposit_1 + $deposit_2 + $deposit_3);

        $deposit->updated_total = $deposits_minus_total;
        
        $deposit->save();

        return redirect('/deposits');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deposit = Deposit::find($id);
        $deposit->delete();
        return redirect('/deposits');
    }
}
