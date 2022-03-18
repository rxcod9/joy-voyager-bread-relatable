<?php

return [

    /*
     * If enabled for voyager-bread-relatable package.
     */
    'enabled' => env('VOYAGER_BREAD_RELATABLE_ENABLED', true),

    /*
     * The config_key for voyager-bread-relatable package.
     */
    'config_key' => env('VOYAGER_BREAD_RELATABLE_CONFIG_KEY', 'joy-voyager-bread-relatable'),

    /*
     * The route_prefix for voyager-bread-relatable package.
     */
    'route_prefix' => env('VOYAGER_BREAD_RELATABLE_ROUTE_PREFIX', 'joy-voyager-bread-relatable'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadRelatable\\Http\\Controllers',
    ],
];
