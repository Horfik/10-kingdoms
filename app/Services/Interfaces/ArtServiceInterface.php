<?php

namespace App\Services\Interfaces;

use App\Models\Art;

interface ArtServiceInterface extends BaseModelServiceInterface
{
    public function getBySlug(string $slug): ?Art;
}
