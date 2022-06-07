<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $table = 'settings_organization_structure';

    protected $fillable = [
        'id', 'image'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
