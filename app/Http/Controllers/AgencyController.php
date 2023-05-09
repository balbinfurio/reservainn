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
        $agencies->phone_op = $request->get('phone_op');
        $agencies->city = $request->get('city');
        $agencies->mail = $request->get('mail');
        $agencies->mail_op = $request->get('mail_op');

        // $rules = [
        //     'NIT' => ['required', 'regex:/^[0-9]{9}-[0-9]{1}$/']
        // ];

        // $validatedData = $request->validate($rules);

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
        $agency = Agency::find($id);
        return view('agency.edit')->with('agency', $agency);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agency = Agency::find($id);

        $agency->name = $request->get('name');
        $agency->NIT = $request->get('NIT');
        $agency->address = $request->get('address');
        $agency->phone = $request->get('phone');
        $agency->city = $request->get('city');
        $agency->mail = $request->get('mail');

        // $rules = [
        //     'NIT' => ['required', 'regex:/^[0-9]{9}-[0-9]{1}$/']
        // ];

        // $validatedData = $request->validate($rules);

        $agency->save();

        return redirect('/agencies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agency = Agency::find($id);
        $agency->delete();
        return redirect('/agencies');
    }
}
