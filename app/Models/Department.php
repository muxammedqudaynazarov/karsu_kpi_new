<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'parent_id', 'evaluation', 'access', 'status'
    ];

    protected $casts = [
        'name' => 'json'
    ];
}
