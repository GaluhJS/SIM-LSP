<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Unit;
use App\Apl01;

class apl02Controller extends Controller
{
    //
    public function index($id){
    	$units = Unit:: All();
    	$apl1 = Apl01::findOrFail($id);
    	return view('apl02.index', compact('units','apl1'));
    }
}
