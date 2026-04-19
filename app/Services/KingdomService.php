<?php

namespace App\Services;

use App\Repositories\Interfaces\KingdomRepositoryInterface;
use App\Services\Interfaces\KingdomServiceInterface;

class KingdomService extends BaseModelService implements KingdomServiceInterface
{
    public function __construct(KingdomRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
