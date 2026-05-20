<?php

namespace App\Models;

use App\Enums\OrganizationTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property OrganizationTypeEnum $type
 * @property bool $is_fairy
 * @property bool $is_continent
 * @property Carbon $created_at
 * @property bool $updated_at
 */
class Organization extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'is_fairy',
        'is_continent',
    ];

    protected $casts = [
        'type' => OrganizationTypeEnum::class,
        'is_fairy' => 'boolean',
        'is_continent' => 'boolean',
    ];
}
