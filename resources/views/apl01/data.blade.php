@extends('layouts.dashboard.index')

@section('title')
  Data Peserta
@endsection

@section('content-header')
    <h1>
        Data Peserta
        <small>Optional description</small>
    </h1>

    <ol class="breadcrumb">
        <li><count href="#"><i class="fa fa-dashboard"></i> index</count></li>
        <li class="active">Data Peserta</li>    
    </ol>
@endsection

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
              <div class="col-sm-4 clearfix pull-right">
                <div class="row">
                  <form action="" method="get" id="form-pencarian">
                    <div class="input-group">
                      <input type="text" name="filter_customer" class="form-control" placeholder="Cari Unit ...">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-info"><i class="fa fa-search"></i>
                        </button>
                        <a href="{{url('unit')}}" class="btn btn-info"><i class="fa fa-refresh"></i></a>
                      </span>
                    </div>
                  </form>
                </div>
                </div>

        </div>

        <div class="box-body">
        <div class="table-responsive">     
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>JK</th>
                <th>Kebangsaan</th>
                <th>Alamat</th>
                <th>Kode Pos</th>
                <th>Tlp Rumah</th>
                <th>Tlp Hp</th>
                <th>Tlp Kantor</th>
                <th>Email</th>
                <th>Pendidikan Terakhir</th>
              </tr>
            </thead>
          @foreach($datas as $data)
          <tr>
            <td>{{$data['nama']}}</td>
            <td>{{$data['tempat_lahir']}}</td>
            <td>{{$data['tgl_lahir']}}</td>
            <td>{{$data['jk']}}</td>
            <td>{{$data['kebangsaan']}}</td>
            <td>{{$data['alamat']}}</td>
            <td>{{$data['kd_pos']}}</td>
            <td>{{$data['tlp_rumah']}}</td>
            <td>{{$data['tlp_hp']}}</td>
            <td>{{$data['tlp_kantor']}}</td>
            <td>{{$data['email']}}</td>
            <td>{{$data['pendidikan_terakhir']}}</td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
        </div>
    </div>  
    
@endsection 