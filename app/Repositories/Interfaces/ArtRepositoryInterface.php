<?php

namespace App\Repositories\Interfaces;

use App\Models\Art;

interface ArtRepositoryInterface extends BaseModelRepositoryInterface
{
    public function getBySlug(string $slug): ?Art;
}
