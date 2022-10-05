<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dalil extends Model
{
    protected $table = 'dalils';

    protected $fillable = [
        'id', 'title', 'image', 'latin', 'arti'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
