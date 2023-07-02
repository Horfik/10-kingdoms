<?php


namespace App\Http\Controllers\Admin;


use App\Models\Person;
use Inertia\Inertia;
use Inertia\Response;

class PersonController
{
    public function __invoke()
    {
        $persons = Person::all();
        return Inertia::render('Admin/Person/Index', [
            'persons' => $persons
        ]);
    }
}
