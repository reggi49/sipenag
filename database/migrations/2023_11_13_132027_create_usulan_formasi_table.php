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
        Schema::create('usulan_formasi', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat_kabko');
            $table->string('nomor_surat_prov');
            $table->string('nomor_surat_pusat');
            $table->string('nomor_surat_kemendikbud');
            $table->string('nomor_surat_kemenpan');
            $table->string('tanggal_surat');
            $table->string('nama_dokumen');
            $table->string('jenis_formasi');
            $table->string('jumlah_formasi');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_formasi');
    }
};
