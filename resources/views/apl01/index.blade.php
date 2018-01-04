@extends('layouts.dashboard.index')

@section ('title')
  APL-01
@stop

@section('content-header')
    <h1>
        APL-01
        <small>Optional description</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> index</a></li>
        <li class="active">APL-01</li>    
    </ol>
@stop

@section('content')
<div class="row">
<div class="col-md-6">
  <div class="box box-primary">
        <div class="box-body">
          <label>A. Data Pribadi</label>
          <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Laki-Laki
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Perempuan
              </label>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kebangsaan" placeholder="Kebangsaan">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kd_pos" placeholder="Kode Pos">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="tlp_rumah" placeholder="Nomor Telpon Rumah">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="tlp_hp" placeholder="Nomor Telpon HP">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="tlp_kantor" placeholder="Nomor Telpon Kantor">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
          </div>
        </div>
    </div>   
</div>


<div class="col-md-6">
  <div class="box box-primary">
        <div class="box-body">
          <label>B. Data Pekerjaan Sekarang</label>
          <div class="form-group">
            <input type="text" class="form-control" name="nama_lembaga" placeholder="Nama Lembaga">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="alamat_perusahaan" placeholder="Alamat"></textarea>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kd_pos_lembaga" placeholder="Kode Pos Lembaga">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="tlp_lembaga" placeholder="Nomor Telpon Lembaga">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="fax" placeholder="Fax">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email_lembaga" placeholder="Email Lembaga">
          </div>
          <label>C. Data Permohonan Sertifikasi</label>
          <div class="form-group">
            <input type="text" class="form-control" name="tujuan_asesmen" placeholder="Tujuan Asesmen">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="skema_sertifikasi" placeholder="Skema Sertifikasi">
          </div>
          <div class="form-group">
            <input type="reset" class="btn btn-default" name="" value="Reset">
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
        </div>
    </div>   
</div>
  
</div>
@stop 