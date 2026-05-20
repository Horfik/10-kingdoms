<?php

namespace App\Services;

use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use App\Services\Interfaces\KingdomServiceInterface;

class OrganizationService extends BaseModelService implements KingdomServiceInterface
{
    public function __construct(OrganizationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
