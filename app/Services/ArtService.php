<?php

namespace App\Services;

use App\Classes\Filter;
use App\Http\Filters\ArtFilter;
use App\Models\Art;
use App\Repositories\Interfaces\ArtRepositoryInterface;
use App\Services\Interfaces\ArtServiceInterface;

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

    public function getFilter(array $data): Filter
    {
        return new ArtFilter($data);
    }
}
