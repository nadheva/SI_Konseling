<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konselor extends Model
{
    protected $table = 'konselor';
    protected $fillable = ['id','nama_konselor','nis', 'jk', 'ttl'];

    use HasFactory;
}
