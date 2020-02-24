<?php

namespace App\Http\Controllers;

use App\Itemfile;
use Illuminate\Http\Request;

class ItemfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $itemfiles = Itemfile::latest()->paginate(5);

  

        return view('itemfiles.index',compact('itemfiles'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('itemfiles.create');

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

            'id_no' => 'required',

            'item_description' => 'required',

        ]);

  

        Itemfile::create($request->all());

   

        return redirect()->route('itemfiles.index')

                        ->with('success','Item file created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itemfile  $itemfile
     * @return \Illuminate\Http\Response
     */
    public function show(Itemfile $itemfile)
    {

        return view('itemfiles.show',compact('itemfile'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itemfile  $itemfile
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemfile $itemfile)
    {

        return view('itemfiles.edit',compact('itemfile'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itemfile  $itemfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemfile $itemfile)
    {

        $request->validate([

            'id_no' => 'required',

            'item_description' => 'required',

        ]);

  

        $itemfile->update($request->all());

  

        return redirect()->route('itemfiles.index')

                        ->with('success','Product updated successfully');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemfile  $itemfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemfile $itemfile)
    {

        $itemfile->delete();

  

        return redirect()->route('itemfiles.index')

                        ->with('success','Product deleted successfully');

    }
}
