 @extends('layout.layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Mata Pelajaran</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Sekolah</a></li>
            <li class="breadcrumb-item active">Mata Pelajaran</li>
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
                <i class="fas fa-atom mr-1"></i>
                Form Mata Pelajaran
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="" method="POST">
                <table id="academicYearTable" class="table mt-1">
                  <tr>
                    <td>Nama Mata Pelajaran</td>
                    <td><input class="form-control" type="text" name="tahun_akademik" id="" placeholder="Exp : 2024/2025"></td>
                  </tr>
                  <tr>
                    <td>Nama Singkat</td>
                    <td><input class="form-control" type="text" name="keterangan" id="" placeholder="Ganjil / Genap"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><button class="btn btn-info">Simpan Data</button></td>
                  </tr>
                </table>
                </form>
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