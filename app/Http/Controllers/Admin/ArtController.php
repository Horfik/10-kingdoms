<?php


namespace App\Http\Controllers\Admin;


use App\Models\Art;
use Inertia\Inertia;
use Inertia\Response;

class ArtController
{
    public function __invoke():Response
    {
        $public = Art::query()->where('type', 1)->orderBy('name')->get();
        $dark = Art::query()->where('type', 2)->orderBy('name')->get();

        $arts = [
            'public' => $public,
            'dark' => $dark,
        ];
        return Inertia::render('Admin/Art/Index', [
            'arts' => $arts,
            'background' => asset('storage/arts.jpg')
        ]);
    }
}
