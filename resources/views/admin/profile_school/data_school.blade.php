@extends('layout.layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Sekolah</a></li>
            <li class="breadcrumb-item active">Profile Sekolah</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-school mr-1"></i>
                Biodata Sekolah
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                
              <table class="table">
                <tr>
                  <td>NSS</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>NPSN</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Nama Sekolah</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Jenjang</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Kepala Sekolah</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Kelurahan</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Kabupaten</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Provinsi</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Kode Pos</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Telepon</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>Value</td>
                </tr>
                <tr>
                  <td>Website</td>
                  <td>Value</td>
                </tr>
              </table>
              <a href="{{ route('schooldata.update')}}">
                <button class="btn btn-warning"> <i class="fas fa-pencil-alt"></i> Update</button>
              </a>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

        </section>
        <section class="col-lg-5 connectedSortable">
          
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                <i class="fas fa-image mr-1"></i>
                Logo Sekolah
              </div>
            </div>
            <div class="card-body">
              <img class="img-circle elevation-2 mx-auto d-block" src="{{ Vite::asset('resources/img/AdminLTELogo.png')}}" alt="logo-sekolah">
            </div>
          </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->    
@endsection