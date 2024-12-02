<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageCounter extends Model
{
    protected $table = 'pagecounter'; // Nama tabel sesuai dengan database

    // Properti yang diizinkan untuk mass assignment
    protected $fillable = ['jumlah'];
}
