<?php


namespace App\Http\Controllers\Admin;


use App\Models\Race;
use Inertia\Inertia;
use Inertia\Response;

class RaceController
{
    public function __invoke()
    {
        $game = Race::query()->where('type', 1)->orderBy('name')->get();
        $notGame = Race::query()->where('type', 2)->orderBy('name')->get();
        $fairy = Race::query()->where('type', 3)->orderBy('name')->get();
        $races = [
            'game' => $game,
            'notGame' => $notGame,
            'fairy' => $fairy,

        ];
        return Inertia::render('Admin/Race/Index', [
            'races' => $races,
            'background' => asset(\App\Http\Controllers\RaceController::backgroundPath)
        ]);
    }
}
