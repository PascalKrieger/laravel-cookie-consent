<?php

return [

    /*
     * Set the name of the cookie which will hold the 
     * array of allowed cookies.
     */
    'cookie_name' => Illuminate\Support\Str::snake(env('APP_NAME')) . '_cookie_config',

    /*
     * Set the cookie duration.
     */
    'cookie_lifetime' => 60 * 24 * 7,

    /*
     * List here all categories of cookies your application uses.
     */
    'cookies' => [
        [
            'type' => 'Necessary',
            'description' => '(System, Security) - Always active',
            'disabled' => true, 
            'checked' => true 
        ],
        [
            'type' => 'Analytical',
            'description' => '(Google Analytics)',
            'disabled' => false,
            'checked' => true
        ],
        [
            'type' => 'Functional',
            'description' => '(Online Chat)',
            'disabled' => false,
            'checked' => true
        ]
    ]
];
