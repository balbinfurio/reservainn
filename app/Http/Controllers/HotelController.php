<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotel.index',)->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hotels = new Hotel();
        $hotels->name = $request->get('name');
        $hotels->address = $request->get('address');
        $hotels->x1_cost_price = $request->get('x1_cost_price');
        $hotels->x1_public_price = $request->get('x1_public_price');

        $hotels->save();

        return redirect('/hotels');
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
        $hotel = Hotel::find($id);
        return view('hotel.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->name = $request->get('name');
        $hotel->address = $request->get('address');
        $hotel->x1_cost_price = $request->get('x1_cost_price');
        $hotel->x1_public_price = $request->get('x1_public_price');

        $hotel->save();

        return redirect('/hotels');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect('/hotels');
    }
}

