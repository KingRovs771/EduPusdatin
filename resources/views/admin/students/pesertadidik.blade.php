@extends('layout.layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Peserta Didik</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Peserta Didik</a></li>
            <li class="breadcrumb-item active">Peserta Didik</li>
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
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-database mr-1"></i>
                Data Siswa
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <a href="{{ route('pesertadidik.siswa.formInputSiswa')}}" class="mr-2">
                        <button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button>
                    </a>
                    <a href="{{ route('pesertadidik.siswa.formImportSiswa')}}" class="mr-2">
                        <button class="btn btn-success"><i class="fas fa-download"></i> Import Data</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus Data</button>
                    </a>
                </div>
                 <table class="table mt-2">
                    <tr>
                        <th><input type="checkbox" name="" id=""></th>
                        <th>No</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Detail</th>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>No</td>
                        <td>NISN</td>
                        <td>NIS</td>
                        <td>Nama Lengkap</td>
                        <td>Update</td>
                        <td>Delete</td>
                        <td>Detail</td>
                    </tr>
                 </table>   
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

        </section>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->    
@endsection