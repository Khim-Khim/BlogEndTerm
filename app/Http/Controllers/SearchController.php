<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
class SearchController extends Controller
{
    public function getSearch(Request $request){
         $search = status::where('title','like','%'.$request->search.'%')->orWhere('description',$request->search)->get();

            return view('page.Search',compact('search'));                        
                          
    }


    }
