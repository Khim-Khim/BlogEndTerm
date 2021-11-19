<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipController extends Controller
{
    public function getTip(){
        return view('page.Tip');
    }        
}
