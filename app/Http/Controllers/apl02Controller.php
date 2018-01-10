<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Unit;

class apl02Controller extends Controller
{
    //
    public function index(Request $request){
    	$units = Unit:: All();
    	return view('apl02.index', compact('units'));
    }
}
