<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanFormasi extends Model
{
    protected $fillable = 
    [
        'nomor_surat_kabko', 
        'nomor_surat_prov', 
        'nomor_surat_pusat', 
        'nomor_surat_kemendikbud', 
        'nomor_surat_kemenpan', 
        'nomor_surat_usulan',
        'tanggal_surat_usulan',
        'nomor_surat_usulan',
        'tanggal_surat_usulan',
        'nama_dokumen', 
        'nomor_dokumen',
        'tanggal_dokumen', 
        'file_dokumen', 
        'file_surat', 
        'file_pendukung_prov', 
        'pratama_jenjang_mi', 
        'pratama_jenjang_mts', 
        'pratama_jenjang_ma', 
        'muda_jenjang_mi', 
        'muda_jenjang_mts', 
        'muda_jenjang_ma', 
        'madya_jenjang_mi', 
        'madya_jenjang_mts', 
        'madya_jenjang_ma', 
        'utama_jenjang_mi', 
        'utama_jenjang_mts', 
        'utama_jenjang_ma',
        'status'
    ];
    protected $dates = [' tanggal_surat_usulan', 'tanggal_dokumen'];

    use HasFactory;
}
