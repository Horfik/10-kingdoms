<?php

namespace App\Http\Resources;

use App\Models\Kingdom;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @mixin Kingdom
 */
#[OA\Schema(
    schema: 'KingdomCollection',
    properties: [
        new OA\Property(property: 'data', type: 'array', items: new OA\Items(ref: '#/components/schemas/KingdomResource')),
    ]
)]
#[OA\Schema(
    schema: 'KingdomResource',
    properties: [
        new OA\Property(property: 'id', type: 'integer'),
        new OA\Property(property: 'name', type: 'string'),
        new OA\Property(property: 'description', type: 'string'),
        new OA\Property(property: 'ruler', type: 'string'),
        new OA\Property(property: 'population', type: 'string'),
        new OA\Property(property: 'attraction', type: 'string'),
        new OA\Property(property: 'emblem', type: 'string'),
        new OA\Property(property: 'capital', type: 'string'),
        new OA\Property(property: 'created_at', type: 'datetime'),
        new OA\Property(property: 'updated_at', type: 'datetime'),
    ],
)]
class KingdomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
