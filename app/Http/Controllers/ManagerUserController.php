<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use Auth;
class ManagerUserController extends Controller
{
    public function getPage(){
        
        $data = status::where('user_id', Auth::user()->id)->get();
       return view('user.Manager', compact('data'));
    }
    public function getAddPage(){
        return view('user.AddStatus');
    }
    public function postAddStatus( Request $req){
      $status = new status();
      $status->user_id = Auth::user()->id;
      if ($req->hasFile('titleImage')) {
            $image = $req->file('titleImage');
            $name = $image->getClientOriginalName();
            $image->move('public/fontend/images/image',$name);
            $status->image=$name;
        }
     
     $status->id_page=$req->type;
     $status->hot="0";
     $status->title=$req->title;
     $status->description="test";
       if ($req->hasFile('video')) {
            $image = $req->file('video');
            $namevideo = $image->getClientOriginalName();
            $image->move('public/fontend/images/image',$namevideo);
              $status->video=$namevideo;
        }
     $status->save();
       return view('user.AddStatus');
   }

   public function ckeditor_image(Request $request){
        if($request->hasFile('upload')) {

        $originName = $request->file('upload')->getClientOriginalName();

        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();

        $fileName = $fileName.'_'.time().'.'.$extension;

        $request->file('upload')->move( 'public/fontend/images/ckeditor', $fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');

        $url = asset('public/fontend/images/ckeditor/'.$fileName);
        $msg = 'Tải ảnh thành công';
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
        @header('Content-type: text/html; charset=utf-8');
        echo $response;
        }

        }

}

