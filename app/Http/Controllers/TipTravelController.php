<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\advertisement;
use App\idpage;
class TipTravelController extends Controller
{
    public function getTipTravel(){
        $tiptravel = status::where('id_page',4)->where('waiting',1)->leftjoin('users','status.user_id','=','users.id')->paginate(3);
        $advertisement = advertisement::paginate(4);
         
        return view('page.TipTravel', compact('tiptravel','advertisement'));
 
       
    }
}
