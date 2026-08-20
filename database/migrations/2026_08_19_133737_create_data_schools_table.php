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
        Schema::create('data_schools', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_sekolah')->unique();
            $table->string('Kepala_sekolah');
            $table->string('Alamat');
            $table->string('Status_sekolah');
            $table->string('Jenjang_pendidikan');
            $table->string('Akreditasi');
            $table->string('Telp')->unique();
            $table->string('Email')->unique();
            $table->string('NPSN')->unique();
            $table->string('Tahun_berdiri');
            $table->string('Logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_schools');
    }
};
