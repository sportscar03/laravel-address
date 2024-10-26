<?php

namespace Sportscar03\Address\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Sportscar03\Address\Repositories\Cities\CitiesRepository;

class CitiesController extends Controller
{
    public function __construct(protected CitiesRepository $repository)
    {
    }

    public function getByProvince(string $provinceId): Collection
    {
        return $this->repository->getByProvince($provinceId);
    }

    public function getByRegionAndProvince(string $regionId, string $provinceId): Collection
    {
        return $this->repository->getByRegionAndProvince($regionId, $provinceId);
    }
}
