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
        Schema::create('kelas_ekskuls', function (Blueprint $table) {
            $table->string("kelas_ekskul_id")->primary();
            $table->string("kd_ekskul");
            $table->string("kd_students");
            $table->string("academikyear_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_ekskuls');
    }
};
