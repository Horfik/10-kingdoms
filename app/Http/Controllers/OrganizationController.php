<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrganizationResource;
use App\Services\Interfaces\OrganizationServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use OpenApi\Attributes as OA;

class OrganizationController extends Controller
{
    public function __construct(protected readonly OrganizationServiceInterface $service) {}

    #[OA\Get(
        path: '/api/organizations',
        description: 'get all organizations',
        tags: ['organizations'],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Success',
                content: new OA\JsonContent(ref: '#/components/schemas/OrganizationResourceCollection')
            ),
        ]
    )]
    public function index(Request $request): AnonymousResourceCollection
    {
        return OrganizationResource::collection($this->service->getCollection($request));
    }
}
