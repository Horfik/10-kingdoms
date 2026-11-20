<?php

namespace App\Http\Filters;

use App\Classes\Filter;

class ArtFilter extends Filter
{
    public function type(string $type): void
    {
        $this->builder->where('type', $type);
    }

    public function isContinent(bool $isContinent): void
    {
        $this->builder->where('is_continent', $isContinent);
    }

    public function isFairy(bool $isFairy): void
    {
        //dd($isFairy);
        $this->builder->where('is_fairy', $isFairy);
    }
}
