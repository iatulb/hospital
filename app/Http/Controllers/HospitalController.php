<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get($id){   
        $hospital = \App\Models\Hospital::with('rooms')->where('id', '=', $id)->get();              
        return response()->json($hospital);
    }

    public function post(Request $request){
        $hospital = Hospital::create($request->all());
 
        return response()->json($hospital);        
    }

    public function put(Request $request, $id){
        $hospital = \App\Models\Hospital::find($id);
        $hospital->name = $request->input('name');
        $hospital->address = $request->input('address');
        $hospital->phone = $request->input('phone');
        $hospital->save();
 
        return response()->json($hospital);        
    }
}
