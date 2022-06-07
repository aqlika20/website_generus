<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'settings_banner';

    protected $fillable = [
        'id', 'title', 'description'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
