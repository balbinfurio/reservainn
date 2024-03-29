<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\City;
use App\Models\Hotel;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tour.index',)->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view('tour.create', compact('cities'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tours = new Tour();
        $tours->name = $request->get('name');
        $tours->city_id = $request->get('city_id');
        $tours->price = $request->get('price');

        $tours->save();

        return redirect('/tours');
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
        $tour = Tour::find($id);
        $cities = City::all();
        return view('tour.edit')->with(['tour' => $tour, 'cities' => $cities]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tour = Tour::find($id);

        $tour->name = $request->get('name');
        $tour->city_id = $request->get('city_id');
        $tour->price = $request->get('price');
        


        $tour->save();

        return redirect('/tours');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        return redirect('/tours');
    }

    // public function getAvailableTours($hotelId)
    // {
    //     $hotel = Hotel::find($hotelId);
    //     $cityId = $hotel->city_id;
    //     $tours = Tour::where('city_id', $cityId)->get();

    //     return response()->json(['tours' => $tours]);
    // }




}
