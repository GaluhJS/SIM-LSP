<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Apl01;
use App\Unit;
use Session;

class apl01Controller extends Controller
{
    //
    public function index(Request $request){
      return view('apl01.index');
    }
    public function index2(Request $request){
    	$datas = Apl01::All();
    	return view('apl01.data', compact('datas'));
    }

    public function store(Request $request){
    	$input = $request->all();
    	$kode = Apl01::create($input);


    	// $data = Apl01::all();
    	// Session::put('nama',$data['nama']);
		return redirect('apl02/'.$kode->id);
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
