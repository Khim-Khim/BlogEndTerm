<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use Auth;
class ManagerUserController extends Controller
{
    public function getPage(){
        
        $data = status::where('user_id', Auth::user()->id)->get();
       return view('user.Manager', compact('data'));
    }
}
