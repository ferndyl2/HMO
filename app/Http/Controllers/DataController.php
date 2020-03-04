<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DataController extends Controller
{
    public function getHmocode()
    {
        $healths = DB::table('healths')->pluck("hmo_code","id");
        return view('dropdown',compact('healths'));
    }

    public function getHmodescription($id) 
    {        
            $healths = DB::table("healths")->where("hmo_code",$id)->pluck("hmo_description","id");
            return json_encode($healths);
    }
}
