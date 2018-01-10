<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">
</head>
<body>
  <div class="container-fluid" style="background-color: #34495e;"> 
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">APL02</h3>
        </div>
        <div class="panel-body"> 
          <div class="col-md-12">
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
          <div class="row">
            <div class="col-md-6">
              <div class="box box-primary">
                    <div class="box-body">
                      <div class="form-group">
                        <label>Nama Peserta</label>
                        <input type="text" class="form-control" name="nama" readonly="">
                      </div>
                      <div class="form-group"> 
                        <label>Nama Asesor 1</label>
                        <input type="text" class="form-control" name="nama_asesor1" placeholder="Nama Asesor 1 ...">
                      </div>
                      <div class="form-group">
                        <label>Nama Asesor 2</label>
                        <input type="text" class="form-control" name="nama_asesor2" placeholder="Nama Asesor 2 ...">
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
                      <div class="form-group">
                        <label>Kode Unit Kompetensi</label>
                        <select class="form-control">
                            @foreach($units as $unit)
                            <option value="{{$unit['id_unit']}}">{{$unit['id_unit']}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                </div>   
            </div>
              

            <div class="col-md-12">
              <div class="box box-danger">
                    <div class="box-body">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label>Kode Unit Kompetensi</label>
                          <input type="text" class="form-control" name="">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Judul Unit Kompetensi</label>
                          <input type="text" class="form-control" name="">
                        </div>
                      </div>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <td>Elemen</td>
                            <td>Pernyataan</td>
                            <td>Penilaian</td>
                          </tr>
                        </thead>
                          <tr>
                            <td>Membuat gambar</td>
                            <td>Penilaian kecocokan software camera dengan system hardware dan memilih software yang cocok untuk produksi.
                            </td>
                            <td>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> K
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> BK
                              </label>
                            </td>
                          </tr>
                      </table>
                    </div>
                </div>   
            </div>

            </div>          
        </div>
      </div>    
    </div>  
  </div>
</body>
</html>