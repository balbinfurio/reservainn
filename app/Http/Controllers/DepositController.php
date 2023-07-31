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
        $deposits->deposit_4 = $request->get('deposit_4');
        $deposits->deposit_5 = $request->get('deposit_5');
        $deposits->deposit_6 = $request->get('deposit_6');
        $deposits->deposit_7 = $request->get('deposit_7');
        $deposits->deposit_8 = $request->get('deposit_8');
        $deposits->deposit_9 = $request->get('deposit_9');
        $deposits->deposit_10 = $request->get('deposit_10');

        $reservation = Reservation::find($request->get('reservation_id'));
        $total_price = $reservation->total;

        $deposit_1 = $request->input('deposit_1');
        $deposit_2 = $request->input('deposit_2');
        $deposit_3 = $request->input('deposit_3');
        $deposit_4 = $request->input('deposit_4');
        $deposit_5 = $request->input('deposit_5');
        $deposit_6 = $request->input('deposit_6');
        $deposit_7 = $request->input('deposit_7');
        $deposit_8 = $request->input('deposit_8');
        $deposit_9 = $request->input('deposit_9');
        $deposit_10 = $request->input('deposit_10');


        $deposits_minus_total = $total_price - ($deposit_1 + $deposit_2 + $deposit_3 + $deposit_4 + $deposit_5
                                                + $deposit_6 + $deposit_7 + $deposit_8 + $deposit_9 + $deposit_10);

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
        $deposit->deposit_4 = $request->get('deposit_4');
        $deposit->deposit_5 = $request->get('deposit_5');
        $deposit->deposit_6 = $request->get('deposit_6');
        $deposit->deposit_7 = $request->get('deposit_7');
        $deposit->deposit_8 = $request->get('deposit_8');
        $deposit->deposit_9 = $request->get('deposit_9');
        $deposit->deposit_10 = $request->get('deposit_10');

        
        $reservation = Reservation::find($deposit->reservation_id);
        $total_price = $reservation->total;
        
        $deposit_1 = $request->input('deposit_1');
        $deposit_2 = $request->input('deposit_2');
        $deposit_3 = $request->input('deposit_3');
        $deposit_4 = $request->input('deposit_4');
        $deposit_5 = $request->input('deposit_5');
        $deposit_6 = $request->input('deposit_6');
        $deposit_7 = $request->input('deposit_7');
        $deposit_8 = $request->input('deposit_8');
        $deposit_9 = $request->input('deposit_9');
        $deposit_10 = $request->input('deposit_10');
        
        
        $deposits_minus_total = $total_price - ($deposit_1 + $deposit_2 + $deposit_3 + $deposit_4 + $deposit_5
                                                + $deposit_6 + $deposit_7 + $deposit_8 + $deposit_9 + $deposit_10);

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
