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
        Schema::create('formasi_menpan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat_kemenpan');
            $table->string('jenis_fomasi');
            $table->string('jenjang');
            $table->string('satuan_kerja');
            $table->string('jumlah_formasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formasi_menpan');
    }
};
