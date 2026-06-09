<?php

namespace App\Models;

use App\Enums\ArtTypeEnum;
use App\Observers\ArtObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property ArtTypeEnum $type
 * @property string $attributes
 * @property boolean $is_fairy
 * @property boolean $is_continent
 * @property boolean $is_available_from_start
 * @property string $first_stage_name
 * @property string $first_stage_description
 * @property ?string $first_stage_condition
 * @property string $second_stage_name
 * @property string $second_stage_description
 * @property ?string $second_stage_condition
 * @property string $third_stage_name
 * @property string $third_stage_description
 * @property ?string $third_stage_condition
 * @property string $fourth_stage_name
 * @property string $fourth_stage_description
 * @property ?string $fourth_stage_condition
 */
#[ObservedBy(ArtObserver::class)]
class Art extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'attributes',
        'type',
        'first_stage_name',
        'first_stage_description',
        'first_stage_condition',
        'second_stage_name',
        'second_stage_description',
        'second_stage_condition',
        'third_stage_name',
        'third_stage_description',
        'third_stage_condition',
        'fourth_stage_name',
        'fourth_stage_description',
        'fourth_stage_condition',
        'is_fairy',
        'is_continent',
        'is_available_from_start',
    ];

    protected $casts = [
        'type' => ArtTypeEnum::class,
        'is_fairy' => 'boolean',
        'is_continent' => 'boolean',
        'is_available_from_start' => 'boolean',
    ];
}
