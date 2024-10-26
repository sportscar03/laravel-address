<?php

namespace Sportscar03\Address\Repositories\Regions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RegionsRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection<array-key, Model>
     */
    public function all(): Collection;

    /**
     * @return \Sportscar03\Address\Entities\Region
     */
    public function getModel(): Model;
}
