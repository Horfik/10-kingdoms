<?php

namespace App\Http\Controllers;

use App\Http\Requests\Character\StoreRequest;
use App\Models\Character;
use App\Models\Race;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Services\CharacterService;
use App\Models\Attribute;

class CharacterController extends CharacterService
{
    public function index(Request $request):Response
    {
        $user = $request->user();
        $characters = Character::query()->where('user_id', $user->id)->get();
        return Inertia::render('Character/Index/Index', [
            'characters' => $characters,
        ]);
    }

    public function create(Request $request):Response
    {
        $player = $request->user()->name;
        $races = Race::all();
        return Inertia::render('Character/Create/Create', [
            'player' => $player,
            'races' => $races,
        ]);
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;
        $data['version'] = 1;
        $data['money'] = 0;
        $data['will'] = 0;
        $data['experience'] = 0;
        $data['age'] = 0;
        $data['nightmare'] = 0;
        $data['chaos'] = 0;
        $data['reroll'] = 0;
        
        $character = Character::create($data);
        $this->storeAttributes($character->id);

        return Redirect::route('character.index');
    }

    public function show(Character $character):Response
    {
        $resource = $character;
        $resource['race'] = $character->race;
        $attributes = Attribute::query()->where('character_id', $character->id)->get();
        $attributes = $this->attributesResource($attributes);
        return Inertia::render('Character/Show/Show', [
            'character' => $resource,
            'attributes' => $attributes,
        ]);
    }

    public function update(Character $character, StoreRequest $request):Response
    {
        $data = $request->validated();
        $character->update($data);
        $resource = $character;
        $resource['race'] = $character->race;
        return Inertia::render('Character/Show/Show', [
            'character' => $resource,
        ]);
    }
}
