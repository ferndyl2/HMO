<?php

namespace App\Http\Controllers;

use App\Health;
use Illuminate\Http\Request;

class HealthsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $healths = Health::latest()->paginate(5);

  

        return view('healths.index',compact('healths'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('healths.create');

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

            'hmo_code' => 'required',

            'hmo_description' => 'required',
            'hmo_description' => 'required',
            'hmo_sfx' => 'required',
            'hmo_status' => 'required',
            'credit_limit' => 'required',

        ]);

  

        Health::create($request->all());

   

        return redirect()->route('healths.index')

                        ->with('success','Health Company File Maintenance created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function show(Health $health)
    {

        return view('healths.show',compact('health'));

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function edit(Health $health)
    {

        return view('healths.edit',compact('health'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Health $health)
    {

        $request->validate([

            'hmo_code' => 'required',

            'hmo_description' => 'required',
            'hmo_description' => 'required',
            'hmo_sfx' => 'required',
            'hmo_status' => 'required',
            'credit_limit' => 'required',
        ]);

  

        $health->update($request->all());

  

        return redirect()->route('healths.index')

                        ->with('success','Health Company File Maintenance updated successfully');

    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function destroy(Health $health)
    {

        $health->delete();

  

        return redirect()->route('healths.index')

                        ->with('success','Health Company File Maintenance deleted successfully');

    }
}
