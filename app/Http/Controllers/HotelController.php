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
        $hotels->x1_high_season = $request->get('x1_high_season');
        $hotels->x1_low_season = $request->get('x1_low_season');
        $hotels->x2_cost_price = $request->get('x2_cost_price');
        $hotels->x2_high_season = $request->get('x2_high_season');
        $hotels->x2_low_season = $request->get('x2_low_season');
        $hotels->x3_cost_price = $request->get('x3_cost_price');
        $hotels->x3_high_season = $request->get('x3_high_season');
        $hotels->x3_low_season = $request->get('x3_low_season');
        $hotels->x4_cost_price = $request->get('x4_cost_price');
        $hotels->x4_high_season = $request->get('x4_high_season');
        $hotels->x4_low_season = $request->get('x4_low_season');
        $hotels->x5_cost_price = $request->get('x5_cost_price');
        $hotels->x5_high_season = $request->get('x5_high_season');
        $hotels->x5_low_season = $request->get('x5_low_season');
        $hotels->x6_cost_price = $request->get('x6_cost_price');
        $hotels->x6_high_season = $request->get('x6_high_season');
        $hotels->x6_low_season = $request->get('x6_low_season');
        $hotels->kid_discount = $request->get('kid_discount');
        $hotels->season_start_1 = $request->get('season_start_1');
        $hotels->season_end_1 = $request->get('season_end_1');

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
        $hotel->x1_high_season = $request->get('x1_high_season');
        $hotel->x1_low_season = $request->get('x1_low_season');
        $hotel->x2_cost_price = $request->get('x2_cost_price');
        $hotel->x2_high_season = $request->get('x2_high_season');
        $hotel->x2_low_season = $request->get('x2_low_season');
        $hotel->x3_cost_price = $request->get('x3_cost_price');
        $hotel->x3_high_season = $request->get('x3_high_season');
        $hotel->x3_low_season = $request->get('x3_low_season');
        $hotel->x4_cost_price = $request->get('x4_cost_price');
        $hotel->x4_high_season = $request->get('x4_high_season');
        $hotel->x4_low_season = $request->get('x4_low_season');
        $hotel->x5_cost_price = $request->get('x5_cost_price');
        $hotel->x5_high_season = $request->get('x5_high_season');
        $hotel->x5_low_season = $request->get('x5_low_season');
        $hotel->x6_cost_price = $request->get('x6_cost_price');
        $hotel->x6_high_season = $request->get('x6_high_season');
        $hotel->x6_low_season = $request->get('x6_low_season');
        $hotel->kid_discount = $request->get('kid_discount');
        $hotel->season_start_1 = $request->get('season_start_1');
        $hotel->season_end_1 = $request->get('season_end_1');

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

