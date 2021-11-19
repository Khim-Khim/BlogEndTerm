<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\advertisement;
use App\idpage;
class ReviewController extends Controller
{
    public function getReview(){
        $review = status::where('id_page',1)->leftjoin('users','status.user_id','=','users.id')->paginate(3);
        $advertisement = advertisement::paginate(4);
         
        return view('page.Reviewtravel', compact('review','advertisement'));
    }
   
}
