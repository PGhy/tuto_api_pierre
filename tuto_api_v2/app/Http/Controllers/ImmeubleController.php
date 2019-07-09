<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immeuble;

class ImmeubleController extends Controller
{
    public function atta($id, $account_id)
    {
        $immeuble = \App\Immeuble::find($id);

        $immeuble->account()->attach($account_id);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immeuble = Immeuble::all();

        return $immeuble;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'name' => 'required',
        ]);
        $immeuble = new Immeuble([
            'address' => $request->get('address'),
            'name' => $request->get('name'),
        ]);
        $immeuble->save();
        return $immeuble;//redirect('/immeuble')->with('succes', 'Immeuble has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $immeuble = Immeuble::find($id);
        return $immeuble;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required',
            'name' => 'required',
        ]);

        $immeuble = Immeuble::find($id);
        $immeuble->address = $request->get('address');
        $immeuble->name = $request->get('name');
        $immeuble->save();

        return $immeuble;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $immeuble = Immeuble::find($id);
        $immeuble->delete();
    }
}
