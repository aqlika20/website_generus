<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doa extends Model
{
    protected $table = 'doas';

    protected $fillable = [
        'id', 'title', 'image', 'latin'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
