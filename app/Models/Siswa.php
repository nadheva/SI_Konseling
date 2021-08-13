<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['id','nama_siswa','nis', 'jk', 'kelas', 'ttl'];

    use HasFactory;
}
