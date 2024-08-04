<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mechanic\StoreRequest;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class MechanicController extends Controller
{
    const backgroundPath = "storage/mechanics.jpg";
    public function index():Response
    {
        $mechanics = Mechanic::all();
        return Inertia::render('Mechanic/Index', [
            'mechanics' => $mechanics,
            'background' => asset(self::backgroundPath)
        ]);
    }

    public function create ():Response
    {
        return Inertia::render('Mechanic/Create', [
            'background' => asset(self::backgroundPath)
        ]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Mechanic::create($data);
        return Redirect::route('admin.mechanic.index');
    }

    public function edit(Mechanic $mechanic)
    {
        return Inertia::render('Mechanic/Edit', [
            'mechanic' => $mechanic,
            'background' => asset(self::backgroundPath)
        ]);
    }

    public function update(Mechanic $mechanic, StoreRequest $request)
    {
        $data = $request->validated();
        $mechanic->update($data);
        return Redirect::route('admin.mechanic.index');
    }

    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();
        return Redirect::route('admin.mechanic.index');
    }
}
