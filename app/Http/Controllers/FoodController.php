<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\advertisement;
use App\idpage;
class FoodController extends Controller
{
    public function getFoodPage(){
        $food = status::where('id_page',3)->where('waiting',1)->leftJoin('users','status.user_id','=','users.id')->paginate(3);
        
        $advertisement = advertisement::paginate(4);
        return view('page.Food', compact('food','advertisement'));
    }
}



