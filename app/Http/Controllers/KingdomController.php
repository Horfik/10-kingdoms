<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kingdom\StoreRequest;
use App\Http\Requests\Kingdom\UpdateRequest;
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
        return Inertia::render('Kingdom/Create');
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        Kingdom::create($data);

        return Redirect::route('admin.kingdom.index');
    }

    public function edit(Kingdom $kingdom): Response
    {
        return Inertia::render("Kingdom/Edit", compact('kingdom'));
    }

    public function update(Kingdom $kingdom,UpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $kingdom->update($data);

        return Redirect::route('admin.kingdom.index');
    }

    public function destroy(Kingdom $kingdom): RedirectResponse
    {
        $kingdom->delete();

        return Redirect::route('admin.kingdom.index');
    }
}
