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
<div class="row">
<div class="col-md-5">
  <div class="box box-primary">
        <div class="box-body">
          <form method="post" action="{{ url('unittambah') }}">  
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
            <label>Elemen Kompetensi</label>
            <input type="text" class="form-control" name="elemen_kompetensi">
          </div>
          <div class="form-group">
            <label>Pertanyaan</label>
            <textarea class="form-control" name="pertanyaan" rows="3"></textarea>
          </div>
          <div class="form-group">   
            <input type="submit" class="btn btn-primary pull-right" value="Tambah" name="tambah">
          </div>
          </form>   
        </div>    
    </div>   
</div>


<div class="col-md-7">
  <div class="box box-danger">
        <div class="box-body">
        <table class="table table-hover">
          <thead>
            <td>Kode Unit</td>
            <td>Elemen</td>
            <td>Pertanyaan</td>
            </thead>
            @while($count <= $index)
            <tr>
              <td>{{$session[$count]['id_unit']}}</td>
              <td>{{$session[$count]['elemen_kompetensi']}}</td>
              <td>{{$session[$count]['pertanyaan']}}</td>
            </tr>
            <?php $count++; ?>
            @endwhile
          <tr>
            <td></td>
            <td></td>
            <td>
              <form method="post" action="{{url('unit')}}">
                <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
              </form>
            </td>
          </tr>
        </table>
        </div>
    </div>   
</div>
  
</div>
@stop 