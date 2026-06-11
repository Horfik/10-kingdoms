<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseModelRepositoryInterface
{
    public function getById(int $id): ?Model;

    public function create(array $data): Model;

    public function update(Model $model, array $data): Model;

    public function delete(Model $model): bool;

    public function all(): Collection;

    public function getCollectionByFilter(array $filters): Collection;
}
