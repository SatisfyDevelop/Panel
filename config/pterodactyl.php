<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Service Author
    |--------------------------------------------------------------------------
    |
    | Each panel installation is assigned a unique UUID to identify the
    | author of custom services, and make upgrades easier by identifying
    | standard Pterodactyl shipped services.
    */
    'service' => [
        'core' => 'ptrdctyl-v040-11e6-8b77-86f30ca893d3',
        'author' => env('SERVICE_AUTHOR'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    |
    | Should login success and failure events trigger an email to the user?
    */
    'auth' => [
        'notifications' => env('LOGIN_NOTIFICATIONS', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | Certain pagination result counts can be configured here and will take
    | effect globally.
    */
    'paginate' => [
        'frontend' => [
            'servers' => env('APP_PAGINATE_FRONT_SERVERS', 15),
        ],
        'api' => [
            'nodes' => env('APP_PAGINATE_API_NODES', 25),
            'servers' => env('APP_PAGINATE_API_SERVERS', 25),
            'users' => env('APP_PAGINATE_API_USERS', 25),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | API Options
    |--------------------------------------------------------------------------
    |
    | Configuration options for the API.
    */
    'api' => [
        'include_on_list' => env('API_INCLUDE_ON_LIST', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Guzzle Connections
    |--------------------------------------------------------------------------
    |
    | Configure the timeout to be used for Guzzle connections here.
    */
    'guzzle' => [
        'timeout' => env('GUZZLE_TIMEOUT', 5),
        'connect_timeout' => env('GUZZLE_CONNECT_TIMEOUT', 3),
    ],

    /*
    |--------------------------------------------------------------------------
    | Queue Names
    |--------------------------------------------------------------------------
    |
    | Configure the names of queues to be used in the database.
    */
    'queues' => [
        'low' => env('QUEUE_LOW', 'low'),
        'standard' => env('QUEUE_STANDARD', 'standard'),
        'high' => env('QUEUE_HIGH', 'high'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Console Configuration
    |--------------------------------------------------------------------------
    |
    | Configure the speed at which data is rendered to the console.
    */
    'console' => [
        'count' => env('CONSOLE_PUSH_COUNT', 10),
        'frequency' => env('CONSOLE_PUSH_FREQ', 200),
    ],

    /*
    |--------------------------------------------------------------------------
    | Task Timers
    |--------------------------------------------------------------------------
    |
    | The amount of time in minutes before performing certain actions on the system.
    */
    'tasks' => [
        'clear_log' => env('PTERODACTYL_CLEAR_TASKLOG', 720),
        'delete_server' => env('PTERODACTYL_DELETE_MINUTES', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | CDN
    |--------------------------------------------------------------------------
    |
    | Information for the panel to use when contacting the CDN to confirm
    | if panel is up to date.
    */
    'cdn' => [
        'cache' => 60,
        'url' => 'https://cdn.pterodactyl.io/releases/latest.json',
    ],

    /*
    |--------------------------------------------------------------------------
    | Language Editor
    |--------------------------------------------------------------------------
    |
    | Set `PHRASE_IN_CONTEXT` to true to enable the PhaseApp in-context editor
    | on this site which allows you to translate the panel, from the panel.
    */
    'lang' => [
        'in_context' => env('PHRASE_IN_CONTEXT', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | JSON Response Routes
    |--------------------------------------------------------------------------
    |
    | You should not edit this block. These routes are ajax based routes that
    | expect content to be returned in JSON format.
    */
    'json_routes' => [
        'api/*',
        'daemon/*',
        'remote/*',
    ],
];
