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
                <i class="fas fa-atom mr-1"></i>
                Form Siswa Baru
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="" method="POST">
                <table id="pesertaDidikNew" class="table mt-1">
                  <tr>
                    <td>NISN</td>
                    <td><input class="form-control" type="text" name="nisn" id="" placeholder="Nomor Induk Siswa Nasional, Exp : 002898482"></td>
                  </tr>
                  <tr>
                    <td>NIS</td>
                    <td><input class="form-control" type="text" name="nis" id="" placeholder="Nomor Induk Sekolah, EXP : 6212"></td>
                  </tr>
                  <tr>
                    <td>Nama Lengkap Siswa</td>
                    <td><input class="form-control" type="text" name="name_students" id="" placeholder="Nama Lengkap Siswa"></td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td><input class="form-control" type="text" name="keterantempat_lahirgan" id="" placeholder="Tempat Lahir"></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td><input class="form-control" type="date" name="tanggal_lahir" id=""></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin Siswa</td>
                    <td>
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="">--- Pilih Jenis Kelamin ---</option>
                            <option value="Laki-Laki" name="jenis_kelamin">Laki - Laki</option>
                            <option value="Perempuan" name="jenis_kelamin">Perempuan</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama" id="agama" class="form-control">
                            <option value="">--- Pilih Agama ---</option>
                            <option value="Islam" name="agama">Islam</option>
                            <option value="Kristen" name="agama">Kristen</option>
                            <option value="Katolik" name="agama">Katolik</option>
                            <option value="Buddha" name="agama">Buddha</option>
                            <option value="Hindu" name="agama">Hindu</option>
                            <option value="Kong Hu Chu" name="agama">Kong Hu Chu</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="alamar" id="" cols="30" rows="6" class="form-control" placeholder="Alama Lengkap Siswa"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>Nomor Hp (Whatsapp)</td>
                    <td><input class="form-control" type="text" name="no_hp" id="" placeholder="Nomor Hp Yang bisa dihubungi"></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="text" name="email" id="" placeholder="Email Pribadi yang aktif (xxxxxx@gmail.com)"></td>
                  </tr>
                  <tr>
                    <td>Diterima Tanggal</td>
                    <td><input class="form-control" type="date" name="diterima_tgl" id="" ></td>
                  </tr>
                  <tr>
                    <td>Diterima Kelas</td>
                    <td><input class="form-control" type="text" name="diterima_kelas" id="" placeholder="Diterima Pertama Kali Saat Kelas Berapa"></td>
                  </tr>
                  <tr>
                    <td>Asal Sekolah</td>
                    <td><input class="form-control" type="text" name="asal_sekolah" id="" placeholder="Asal Sekolah Siswa"></td>
                  </tr>
                  <tr>
                    <td>Status Keluarga</td>
                    <td>
                        <select name="status_keluarga" class="form-control">
                            <option value="">--- Pilih Status Anak Pada Kartu Keluarga ---</option>
                            <option value="Anak Kandung" name="status_keluarga">Anak Kandung</option>
                            <option value="Anak Sambung" name="status_keluarga">Anak Sambung</option>
                            <option value="Family Lain" name="status_keluarga">Family Lain</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Anak Ke</td>
                    <td><input class="form-control" type="text" name="anakke" id="" placeholder="Anak Ke "></td>
                  </tr>
                  <tr>
                    <td>Nama Ayah</td>
                    <td><input class="form-control" type="text" name="nama_ayah" id="" placeholder="Nama Lengkap Ayah Kandung"></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan Ayah</td>
                    <td><input class="form-control" type="text" name="pekerjaan_ayah" id="" placeholder="Pekerjaan Ayah"></td>
                  </tr>
                  <tr>
                    <td>Nama Ibu</td>
                    <td><input class="form-control" type="text" name="nama_ibu" id="" placeholder="Nama Lengkap Ibu Kandung"></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan Ayah</td>
                    <td><input class="form-control" type="text" name="pekerjaan_ibu" id="" placeholder="Ganjil / Genap"></td>
                  </tr>
                  <tr>
                    <td>Alamat Orang Tua</td>
                    <td>
                        <textarea name="alamat_ortu" class="form-control" cols="30" rows="6" placeholder="Alamat Lengkap Orang Tua"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>Nomor Hp Orang Tua</td>
                    <td><input class="form-control" type="text" name="nohp_ortu" id="" placeholder="Nomor Orang Tua yang bisa dihubungi"></td>
                  </tr>
                  <tr>
                    <td>Nama Wali</td>
                    <td><input class="form-control" type="text" name="nama_wali" id="" placeholder="Nama Lengkap Wali"></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan Wali</td>
                    <td><input class="form-control" type="text" name="pekerjaan_wali" id="" placeholder="Pekerjaan Wali"></td>
                  </tr>
                  <tr>
                    <td>Alamat Lengkap Wali</td>
                    <td>
                        <textarea name="alamat_wali" class="form-control" cols="30" rows="6" placeholder="Alamat Lengkap Wali"></textarea>
                    </td>
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