<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'habitants',
        ],
    
        'api' => [
            'driver' => 'token',
            'provider' => 'habitants',
        ],
    ],
    
    'providers' => [
        'habitants' => [
            'driver' => 'eloquent',
            'model' => App\Models\Habitant::class,
        ],
    ],
    
    'passwords' => [
        'habitants' => [
            'provider' => 'habitants',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
