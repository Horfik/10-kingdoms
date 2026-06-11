<?php

namespace App\Models;

use App\Traits\HasFilter;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $ruler
 * @property string $capital
 * @property string $population
 * @property string $attraction
 * @property string $emblem
 */
class Kingdom extends Model
{
    use HasFilter;

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
