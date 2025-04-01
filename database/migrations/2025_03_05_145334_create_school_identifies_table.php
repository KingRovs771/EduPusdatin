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
        Schema::create('school_identifies', function (Blueprint $table) {
            $table->string("sekolah_id")->primary();
            $table->integer("nss");
            $table->integer("npsn");
            $table->string("nama_sekolah");
            $table->enum("jenjang", ["SD", "SMP", "SMA", "SMK"]);
            $table->text("alamat");
            $table->string("kelurahan");
            $table->string("kecamatan");
            $table->string("kabupaten");
            $table->string("provinsi");
            $table->integer("kode_pos");
            $table->string("telepon");
            $table->string("email");
            $table->string("website");
            $table->string("kd_guru");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_identifies');
    }
};
