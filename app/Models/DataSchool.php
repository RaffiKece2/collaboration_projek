<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSchool extends Model
{
    protected $fillable = [
        'Nama_sekolah',
        'Kepala_sekolah',
        'Alamat',
        'Status_sekolah',
        'Jenjang_pendidikan',
        'Akreditasi',
        'Telp',
        'Email',
        'NPSN',
        'Tahun_berdiri',
        'Logo',
    ];
}
