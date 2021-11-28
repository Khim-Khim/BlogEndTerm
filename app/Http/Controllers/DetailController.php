<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\comments;
use App\advertisement;
use App\follow;
use Auth;
class DetailController extends Controller
{
    public function getDetail(Request $request, $id){
        $detail = status::where('id_status', $request->id)->leftJoin('users','status.user_id','=','users.id')->first();
      
        $comment = comments::where('id_status', $id)->leftjoin('users', 'comments.id_user', '=' , 'users.id')->get();
        if (Auth::check()) {
            $check = follow::where('id_status', $id)->where('id_user',Auth::user()->id)->first();
        if ($check!=null) {
           $check="1" ;
        }
        else {
         $check="0";
        }
        }else{
           $check=null; 
        }
        
        return view('page.Detail',compact('detail','comment','check'));

    }
    public function getDetailAD(Request $request, $id){
        $advertisement = advertisement::where('id',$request->id)->first();
        return view('page.DetailAD',compact('advertisement'));
    }
}
