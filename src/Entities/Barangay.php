<?php

namespace Sportscar03\Address\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $code
 * @property string $region_id
 * @property string $province_id
 * @property string $city_id
 * @property string $barangay_id
 * @property string $name
 */
class Barangay extends Model
{
    protected $table = 'barangays';

    public $timestamps = false;
}
