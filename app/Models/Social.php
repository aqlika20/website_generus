<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'settings_social_media';

    protected $fillable = [
        'id', 'facebook', 'instagram', 'twitter', 'youtube'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
