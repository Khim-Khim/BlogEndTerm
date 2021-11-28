<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\follow;
use Auth;
class FollowController extends Controller
{

    public function getFollow(){
    $follow = follow::where('id_user',Auth::user()->id)->leftjoin('status', 'follow.id_status','=','status.id_status')->get();

      return view('user.follow', compact('follow'));

    }
    public function getAddFollow($id){
        $add = new follow();
        $add->id_user = Auth::user()->id;
        $add->id_status = $id;
        $add->save();
     
        return redirect()->back();
    }
    public function getDeletefollow($id){
        follow::where('id_user', Auth::user()->id)->where('id_status', $id)->delete();
        return redirect()->back();
    }
   
}
