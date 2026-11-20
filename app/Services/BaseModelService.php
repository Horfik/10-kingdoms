<?php

namespace App\Services;

use App\Classes\Filter;
use App\Repositories\Interfaces\BaseModelRepositoryInterface;
use App\Services\Interfaces\BaseModelServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class BaseModelService implements BaseModelServiceInterface
{
    protected $repository;

    public function getById(int $id): ?Model
    {
        return $this->repository->getById($id);
    }

    public function create(array $data): Model
    {
        return $this->repository->create($data);
    }

    public function update(Model $model, array $data): Model
    {
        return $this->repository->update($model, $data);
    }

    public function delete(Model $model): bool
    {
        return $this->repository->delete($model);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function find(Filter $filter, bool $paginate = true, ?int $page = null): LengthAwarePaginator|Collection
    {
        return $this->repository->find($filter, $paginate, $page);
    }
}
