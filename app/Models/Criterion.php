<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
    protected $fillable = [
        'id', 'name', 'desc', 'parent_id', 'observation', 'report_id', 'formula_id', 'integrate', 'checking', 'ai_prompt', 'upload', 'status',
    ];

    protected $casts = [
        'name' => 'json',
        'desc' => 'json',
    ];
}
