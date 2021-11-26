<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\comments;
use App\advertisement;
class DetailController extends Controller
{
    public function getDetail(Request $request, $id){
        $detail = status::where('id_status', $request->id)->leftJoin('users','status.user_id','=','users.id')->first();
      
        $comment = comments::where('id_status', $id)->leftjoin('users', 'comments.id_user', '=' , 'users.id')->get();
       

        return view('page.Detail',compact('detail','comment'));

    }
    public function getDetailAD(Request $request, $id){
        $advertisement = advertisement::where('id',$request->id)->first();
        return view('page.DetailAD',compact('advertisement'));
    }
}
