<?php


namespace App\Http\Controllers\Admin;


use App\Models\Kingdom;
use App\Models\Person;
use Inertia\Inertia;
use Inertia\Response;

class KingdomController
{
    public function __invoke()
    {
        $kingdoms = Kingdom::all();
        return Inertia::render('Admin/Kingdom/Index', [
            'kingdoms' => $kingdoms,
            'background' => asset(\App\Http\Controllers\KingdomController::backgroundPath)
        ]);
    }
}
