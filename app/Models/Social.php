<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'settings_social_media';

    protected $fillable = [
        'id', 'instagram'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
