<?php

namespace App\Http\Controllers;

use App\Http\Requests\Race\StoreRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Response;
use App\Models\Race;

class RaceController extends Controller
{
    public function index():Response
    {

        $game = Race::query()->where('type', 1)->orderBy('name')->get();
        $notGame = Race::query()->where('type', 2)->orderBy('name')->get();
        $fairy = Race::query()->where('type', 3)->orderBy('name')->get();
        $races = [
            'game' => $game,
            'notGame' => $notGame,
            'fairy' => $fairy
        ];
        return Inertia::render('Race/Index', [
            'races' => $races,
            'background' => asset('storage/races.jpg')
        ]);
    }

    public function create():Response
    {
        return Inertia::render('Race/Create', ['background' => asset('storage/races.jpg')]);
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        Race::create($data);
        return Redirect::route('admin.race.index');
    }

    public function edit(Race $race):Response
    {
        return Inertia::render('Race/Edit', [
            'race' => $race,
            'background' => asset('storage/races.jpg')
        ]);
    }

    public function update(StoreRequest $request, Race $race):RedirectResponse
    {
        $data = $request->validated();
        $race->update($data);
        return Redirect::route('admin.race.index');
    }

    public function destroy(Race $race):RedirectResponse
    {
        $race->delete();
        return Redirect::route('admin.race.index');
    }
}
