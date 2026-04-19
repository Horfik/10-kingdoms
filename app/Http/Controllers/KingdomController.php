<?php

namespace App\Http\Controllers;

use App\Http\Resources\KingdomResource;
use App\Services\Interfaces\KingdomServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use OpenApi\Attributes as OA;

class KingdomController extends Controller
{
    public function __construct(private readonly KingdomServiceInterface $service) {}

    #[OA\Get(
        path: '/api/kingdoms',
        description: 'get list of Kingdoms',
        tags: ['KINGDOMS'],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Success',
                content: new OA\JsonContent(
                    ref: '#/components/schemas/KingdomCollection',
                )),
        ]
    )]
    public function index(Request $request): AnonymousResourceCollection
    {
        return KingdomResource::collection($this->service->all());
    }
}
