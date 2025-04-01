<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string("students_id")->primary();
            $table->string("nisn");
            $table->integer("nis");
            $table->string("name_students");
            $table->string("tempat_lahir");
            $table->string("tanggal_lahir");
            $table->string("jenis_kelamin");
            $table->string("agama");
            $table->text("alamat");
            $table->string("no_hp");
            $table->string("email");
            $table->date("diterima_tgl");
            $table->string("diterima_kelas");
            $table->string("asal_sekolah");
            $table->string("status_keluarga");
            $table->integer("anakke");
            $table->string("nama_ayah");
            $table->string("pekerjaan_ayah");
            $table->string("nama_ibu");
            $table->string("pekerjaan_ibu");
            $table->text("alamat_ortu");
            $table->string("nohp_ortu");
            $table->string("nama_wali");
            $table->string("pekerjaan_wali");
            $table->text("alamat_wali");
            $table->string("nohp_wali");
            $table->string("kelulusan");
            $table->string("academikyear_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
