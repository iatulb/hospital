<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
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
        $room = \App\Models\Room::with('hospital')->with('patient')->where('id', '=', $id)->get();        
        return response()->json($room);
    }

    public function post(Request $request){
        $room = \App\Models\Room::create($request->all());
 
        return response()->json($room);        
    }
    
    public function put(Request $request, $id){
        $room = \App\Models\Room::find($id);
        $room->number = $request->input('number');
        $room->type = $request->input('type');
        $room->availibility = $request->input('availibility');
        $room->hospital_id = $request->input('hospital_id');
        $room->save();
 
        return response()->json($room);        
    }
}
