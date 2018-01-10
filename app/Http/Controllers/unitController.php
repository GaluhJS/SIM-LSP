<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Unit;
use Session;
use Validator;

class unitController extends Controller
{
    //
    public function index(Request $request){
        $datas = Unit::All();
    	return view('unit.index', compact('datas'));
    }
    public function store(Request $request){
        $tampil = $request->all();
        $validator = Validator::make($tampil, [
            'id_unit'      => 'required',
            'judul_unit'   => 'required',
            'jenis_standar'=> 'required'
        ]);

        if ($validator->fails()) {
            return redirect('unit')
                ->withInput()
                ->withErrors($validator);
        }
        Unit::create($tampil);
        return redirect('unit');
    }
    public function destroy($id){
        $unit = Unit::findOrFail($id);

        $unit->delete();

        return redirect('unit');
    }
    public function update(Request $request, $id){
        $unit = Unit::findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($input, [
            'id_unit'      => 'required',
            'judul_unit'   => 'required',
            'jenis_standar'=> 'required'
        ]);

        if ($validator->fails()) {
            return redirect('unit')
                ->withInput()
                ->withErrors($validator);
        }

        $unit->update($input);
        return redirect('unit');
    }
}
