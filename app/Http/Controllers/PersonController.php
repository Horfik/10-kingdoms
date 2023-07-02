<?php

namespace App\Http\Controllers;

use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class PersonController extends Controller
{
    public function index():Response
    {
        return Inertia::render('Person/Index',[
            'persons' => Person::query()->orderBy('name')->get(),
            'background' => asset('storage/person.jpg')
        ]);
    }

    public function create():Response
    {
        return Inertia::render('Person/Create', ['background' => asset('storage/person.jpg')]);
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        $nameImage = md5(Carbon::now() . '_' . $data['image']->getClientOriginalName()) . '.' . $data['image']->getClientOriginalExtension();
        $pathImage = Storage::disk('public')->putFileAs('/images/persons', $data['image'], $nameImage);
        Person::create([
            'name' => $data['name'],
            'biography' => $data['biography'],
            'image_path' => $pathImage,
            'image_url' => url('/storage/' . $pathImage),
        ]);
        return Redirect::route('admin.person.index');
    }

    public function edit(Person $person):Response
    {
        return Inertia::render('Person/Edit', [
            'person' => $person,
            'background' => asset('storage/person.jpg')
        ]);
    }

    public function update(Person $person, UpdateRequest $request):RedirectResponse
    {
        $data = $request->validated();
        if($data['image'])
        {
            $nameImage = md5(Carbon::now() . '_' . $data['image']->getClientOriginalName()) . '.' . $data['image']->getClientOriginalExtension();
            $pathImage = Storage::disk('public')->putFileAs('/images/persons', $data['image'], $nameImage);
            $data['image_path'] = $pathImage;
            $data['image_url'] = url('/storage/' . $pathImage);
            Storage::disk('public')->delete($person->image_path);
        }
        unset($data['image']);
        $person->update($data);
        return Redirect::route('admin.person.index');
    }

    public function destroy(Person $person):RedirectResponse
    {
        Storage::disk('public')->delete($person->image_path);
        $person->delete();

        return Redirect::route('admin.person.index');
    }
}
