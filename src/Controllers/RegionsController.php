<?php

namespace Sportscar03\Address\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Sportscar03\Address\Repositories\Regions\RegionsRepository;

class RegionsController extends Controller
{
    public function __construct(protected RegionsRepository $repository)
    {
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }
}
