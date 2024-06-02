<?php


namespace App\Http\Controllers\Admin;


use App\Http\Services\Homes;
use App\Models\Person;
use Inertia\Inertia;
use Inertia\Response;

class PersonController
{
    public function __invoke()
    {
        $homes = Homes::$homes;
        $persons = Person::query()->orderBy('name')->get();

        $personsHomes = [];

        foreach ($persons as $key => $person)
        {
            $personsHomes[$person['home']][] = $person;
        }
        return Inertia::render('Admin/Person/Index', [
            'persons' => $personsHomes,
            'homes' => $homes,
            'background' => asset('storage/persons.jpg'),
        ]);
    }
}
