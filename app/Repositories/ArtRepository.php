<?php

namespace App\Repositories;

use App\Models\Art;
use App\Repositories\Interfaces\ArtRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class ArtRepository extends BaseModelRepository implements ArtRepositoryInterface
{
    protected function getQuery(): Builder
    {
        return Art::query();
    }

    public function getBySlug(string $slug): ?Art
    {
        /** @var ?Art $art */
        $art = $this->getQuery()->where('slug', $slug)->first();

        return $art;
    }
}
