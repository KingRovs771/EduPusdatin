 @extends('layout.layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tahun Akademik</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Sekolah</a></li>
            <li class="breadcrumb-item active">Tahun Akademik</li>
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
                <i class="fas fa-calendar mr-1"></i>
                Tahun Akademik
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <a href="{{route('schooldata.academicyear.input')}}">
                <button class="btn btn-primary"><i class="fas fa-calendar-plus"></i> Input Tahun Akademik</button>
              </a>
                <table id="academicYearTable" class="table">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Akademik</th>
                    <th>Tahun</th>
                    <th>Status</th>
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