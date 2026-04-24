<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Observance extends Model
{
    protected $fillable = ['code', 'name', 'status'];

    protected $casts = [
        'name' => 'json'
    ];
}
