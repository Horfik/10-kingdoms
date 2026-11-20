<?php

namespace App\Repositories;

use App\Classes\Filter;
use App\Http\Filters\ArtFilter;
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

    protected function getFilter(array $filter): Filter
    {
        return new ArtFilter($filter);
    }
}
