<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'settings_address';

    protected $fillable = [
        'id', 'title', 'description'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
