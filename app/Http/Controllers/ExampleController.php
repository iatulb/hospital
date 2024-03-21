<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
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

    public function getTemplate($id=12){
         
        return response()->json(["asd" => [['asdd' => 'dfg'], ['asdd' => 'dfg']]]);
    }
    //
}
