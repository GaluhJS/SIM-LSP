@extends('layouts.dashboard.index')

@section ('title')
  Unit
@stop

@section('content-header')
    <h1>
        Unit
        <small>Optional description</small>
    </h1>

    <ol class="breadcrumb">
        <li><count href="#"><i class="fa fa-dashboard"></i> index</count></li>
        <li class="active">Unit</li>    
    </ol>
@stop

@section('content')
<!-- <div class="row"> -->
<!-- <div class="col-md-5">
  <div class="box box-primary">
        <div class="box-body">
          <form method="post" action="{{ url('unit') }}">  
            {{ csrf_field() }}
          <div class="form-group">
            <label>Kode Unit</label>
            <input type="text" class="form-control" name="id_unit">
          </div>
          <div class="form-group">
            <label>Judul Unit</label>
            <input type="text" class="form-control" name="judul_unit">
          </div>
          <div class="form-group">
            <label>Jenis statndar</label>
            <input type="text" class="form-control" name="jenis_standar">
          </div>
          <div class="form-group">   
            <input type="submit" class="btn btn-primary pull-right" value="Tambah" name="tambah">
          </div>
          </form>   
        </div>    
    </div>   
</div> -->


<!-- <div class="col-md-10">
  <div class="box box-danger">
        <div class="box-body">
        <table class="table table-hover">
          <thead>
            <td>Kode Unit</td>
            <td>Judul Unit</td>
            <td>Jenis Standar</td>
            <td class="col-md-2">Aksi</td>
            </thead>
          @foreach($datas as $data)
          <tr>
            <td>{{$data['id_unit']}}</td>
            <td>{{$data['judul_unit']}}</td>
            <td>{{$data['jenis_standar']}}</td>
            <td>
              <button type="button" href="{{url('unit/edit/'.$data->id_unit)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
              <a type="button" href="{{ url('unit/'. $data['id_unit'] .'/delete') }}" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ingin menghapus Kostumer ini?')"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </table>
        </div>
    </div>   
</div>
  
</div> -->
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

            <button type="" class="btn btn-primary pull-left" data-toggle="modal" data-target="#myModal">
              Tambah Unit
            </button>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                            <form action="{{ url('unit') }}" method="post">
                        
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah data Customer</h4>
                        </div>

                             <div class="modal-body" style="padding-bottom: 0">
                             <form method="post" action="{{ url('unit') }}">  
                              {{ csrf_field() }}
                            <div class="form-group">
                              <label>Kode Unit</label>
                              <input type="text" class="form-control" name="id_unit">
                            </div>
                            <div class="form-group">
                              <label>Judul Unit</label>
                              <input type="text" class="form-control" name="judul_unit">
                            </div>
                            <div class="form-group">
                              <label>Jenis statndar</label>
                              <input type="text" class="form-control" name="jenis_standar">
                            </div>
                            </div>

                             <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Tambahkan">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="box-body">
        <div class="table-responsive">     
          <table class="table table-striped">
            <thead>
              <tr>
                <td>Kode Unit</td>
                <td>Judul Unit</td>
                <td>Jenis Standar</td>
                <td>Aksi</td>
              </tr>
            </thead>
          @foreach($datas as $data)
          <tr>
            <td>{{$data['id_unit']}}</td>
            <td>{{$data['judul_unit']}}</td>
            <td>{{$data['jenis_standar']}}</td>
            <td>
              <!-- Modal edit -->
                    <div id="myModalEdit{{ $data['id_unit'] }}"" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <form method="get" action="{{url('unit/'.$data['id_unit'].'/update' )}}">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit data Customer</h4>
                          </div>

                          <div class="modal-body" style="padding-bottom: 0">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="form-group">
                              <label>Kode Unit</label>
                              <input type="text" class="form-control" name="id_unit" value="{{$data['id_unit']}}">
                            </div>
                            <div class="form-group">
                              <label>Judul Unit</label>
                              <input type="text" class="form-control" name="judul_unit" value="{{$data['judul_unit']}}">
                            </div>
                            <div class="form-group">
                              <label>Jenis statndar</label>
                              <input type="text" class="form-control" name="jenis_standar" value="{{$data['jenis_standar']}}">
                            </div>
                             </div>
                            
                                <div class="modal-footer">
                                     <button type="submit" class="btn btn-info">Update</button>
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> 
                            </div>
                        </form>
                      </div>
                    </div>
                    <!-- tutup modal -->
              <button type="button" href="{{url('unit/edit/'.$data->id_unit)}}" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModalEdit{{ $data['id_unit'] }}"><i class="fa fa-pencil"></i></button>
              <a type="button" href="{{ url('unit/'. $data['id_unit'] .'/delete') }}" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ingin menghapus Unit ini?')"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
        </div>
    </div>   
@stop 