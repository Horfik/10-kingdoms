<?php

namespace App\Repositories;

use App\Classes\Filter;
use App\Http\Filters\OrganizationFilter;
use App\Models\Organization;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class OrganizationRepository extends BaseModelRepository implements OrganizationRepositoryInterface
{
    protected function getQuery(): Builder
    {
        return Organization::query();
    }

    protected function getFilter(array $filter): Filter
    {
        return new OrganizationFilter($filter);
    }
}
