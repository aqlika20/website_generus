<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewAttendance extends Model
{
    protected $table = 'viewattendance';

    protected $fillable = [
        'id', 'subject_id', 'user_id', 'date', 'attendance_id', 'student_id', 'status'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
    
}

