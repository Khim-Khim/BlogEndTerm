<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\User;
class PageController extends Controller
{
    public function getIndex(){

        $hotstatus = status::where('hot',1)->paginate(4);
        foreach($hotstatus as $key => $value){
            $user=$value->user_id;
        
        }

        
        return view('page.index',compact('hotstatus'));
    }


}
