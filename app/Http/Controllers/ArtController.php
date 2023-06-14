<?php

namespace App\Http\Controllers;

use App\Http\Requests\Art\StoreRequest;
use App\Models\Art;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ArtController extends Controller
{
    public function index():Response
    {
        $public = Art::query()->where('type', 1)->orderBy('name')->get();
        $dark = Art::query()->where('type', 2)->orderBy('name')->get();
        $master = false;

        if(Auth::user())
        {
            if(Auth::user()->role === 'master')
            {
                $master = true;
            }
        }
        $arts = [
            'public' => $public,
            'dark' => $dark,
        ];

        return Inertia::render('Art/Index',[
            'arts' => $arts,
            'master' => $master,
            'background' => asset('storage/710680.jpg')
        ]);
    }

    public function create():Response
    {
        return Inertia::render('Art/Create', ['background' => asset('storage/710680.jpg')]);
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        Art::create($data);

        return Redirect::route('art.index');
    }

    public function edit(Art $art): Response
    {
        return Inertia::render("Art/Edit", [
            'art' => $art,
            'background' => asset('storage/710680.jpg')
        ]);
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