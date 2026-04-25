<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriterionEvaluation extends Model
{
    protected $fillable = [
        'criterion_id', 'evaluation', 'has', 'score'
    ];
}
