<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jadwalujian';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tanggalujian',
        'jammulai',
        'namamatakuliah',
    ];
}
