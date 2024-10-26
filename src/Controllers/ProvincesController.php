<?php

namespace Sportscar03\Address\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Sportscar03\Address\Repositories\Provinces\ProvincesRepository;

class ProvincesController extends Controller
{
    public function __construct(protected ProvincesRepository $repository)
    {
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function getByRegion(string $regionId): Collection
    {
        return $this->repository->getByRegion($regionId);
    }
}
