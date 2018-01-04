<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apl02Controller extends Controller
{
    //
    public function index(Request $request){
    	return view('apl02.index');
    }
}
