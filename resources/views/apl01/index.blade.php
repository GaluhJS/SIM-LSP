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
      <h3 class="panel-title">APL01</h3>
    </div>
    <div class="panel-body"> 
      <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <form method="post" action="{{ url('apl01') }}">
          
            <div class="box-body">
              <label>A. Data Pribadi</label>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                    <input type="radio" name="jk" id="optionsRadios1" value="L">Laki-Laki
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="jk" id="optionsRadios1" value="P">Perempuan
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
            </form>
            </div>
        </div>   
    </div>
    </div>
  </div>    
  </div>  
    
  </div>
</body>
</html>