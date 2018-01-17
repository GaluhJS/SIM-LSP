<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengecekanController extends Controller
{
    //
    public function index(Request $require){
    	return view('apl02.form_pengecekan');
    }
}
