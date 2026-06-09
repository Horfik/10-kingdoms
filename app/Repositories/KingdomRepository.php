<?php

namespace App\Repositories;

use App\Classes\Filter;
use App\Http\Filters\KingdomFilter;
use App\Models\Kingdom;
use App\Repositories\Interfaces\KingdomRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class KingdomRepository extends BaseModelRepository implements KingdomRepositoryInterface
{
    protected function getQuery(): Builder
    {
        return Kingdom::query();
    }

    protected function getFilter(array $filter): Filter
    {
        return new KingdomFilter($filter);
    }
}
