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
        Schema::create('calon_pengawas', function (Blueprint $table) {
            $table->id();
            $table->nip();
            $table->nama();
            $table->tanggal_lahir();
            $table->tempat_lahir();
            $table->satuan_kerja();
            $table->pangkat_jabatan();
            $table->golongan_jabatan();
            $table->tmt_jabatan();
            $table->pendidikan();
            $table->pak_terakhir();
            $table->status();
            $table->image();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_pengawas');
    }
};
