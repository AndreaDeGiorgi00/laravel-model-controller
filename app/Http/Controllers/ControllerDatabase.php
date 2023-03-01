<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ControllerDatabase extends Controller
{
    public function index(){
        $valori = Movie::all();
        dd($valori);
        return  view('home');

    }

}
