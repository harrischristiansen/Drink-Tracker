<?php

namespace App\Models;

class User extends Model {
    
    protected $fillable = [
        'name','password',
    ];
    
    protected $hidden = [
        'password',
    ];
}
