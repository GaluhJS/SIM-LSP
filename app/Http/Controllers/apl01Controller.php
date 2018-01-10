<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Apl01;
use App\Unit;

class apl01Controller extends Controller
{
    //
    public function index(Request $request){
    	$units = Unit::All();
    	return view('apl01.index', compact('units'));
    }

    public function store(Request $request){
    	$input = $request->all();
    	Apl01::create($input);
		return redirect('apl01');
		// Apl01::create([
  //               'nama' => $request->nama,
  //               'tempat_lahir' => $request->tempat_lahir,
  //               'tgl_lahir' => $request->tgl_lahir,
  //               'jk' => $request->jk,
  //               'kebangsaan' => $request->kebangsaan,
  //               'alamat' => $request->alamat,
  //               'kd_pos' => $request->kd_pos,
  //               'tlp_rumah' => $request->tlp_rumah,
  //               'tlp_hp' => $request->tlp_hp,
  //               'tlp_kantor' => $request->tlp_kantor,
  //               'email' => $request->email,
  //               'pendidikan_terakhir' => $request->pendidikan_terakhir,
  //               'nama_lembaga' => $request->nama_lembaga,
  //               'jabatan' => $request->jabatan,
  //               'alamat_perusahaan' => $request->alamat_perusahaan,
  //               'kd_pos_lembaga' => $request->kd_pos_lembaga,
  //               'tlp_lembaga' => $request->tlp_lembaga,
  //               'fax' => $request->fax,
  //               'email_lembaga' => $request->email_lembaga,
  //               'tujuan_asesmen' => $request->tujuan_asesmen,
  //               'skema_sertifikasi' => $request->skema_sertifikasi
  //           ]);
  //     return redirect('apl01');
    }
}
