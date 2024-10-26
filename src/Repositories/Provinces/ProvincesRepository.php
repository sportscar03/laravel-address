<?php

namespace Sportscar03\Address\Repositories\Provinces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ProvincesRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection<array-key, \Sportscar03\Address\Entities\Province>
     */
    public function getByRegion(string $regionId): Collection;

    /**
     * @return \Illuminate\Database\Eloquent\Collection<array-key, \Sportscar03\Address\Entities\Province>
     */
    public function all(): Collection;

    /**
     * @return \Sportscar03\Address\Entities\Province
     */
    public function getModel(): Model;
}
