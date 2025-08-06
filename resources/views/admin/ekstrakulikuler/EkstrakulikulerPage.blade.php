 @extends('layout.layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Rombongan Belajar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Rombel</a></li>
            <li class="breadcrumb-item active">Data Ekstrakulikuler</li>
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
                <i class="fa fa-address-card mr-1"></i>
                Data Ekstrakulikuler
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <a href="{{route('rombel.ekstrakulikuler.input')}}">
                <button class="btn btn-primary"><i class="fas fa-plus"></i> Input Ekstrakulikuler</button>
              </a>
              <a href="{{route('rombel.ekstrakulikuler.input')}}">
                <button class="btn btn-info"><i class="fa fa-address-card"></i> Anggota Rombel</button>
              </a>
                <table id="academicYearTable" class="table">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Ekstrakulikuler</th>
                    <th>Jenis Ekstrakulikuler</th>
                    <th>Nama Jenis Ekstrakulikuler</th>
                    <th>Jumlah Peserta Didik</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody></tbody>
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