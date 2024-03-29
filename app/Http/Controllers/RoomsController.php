<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
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

    public function get(Request $request){
        $rooms = DB::table('room');
        if (!empty($request->input('hospital_id'))) {
            $rooms = $rooms->where('hospital_id', '=', $request->input('hospital_id'));
        }
        $result = $rooms->get();        
        return response()->json([
            'records' => $result,
            'count' => count($result)
        ]);
    }
}
