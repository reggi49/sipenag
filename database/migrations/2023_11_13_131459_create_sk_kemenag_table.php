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
        Schema::create('sk_kemenag', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pangkat_jabatann');
            $table->string('golongan_jabatan');
            $table->string('jenis_formasi');
            $table->string('satuan_kerja');
            $table->string('nomor_sk');
            $table->string('dokumen_sk');
            $table->string('masa_keja_golongan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sk_kemenag');
    }
};
