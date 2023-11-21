<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKota extends Model
{
    protected $fillable = ['nip', 'nama', 'tanggal_lahir', 'satuan_kerja', 'pangkat_jabatan', 'golongan_jabatan', 'tmt_jabatan', 'pendidikan', 'pak_terakhir', 'status', 'file'];

    protected $dates = ['timestamps'];

    use HasFactory;
}
