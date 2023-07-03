<?php

namespace App\Http\Controllers;

use App\Http\Requests\Organization\StoreRequest;
use App\Models\Organization;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class OrganizationController extends Controller
{
    public function index():Response
    {
        $legal = Organization::query()->where("type", 1)->get();
        $illegal = Organization::query()->where("type", 2)->get();
        $other = Organization::query()->where("type", 3)->get();
        $organizations = [
            'legal' => $legal,
            'illegal' => $illegal,
            'other' => $other,
        ];
        return Inertia::render('Organization/Index', [
            "organizations" => $organizations
        ]);
    }

    public function create():Response
    {
        return Inertia::render('Organization/Create');
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        Organization::create($data);
        return Redirect::route('admin.organization.index');
    }

    public function edit(Organization $organization):Response
    {
        return Inertia::render('Organization/Edit', compact("organization"));
    }

    public function update(StoreRequest $request, Organization $organization):RedirectResponse
    {
        $data = $request->validated();
        $organization->update($data);
        return Redirect::route('admin.organization.index');
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return Redirect::route('admin.organization.index');
    }
}
