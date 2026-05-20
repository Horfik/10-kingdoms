<?php

namespace App\Traits;

use App\Classes\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;


trait HasFilter
{
    public function scopeFilter(Builder $builder, Filter $filter): Builder
    {
        return $filter->apply($builder);
    }

    public function scopeGetPaginate(Builder $builder, int $perPage = null, $page = null): LengthAwarePaginator
    {
        return $builder->paginate($perPage, ['*'], 'page', $page);
    }
}
