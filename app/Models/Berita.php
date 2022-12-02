<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'id', 'title', 'description', 'link', 'link_name', 'image'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
