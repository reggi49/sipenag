<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjiKompetensi extends Model
{
    use HasFactory;
    
    protected $fillable = ['nomor_ujian', 'nip', 'nilai', 'status', 'tanggal'];

    protected $dates = [' tanggal'];

}
