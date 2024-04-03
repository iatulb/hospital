<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomPatientController extends Controller
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
        $room = \App\Models\RoomPatient::where('id', '=', $id)->first();        
        return response()->json($room);
    }

    public function post(Request $request){
        $room = \App\Models\RoomPatient::create($request->all());
 
        return response()->json($room);        
    }
    
    public function patch(Request $request, $id){
        $room = \App\Models\RoomPatient::find($id);
        if (!empty($request->input('discharge_date'))) {
            $room->discharge_date = $request->input('discharge_date');
        }        
        $room->save(); 
        return response()->json($room);        
    }
}
