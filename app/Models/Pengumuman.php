<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumumans';
    
    protected $fillable = [
        'id', 'title', 'description', 'link', 'link_name', 'image'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
