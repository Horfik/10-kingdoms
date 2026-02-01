<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kingdom extends Model
{
    protected $fillable = [
        'name',
        'description',
        'ruler',
        'capital',
        'population',
        'attraction',
        'emblem ',
    ];
}
