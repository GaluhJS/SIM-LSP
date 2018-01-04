<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unitController extends Controller
{
    //
    public function index(Request $request){
    	return view('unit.index');
    }
}
