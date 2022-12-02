<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';

    protected $fillable = [
        'id', 'subject_id', 'user_id', 'date'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
    
}

