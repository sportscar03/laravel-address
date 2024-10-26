<?php

namespace Sportscar03\Address\Repositories\Cities;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface CitiesRepository
{
    /**
     * Get province by region ID.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\Sportscar03\Address\Entities\City>
     */
    public function getByRegionAndProvince(string $regionId, string $provinceId): Collection;

    /**
     * Get cities by province.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\Sportscar03\Address\Entities\City>
     */
    public function getByProvince(string $provinceId): Collection;

    /**
     * Get cities by region.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\Sportscar03\Address\Entities\City>
     */
    public function getByRegion(string $regionId): Collection;

    /**
     * @return \Sportscar03\Address\Entities\City
     */
    public function getModel(): Model;
}
