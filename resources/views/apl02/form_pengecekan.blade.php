@extends('layouts.dashboard.navbarasesor')

@section('title')
  Pengecekan
@endsection


@section('content')

    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Pengecekan</h3>
        </div>
        <div class="panel-body"> 
          <div class="col-md-12">
              <div class="box box-primary">
                    <div class="box-body">
                      <div class="form-group">
                        <label>Nama Peserta</label>
                        <input type="text" class="form-control" name="nama" value="">
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
    
@endsection 