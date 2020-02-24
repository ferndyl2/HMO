<?php

namespace App\Http\Controllers;

use App\Doctorfile;
use Illuminate\Http\Request;

class DoctorfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $doctorfiles = Doctorfile::latest()->paginate(2);

  

        return view('doctorfiles.index',compact('doctorfiles'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('doctorfiles.create');

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

            'doctors_code' => 'required',

            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'specialty' => 'required',

        ]);

  

        Doctorfile::create($request->all());

   

        return redirect()->route('doctorfiles.index')

                        ->with('success','Doctor file created successfully.');

    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctorfile  $doctorfile
     * @return \Illuminate\Http\Response
     */
    public function show(Doctorfile $doctorfile)
    {

        return view('doctorfiles.show',compact('doctorfile'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctorfile  $doctorfile
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctorfile $doctorfile)
    {

        return view('doctorfiles.edit',compact('doctorfile'));

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctorfile  $doctorfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctorfile $doctorfile)
    {

        $request->validate([

            'doctors_code' => 'required',

            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial' => 'required',
            'specialty' => 'required',

        ]);

  

        $doctorfile->update($request->all());

  

        return redirect()->route('doctorfiles.index')

                        ->with('success','Doctor file updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctorfile  $doctorfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctorfile $doctorfile)
    {

        $doctorfile->delete();

  

        return redirect()->route('doctorfiles.index')

                        ->with('success','Doctor file deleted successfully');

    }
}
