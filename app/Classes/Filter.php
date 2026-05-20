<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

abstract class Filter
{
    protected array $ignoreMethods = [
        'apply', 'fields',
    ];
    public function __construct(readonly protected array $filters) {}

    public function apply(Builder $query): Builder
    {
        foreach ($this->getFields() as $field => $value) {
            $method = Str::camel($field);
            if (str_starts_with($method, '__') || in_array($method, $this->ignoreMethods)) {
                continue;
            }
            if (method_exists($this, $method)) {
                try {
                    call_user_func_array([$this, $method], [$value]);
                    $this->appliedFilters[$field] = $value;
                } catch (\Throwable $exception) {
                }
            }
        }
    }

    protected function getFields(): array
    {
        $fields = array_map(function ($item) {
            if (is_array($item)) {
                return $item;
            }
            if ($item === false) {
                $item = '0';
            }
            if ($item === true) {
                $item = '1';
            }

            return trim($item);
        }, $this->filters);

        return array_filter($fields, function ($item) {
            if (is_array($item)) {
                return count($item) > 0;
            }

            return strlen($item) > 0;
        });
    }
}
