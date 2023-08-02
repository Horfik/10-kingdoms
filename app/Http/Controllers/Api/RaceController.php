<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Race;

class RaceController extends Controller
{
    public function __invoke()
    {
        $races = Race::query()->where('type', 1)->get();
        return $races;
    }
}
