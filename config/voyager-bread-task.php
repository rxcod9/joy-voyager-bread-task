<?php

return [

    /*
     * If enabled for voyager-bread-task package.
     */
    'enabled' => env('VOYAGER_BREAD_TASK_ENABLED', true),

    /*
     * The config_key for voyager-bread-task package.
     */
    'config_key' => env('VOYAGER_BREAD_TASK_CONFIG_KEY', 'joy-voyager-bread-task'),

    /*
     * The route_prefix for voyager-bread-task package.
     */
    'route_prefix' => env('VOYAGER_BREAD_TASK_ROUTE_PREFIX', 'joy-voyager-bread-task'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadTask\\Http\\Controllers',
    ],
];
