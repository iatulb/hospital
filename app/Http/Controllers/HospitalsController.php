<?php

namespace App\Http\Controllers;

class HospitalsController extends Controller
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

    public function get(){         
        $records = \App\Models\Hospital::with('rooms')
        ->select('hospital.*');

        $result = $records->get();
        return response()->json([
            'records' => $result,
            'count' => count($result)
        ]);
    }
}
