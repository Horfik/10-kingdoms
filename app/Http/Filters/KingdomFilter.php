<?php

namespace App\Http\Filters;

use App\Classes\Filter;

class KingdomFilter extends Filter
{
    public function type(string $type): void
    {
        $this->builder->where('type', $type);
    }
}
