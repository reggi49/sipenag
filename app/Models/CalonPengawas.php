<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPengawas extends Model
{
    protected $fillable = [
    'nip',
    'nama',
    'level',
    'kota',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'satuan_kerja',
    'pangkat_jabatan',
    'golongan_jabatan',
    'tmt_jabatan',
    'pendidikan',
    'masa_kerja',
    'ket_unit_kerja',
    'pak_terakhir',
    'status_pegawai',
    'status',
    'file',
    'skp',
    'hasil_ukom',
    'sertifikat_ukom',
    'id_formasi'
    ];
    
    protected $dates = ['timestamps'];

    use HasFactory;
}
