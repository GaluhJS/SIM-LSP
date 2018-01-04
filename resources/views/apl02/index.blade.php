@extends('layouts.dashboard.index')

@section ('title')
  APL-02
@stop

@section('content-header')
    <h1>
        APL-02
        <small>Optional description</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> index</a></li>
        <li class="active">APL-02</li>    
    </ol>
@stop

@section('content')
<div class="row">
<div class="col-md-6">
  <div class="box box-primary">
        <div class="box-body">
          <div class="form-group">
            <label>Nama Peserta</label>
            <select class="form-control">
              <option>ketikan nama</option>
              <option>Galuh</option>
              <option>Chauzar</option>
            </select>
          </div>
          <div class="form-group"> 
            <label>Nama Asesor 1</label>
            <input type="text" class="form-control" name="nama_asesor1">
            <label>Nama Asesor 1</label>
            <input type="text" class="form-control" name="nama_asesor2">
          </div>
        </div>
    </div>   
</div>


<div class="col-md-6">
  <div class="box box-primary">
        <div class="box-body">
          <div class="form-group">
            <label>Tanggal/Waktu</label>
            <input type="text" class="form-control" name="tgl_waktu" value="{{date('Y-m-d')}}" readonly="">
          </div>
          <div class="form-group">
            <label>TUK</label>
            <input type="text" class="form-control" name="tuk">
          </div>
        </div>
    </div>   
</div>
  

<div class="col-md-8 col-md-offset-2 ">
  <div class="box box-danger">
        <div class="box-body">
          <p>Pada bagian ini, anda diminta untuk menilai diri sendiri terhadap unit (unit-unit) kompetensi yang akan di-ases.
            <br><br>
1. Pelajari seluruh standar Kriteria Unjuk Kerja  (KUK), batasan variabel, panduan penilaian dan aspek kritis serta yakinkan bahwa anda sudah benar-benar memahami seluruh isinya.
<br>
2. Laksanakan penilaian mandiri dengan mempelajari dan menilai kemampuan yang anda miliki secara obyektif terhadap seluruh daftar pertanyaan yang ada, serta tentukan apakah sudah kompeten (K) atau belum kompeten (BK) dengan mencantumkan tanda  dan tuliskan bukti-bukti pendukung yang anda anggap relevan terhadap setiap elemen/KUK unit kompetensi. 
<br>
3. Asesor dan Peserta menandatangi form Asesmen Mandiri
</p>
        </div>
    </div>   
</div>
  

<div class="col-md-8 col-md-offset-2 ">
  <div class="box box-danger">
        <div class="box-body">
          <table class="table table-none">
              <tr>
                <td>Kode Unit Kompetensi</td>
                <td>
                   <select class="form-control">
                    <option>test</option>
                </select>
                </td>
              </tr>
              <tr>
                <td>Judul Sertifikasi</td>
                <td><label>Kualifikasi Level II</label></td>
              </tr>
              <tr>
                <td>Judul Unit Kompetensi</td>
                <td><label>Membuat dan Memanipulasi Gambar-Gambar Digital</label></td>
              </tr>
              <tr>
                <td>Element Kompetensi</td>
                <td>
                   <select class="form-control">
                    <option>test</option>
                </select></td>
              </tr>
          </table>
        </div>
    </div>   
</div>

</div>
@stop 