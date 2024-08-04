<?php


namespace App\Http\Controllers\Admin;


use App\Models\Organization;
use Inertia\Inertia;
use Inertia\Response;

class OrganizationController
{
    public function __invoke():Response
    {
        $legal = Organization::query()->where("type", 1)->get();
        $illegal = Organization::query()->where("type", 2)->get();
        $other = Organization::query()->where("type", 3)->get();
        $organizations = [
            'legal' => $legal,
            'illegal' => $illegal,
            'other' => $other,
        ];
        return Inertia::render('Admin/Organization/Index', [
            "organizations" => $organizations,
            'background' => asset(\App\Http\Controllers\OrganizationController::backgroundPath)
        ]);
    }
}
