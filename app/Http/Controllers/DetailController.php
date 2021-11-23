<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
class DetailController extends Controller
{
    public function getDetail(Request $request){
        $detail = status::where('id_status', $request->id)->first();
        return view('page.Detail',compact('detail'));

    }
}
