<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Inertia\Inertia;
use Inertia\Response;

class MechanicController extends Controller
{
    public function __invoke():Response
    {
        $mechanics = Mechanic::all();
        return Inertia::render('Admin/Mechanic/Index', [
            'mechanics' => $mechanics,
            'background' => asset('storage/organizations.jpg')
        ]);
    }
}
