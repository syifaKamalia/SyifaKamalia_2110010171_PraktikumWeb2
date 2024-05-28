<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduks';

    protected $primaryKey = 'nik_kk';

    protected $fillabel = [
        'nik_kk',
        'nama_kk',
        'jeniskelamin_kk',
        'tlgllahir',
        'pendidikan_kk',
        'pekerjaan_kk',
        'penghasil_kk',
        'alamat_kk'
    ];
}
