<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumumans';
    
    protected $fillable = [
        'id', 'title', 'isi'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
