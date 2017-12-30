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
        <li class="active">Customer</li>    
    </ol>
@stop

@section('content')
<div class="row">
<div class="col-md-6">
  <div class="box box-primary">
        <div class="box-header with-border">
              <div class="col-sm-4 clearfix pull-right">
                <div class="row">
                  <form action="" method="get" id="form-pencarian">
                    <div class="input-group">
                      <input type="text" name="filter_customer" class="form-control" placeholder="Cari Pelanggan ...">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-info"><i class="fa fa-search"></i>
                        </button>
                        <a href="{{url('customer')}}" class="btn btn-info"><i class="fa fa-refresh"></i></a>
                      </span>
                    </div>
                  </form>
                </div>
                </div>

            <button type="" class="btn btn-primary pull-left" data-toggle="modal" data-target="#myModal">
              Tambah Pelanggan
            </button>

        </div>

        <div class="box-body">
        <div class="table-responsive">     
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
              <tbody>
          </tbody>
        </table>
      </div>
        </div>
    </div>   
</div>


<div class="col-md-6">
  <div class="box box-primary">
        <div class="box-header with-border">
              <div class="col-sm-4 clearfix pull-right">
                <div class="row">
                  <form action="" method="get" id="form-pencarian">
                    <div class="input-group">
                      <input type="text" name="filter_customer" class="form-control" placeholder="Cari Pelanggan ...">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-info"><i class="fa fa-search"></i>
                        </button>
                        <a href="{{url('customer')}}" class="btn btn-info"><i class="fa fa-refresh"></i></a>
                      </span>
                    </div>
                  </form>
                </div>
                </div>

            <button type="" class="btn btn-primary pull-left" data-toggle="modal" data-target="#myModal">
              Tambah Pelanggan
            </button>

        </div>

        <div class="box-body">
        <div class="table-responsive">     
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
              <tbody>
          </tbody>
        </table>
      </div>
        </div>
    </div>   
</div>
  
</div>
@stop