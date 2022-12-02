<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{

    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
        'roles_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $date = [
        'created_at', 'updated_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() 
    {
        return $this->belongsTo('App\Models\Role');
    }
    
}
