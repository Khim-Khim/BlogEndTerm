<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\comments;
use Auth;
class CommentController extends Controller
{
     public function postComment($id, Request $req){

      $idstatus= $id;
      $status = status::find($id);
      $comment = new comments;
      $comment->id_user = Auth::user()->id;
      $comment->comment = $req->comment;
      $comment->id_status = $id;
      $comment->save();
      return back();  
  }
}
