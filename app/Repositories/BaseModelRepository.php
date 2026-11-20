<?php

namespace App\Repositories;

use App\Classes\Filter;
use App\Repositories\Interfaces\BaseModelRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class BaseModelRepository implements BaseModelRepositoryInterface
{
    public function all(): Collection
    {
        return $this->getQuery()->get();
    }

    public function create(array $data): Model
    {
        return $this->getQuery()->create($data);
    }

    public function update(Model $model, array $data): Model
    {
        $model->update($data);
        $model->refresh();

        return $model;
    }

    public function delete(Model $model): bool
    {
        return $model->delete();
    }

    public function getById(int $id): ?Model
    {
        return $this->getQuery()->find($id);
    }

    public function find(Filter $filter, bool $paginate = true, ?int $page = null): LengthAwarePaginator|Collection
    {
        /** @phpstan-ignore-next-line  */
        $req = $this->getQuery()->filter($filter);

        return $paginate ? $req->getPaginate(20, $page) : $req->get();
    }

    abstract protected function getQuery(): Builder;
}
