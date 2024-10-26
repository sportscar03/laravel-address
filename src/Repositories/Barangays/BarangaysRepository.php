<?php

namespace Sportscar03\Address\Repositories\Barangays;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BarangaysRepository
{
    /**
     * Get barangays by region, province and city ID.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\Sportscar03\Address\Entities\Barangay>
     */
    public function getByRegionProvinceAndCityId(string $regionId, string $provinceId, string $cityId): Collection;

    /**
     * Get barangays by region, province and city ID.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\Sportscar03\Address\Entities\Barangay>
     */
    public function getByCity(string $cityId): Collection;

    /**
     * @return \Sportscar03\Address\Entities\Barangay
     */
    public function getModel(): Model;
}
