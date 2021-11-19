<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipTravelController extends Controller
{
    public function getTipTravel(){

        return view('page.TipTravel');
    }
}
