<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apl01Controller extends Controller
{
    //
    public function index(Request $request){
    	return view('apl01.index');
    }
}
