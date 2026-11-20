<?php

namespace App\Http\Controllers;

use App\Http\Filters\ArtFilter;
use App\Http\Resources\ArtResource;
use App\Services\ArtService;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function __construct(protected ArtService $service) {}

    public function index(Request $request)
    {
        $data = $request->all();
        $paginate = $request->input('paginate');
        $filter = new ArtFilter($data);
        if($paginate) {
            $list = $this->service->find($filter);
            return new ArtResource($list);
        } else {
            $list = $this->service->find($filter, false);
            return ArtResource::collection($list);
        }
    }
}
