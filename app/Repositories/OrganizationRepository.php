<?php

namespace App\Repositories;

use App\Models\Organization;
use App\Repositories\Interfaces\KingdomRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class OrganizationRepository extends BaseModelRepository implements KingdomRepositoryInterface
{
    protected function getQuery(): Builder
    {
        return Organization::query();
    }
}
