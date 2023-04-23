<?php

namespace App\Http\Controllers;

use App\Models\Pilots;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilots=Pilots::latest()->paginate(10);

        return view('pilots.index', compact('pilots'))->with (request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pilots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'name'=>'required',
            'rank'=>'required'
        ]);

        //create pilot data
        Pilots::create($request->all());

        //redirect user to home
        return redirect()->route('pilots.index')->with('success','Pilot Info Successfully loaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pilots  $pilots
     * @return \Illuminate\Http\Response
     */
    public function show(Pilots $pilots)
    {
        return view('pilots.show', compact('$pilots'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pilots  $pilots
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilots $pilots)
    {
        return view('pilots.edit', compact('pilots'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pilots  $pilots
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilots $pilots)
    {
          //validate
          $request->validate([
            'name'=>'required',
            'rank'=>'required'
        ]);

        //create pilot data
        pilots->update($request->all());

        //redirect user to home
        return redirect()->route('pilots.index')->with('success','Pilot Info Successfully updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilots  $pilots
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilots $pilots)
    {
        //
    }
}
