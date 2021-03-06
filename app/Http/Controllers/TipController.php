<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\advertisement;
use App\idpage;
class TipController extends Controller
{
    public function getTip(){
        $tip = status::where('id_page',2)->where('waiting',1)->leftjoin('users','status.user_id','=','users.id')->paginate(6);
        $advertisement = advertisement::paginate(4);
        return view('page.Tip',compact('tip','advertisement'));
    }        
}
