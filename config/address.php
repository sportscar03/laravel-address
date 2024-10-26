<?php

use Sportscar03\Address\Entities\Barangay;
use Sportscar03\Address\Entities\City;
use Sportscar03\Address\Entities\Province;
use Sportscar03\Address\Entities\Region;

return [

    /*
     * --------------------------------------------------------------------------
     * API Route Prefix
     * --------------------------------------------------------------------------
     */
    'prefix' => '/api/v1/address',

    /*
     * --------------------------------------------------------------------------
     * API Route Middleware
     * --------------------------------------------------------------------------
     */
    'middleware' => [
        'auth:api',
    ],

    /*
     * --------------------------------------------------------------------------
     * PSA Official PSGC publication
     * --------------------------------------------------------------------------
     * @see https://psa.gov.ph/classification/psgc/
     */
    'publication' => [
        'path' => base_path('vendor/sportscar03/laravel-address/database/seeders/publication/PSGC-3Q-2024-Publication-Datafile.xlsx'),
        'sheet' => 4,
    ],

    /*
     * --------------------------------------------------------------------------
     * Models mapping
     * --------------------------------------------------------------------------
     */
    'models' => [
        'region' => Region::class,
        'province' => Province::class,
        'city' => City::class,
        'barangay' => Barangay::class,
    ],
];
