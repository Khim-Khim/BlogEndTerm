<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpstoryController extends Controller
{
    public function getForm(){
        return view('user.UpStory');
    }
}
