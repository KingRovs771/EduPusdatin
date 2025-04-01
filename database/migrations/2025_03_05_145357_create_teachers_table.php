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
        Schema::create('teachers', function (Blueprint $table) {
            $table->string("guru_id")->primary();
            $table->bigInteger("nip");
            $table->bigInteger("nuptk");
            $table->string("nama_guru");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahihir");
            $table->string("jenis_kelamin");
            $table->string("agama");
            $table->text("alamat");
            $table->string("no_hp");
            $table->string("email");
            $table->string("gelar_depan");
            $table->string("gelar_belakang");
            $table->string("kd_mapel");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
