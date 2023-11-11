<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPengawas extends Model
{
    protected $fillable = ['nip','nama','tanggal_lahir','satuan_kerja','pangkat_jabatan','golongan_jabatan','tmt_jabatan','pendidikan','pak_terakhir','status'];
    
    protected $dates = ['timestamps'];

    use HasFactory;
}
