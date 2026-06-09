<?php

namespace App\Services;

use App\Models\Art;
use App\Repositories\Interfaces\ArtRepositoryInterface;
use App\Services\Interfaces\ArtServiceInterface;
use App\Services\Interfaces\KingdomServiceInterface;

class ArtService extends BaseModelService implements ArtServiceInterface
{
    public function __construct(ArtRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getBySlug(string $slug): ?Art
    {
        return $this->repository->getBySlug($slug);
    }
}
