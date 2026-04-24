<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'name', 'desc', 'status'
    ];

    protected $casts = [
        'name' => 'json',
    ];
}
