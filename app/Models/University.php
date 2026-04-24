<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'id', 'name', 'api_key', 'client_id', 'client_secret', 'url', 'logo',
    ];

    protected $casts = [
        'name' => 'json'
    ];
}
