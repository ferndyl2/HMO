<?php

namespace App\Http\Controllers;

use App\Patientdata;
use Illuminate\Http\Request;
use DB;
class PatientdatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $patientdatas = Patientdata::latest()->paginate(5);

  

        return view('patientdatas.index',compact('patientdatas'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('patientdatas.create');

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

            'h_code' => 'required',
            'h_desc' => 'required',
            'patient_codes' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'dependent' => 'required',
            'date_avail' => 'required',
            'i_code' => 'required',
            'i_desc' => 'required',
            'sundries' => 'required',
            'prof_fee' => 'required',
            'credits' => 'required',

        ]);

  

        Patientdata::create($request->all());

   

        return redirect()->route('patientdatas.index')

                        ->with('success','Patient Data created successfully.');

    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Patientdata  $patientdata
     * @return \Illuminate\Http\Response
     */
    public function show(Patientdata $patientdata)
    {

        return view('patientdatas.show',compact('patientdata'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patientdata  $patientdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Patientdata $patientdata)
    {

        return view('patientdatas.edit',compact('patientdata'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patientdata  $patientdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patientdata $patientdata)
    {

        $request->validate([

            'h_code' => 'required',
            'h_desc' => 'required',
            'patient_codes' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'dependent' => 'required',
            'date_avail' => 'required',
            'i_code' => 'required',
            'i_desc' => 'required',
            'sundries' => 'required',
            'prof_fee' => 'required',
            'credits' => 'required',
        ]);

  

        $patientdata->update($request->all());

  

        return redirect()->route('patientdatas.index')

                        ->with('success','Patient Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patientdata  $patientdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patientdata $patientdata)
    {

        $patientdata->delete();

  

        return redirect()->route('patientdatas.index')

                        ->with('success','Patient Data deleted successfully');

    }


    
}