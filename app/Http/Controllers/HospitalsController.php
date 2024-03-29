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
        $records = \App\Models\Hospital::all(['id', 'name', 'phone']);
        return response()->json([
            'records' => $records,
            'count' => count($records)
        ]);
    }
}
