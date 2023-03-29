<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\Agency;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencies = Agency::all();
        return view('agency.index',)->with('agencies', $agencies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agency.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $agencies = new Agency();
        $agencies->name = $request->get('name');
        $agencies->NIT = $request->get('NIT');
        $agencies->address = $request->get('address');
        $agencies->phone = $request->get('phone');
        $agencies->city = $request->get('city');
        $agencies->mail = $request->get('mail');

        $rules = [
            'NIT' => ['required', 'regex:/^[0-9]{9}-[0-9]{1}$/']
        ];

        $validatedData = $request->validate($rules);

        $agencies->save();

        return redirect('/agencies');
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
