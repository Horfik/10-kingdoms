<?php

namespace App\Services;

use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use App\Services\Interfaces\OrganizationServiceInterface;

class OrganizationService extends BaseModelService implements OrganizationServiceInterface
{
    public function __construct(OrganizationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
