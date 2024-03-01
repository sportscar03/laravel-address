<?php

namespace Yajra\Address\Repositories\Provinces;

use Yajra\Address\Repositories\EloquentRepositoryInterface;

interface ProvincesRepository extends EloquentRepositoryInterface
{
    /**
     * Get province by region ID.
     *
     * @param int $regionId
     * @return \Illuminate\Database\Eloquent\Collection<array-key, \Yajra\Address\Entities\Province>
     */
    public function getProvinceByRegion($regionId);
}
