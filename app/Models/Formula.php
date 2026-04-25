<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $fillable = [
        'id', 'name', 'status',
    ];

    protected $casts = [
        'name' => 'json'
    ];
}
