<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
class AdminController extends Controller
{
    public function getAdminPage() {
        $getStatus = status::where('waiting', 1)->get();
        
         return view('admin.Admin',compact('getStatus'));
    }
    public function gethotstatus($id){
         $uphot = status::where('id_status',$id)->first();
         if( $uphot->hot == "0"){
              $uphot->hot = "1";
               $uphot->save(); 
         }elseif($uphot->hot == "1"){
         $uphot->hot = "0";
          $uphot->save(); 
         }   
     return redirect()->back();
    }
    public function getdeletestatus($id){
        status::where('id_status', $id)->delete();
        return redirect()->back();
    }
    public function getcensorship(){
        $duyet = status::where('waiting',0)->get();
        return view('admin.censorship',compact('duyet'));
    }
    public function getaccept($id){
        $accept = status::where('id_status', $id)->first();
        $accept->waiting = "1";
        $accept->save();
        return redirect()->back();
    }
   
}
