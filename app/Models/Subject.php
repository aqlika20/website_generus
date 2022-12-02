<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'id', 'name', 'description'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
