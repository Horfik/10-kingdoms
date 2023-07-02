<?php

namespace App\Http\Controllers;

use App\Http\Requests\Art\StoreRequest;
use App\Models\Art;
use App\Models\Kingdom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class KingdomController extends Controller
{
    public function index():Response
    {
        $kingdoms = Kingdom::all();
        return Inertia::render('Kingdom/Index',[
            'kingdoms' => $kingdoms,
            'background' => asset('storage/kingdom.jpg')
        ]);
    }

    public function create():Response
    {
        return Inertia::render('Art/Create');
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        Art::create($data);

        return Redirect::route('art.index');
    }

    public function edit(Art $art): Response
    {
        return Inertia::render("Art/Edit", compact('art'));
    }

    public function update(Art $art,StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $art->update($data);

        return Redirect::route('art.index');
    }

    public function destroy(Art $art): RedirectResponse
    {
        $art->delete();

        return Redirect::route('art.index');
    }
}
