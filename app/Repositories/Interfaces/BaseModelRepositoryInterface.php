<?php

namespace App\Repositories\Interfaces;

use App\Classes\Filter;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseModelRepositoryInterface
{
    public function getById(int $id): ?Model;

    public function create(array $data): Model;

    public function update(Model $model, array $data): Model;

    public function delete(Model $model): bool;

    public function all(): Collection;

    public function find(Filter $filter, bool $paginate = true, ?int $page = null): LengthAwarePaginator|Collection;
}
