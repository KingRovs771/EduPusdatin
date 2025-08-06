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
            <li class="breadcrumb-item"><a href="#">Peserta Didik</a></li>
            <li class="breadcrumb-item active">Form Input Siswa Baru</li>
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
                Form Import Peserta Didik
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="" method="POST">
                <table id="academicYearTable" class="table mt-1">
                  <tr>
                    <td>File Import</td>
                    <td><input class="form-control" type="file"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><button class="btn btn-info"><i class="fas fa-database mr-1"></i> Proses Data</button></td>
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