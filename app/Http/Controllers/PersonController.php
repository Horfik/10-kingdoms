<?php

namespace App\Http\Controllers;

use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use App\Http\Services\Homes;
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
        $homes = Homes::$homes;
        $persons = Person::query()->orderBy('name')->get();

        $personsHomes = [];

        foreach ($persons as $key => $person)
        {
            $personsHomes[$person['home']][] = $person;
        }
        return Inertia::render('Person/Index',[
            'persons' => $personsHomes,
            'homes' => $homes,
            'background' => asset('storage/persons.jpg')
        ]);
    }

    public function create():Response
    {
        return Inertia::render('Person/Create', [
            'background' => asset('storage/persons.jpg'),
            'homes' => Homes::$homes
        ]);
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        $nameImage = md5(Carbon::now() . '_' . $data['image']->getClientOriginalName()) . '.' . $data['image']->getClientOriginalExtension();
        $pathImage = Storage::disk('public')->putFileAs('/images/persons', $data['image'], $nameImage);
        Person::create([
            'name' => $data['name'],
            'home' => $data['home'],
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
            'background' => asset('storage/persons.jpg'),
            'homes' => Homes::$homes
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
