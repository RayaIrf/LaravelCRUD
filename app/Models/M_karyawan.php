<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_karyawan extends Model
{
    protected $table = 'karyawan';
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'email',
        'telepon',
        'alamat',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir'
    ];
}
