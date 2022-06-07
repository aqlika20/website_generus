<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = [
        'id', 'code', 'name', 'image', 'description', 'url', 'image_aligntment'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
