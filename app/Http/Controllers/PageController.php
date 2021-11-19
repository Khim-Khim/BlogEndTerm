<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\User;
use App\advertisement;
class PageController extends Controller
{
    public function getIndex(){

        $hotstatus = status::where('hot',1)->leftjoin('users','status.user_id','=','users.id')->paginate(7);
        $advertisement = advertisement::paginate(2);
        $view = status::where('hot',0)->paginate(3);
        return view('page.index',compact('hotstatus','advertisement','view'));
    }
  

}
