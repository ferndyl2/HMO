<?php

namespace App\Http\Controllers;

use App\Companyfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyfiles = Companyfile::latest()->paginate(5);

        return view('companyfiles.index' , compact('companyfiles'))

            ->with('i' , (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companyfiles.create');
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

            'hmo_desc' => 'required',
            'hmo_sfx' => 'required',
            'hmo_status' => 'required',
            'credit_limit' => 'required',
        ]);  

        CompanyFile::create($request->all());

        return redirect()->route('companyfiles.index')

                    ->with('success', 'Health Company File Maintenance created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companyfile  $companyfile
     * @return \Illuminate\Http\Response
     */
    public function show(Companyfile $companyfile)
    {
        return view('companyfiles.show' , compact('companyfiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companyfile  $companyfile
     * @return \Illuminate\Http\Response
     */
    public function edit(Companyfile $companyfile)
    {
        return view('companyfiles.edit', compact('companyfiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companyfile  $companyfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companyfile $companyfile)
    {
        $request->validate([
            'hmo_code' => 'required',

            'hmo_desc' => 'required',
            'hmo_sfx' => 'required',
            'hmo_status' => 'required',
            'credit_limit' => 'required',
        ]);

        $companyfile->update($request->all());

        return redirect()->route('companyfiles.index')

                    ->with('success', 'Health Company File Maintenance updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companyfile  $companyfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companyfile $companyfile)
    {
        $companyfile->delete(); 

        return redirect()->route('companyfiles.index')

                ->with('success', 'Health Company File Maintenance deleted successfully');
    }
}
