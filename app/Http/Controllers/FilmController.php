<?php

namespace App\Http\Controllers;

class FilmController extends Controller
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

    public function getFilm($id=12){
         
        return response()->json(\App\Models\Film::all(['title']));
    }
    //
}
