<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\advertisement;
class FoodController extends Controller
{
    public function getFoodPage(){
        $food = status::where('id_page',3)->paginate(3);
        $advertisement = advertisement::paginate(4);
        return view('page.Food', compact('food','advertisement'));
    }
}
