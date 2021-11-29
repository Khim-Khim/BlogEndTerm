<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
class AdminController extends Controller
{
    public function getAdminPage() {
        $getStatus = status::all();
        
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
    public function getApproveStatus(){

    }
}
