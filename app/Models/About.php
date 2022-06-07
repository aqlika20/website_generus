<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'settings_about';

    protected $fillable = [
        'id', 'main_image', 'main_description', 'data_json'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
