<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $table = 'navigations';

    protected $fillable = [
        'id', 'name', 'icon', 'self_url', 'url', 'contents_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
