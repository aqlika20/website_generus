<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceStudent extends Model
{
    protected $table = 'attendance_student';

    protected $fillable = [
        'id', 'attendance_id', 'student_id', 'status'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
    
}

